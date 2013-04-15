<?php

/**
 * This is the model class for table "image_post".
 *
 * The followings are the available columns in table 'image_post':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $img
 * @property string $create_time
 * @property integer $post_id
 * @property integer $main_image
 * @property integer $create_user_id
 *
 * The followings are the available model relations:
 * @property User $createUser
 * @property Post $post
 */
class ImagePost extends Details
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ImagePost the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'image_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('img, create_time, post_id, create_user_id', 'required'),
			array('post_id, main_image, create_user_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('description', 'length', 'max'=>500),
			array('img', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, img, create_time, post_id, main_image, create_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'createUser' => array(self::BELONGS_TO, 'User', 'create_user_id'),
			'post' => array(self::BELONGS_TO, 'Post', 'post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => Yii::t('main','Title'),
			'description' => Yii::t('main','Description'),
			'img' => Yii::t('main','Img'),
			'create_time' => Yii::t('main','Create Time'),
			'post_id' => Yii::t('main','Post'),
			'main_image' => Yii::t('main','Main Image'),
			'create_user_id' => Yii::t('main','Create User'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('main_image',$this->main_image);
		$criteria->compare('create_user_id',$this->create_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}