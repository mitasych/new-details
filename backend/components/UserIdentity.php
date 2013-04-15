<?php
/**
 * UserIdentity.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 8/12/12
 * Time: 10:00 PM
 */
class UserIdentity extends CUserIdentity {
	/**
	 * @var integer id of logged user
	 */
	private $_id;

	/**
	 * Authenticates username and password
	 * @return boolean CUserIdentity::ERROR_NONE if successful authentication
	 */
	public function authenticate() {
		$attribute = strpos($this->username, '@') ? 'email' : 'username';
		$user = User::model()->find(array('condition' => $attribute . '=:loginname', 'params' => array(':loginname' => $this->username)));
// 		echo '<b>'.__FILE__.' -- '.__LINE__.'</b><pre>'; var_dump($this->username); echo'</pre>';
// 		echo '<b>'.__FILE__.' -- '.__LINE__.'</b><pre>'; var_dump($this->password); echo'</pre>';
// 		echo '<b>'.__FILE__.' -- '.__LINE__.'</b><pre>'; var_dump($user->password); echo'</pre>';
// 		echo '<b>'.__FILE__.' -- '.__LINE__.'</b><pre>'; var_dump(crypt($this->password,$user->password)); echo'</pre>';die;
		if ($user === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
// 		} else if (!$user->verifyPassword($this->password)) {
		} else if ($user->password!==crypt($this->password,$user->password)) {
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		} else {
			//$user->regenerateValidationKey();
			$this->_id = $user->id;
			$this->username = $user->username;
// 			$this->setState('vkey', $user->validation_key);
			$this->setState('vkey', $user->activkey);
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	/**
	 * Creates an authenticated user with no passwords for registration
	 * process (checkout)
	 * @param string $username
	 * @return self
	 */
// 	public static function createAuthenticatedIdentity($id, $username) {
// 		$identity = new self($username, '');
// 		$identity->_id = $id;
// 		$identity->errorCode = self::ERROR_NONE;
// 		return $identity;
// 	}

	/**
	 *
	 * @return integer id of the logged user, null if not set
	 */
	public function getId() {
		return $this->_id;
	}
}