<?php

/**
 * This is the model class for table "contest_post".
 *
 * The followings are the available columns in table 'contest_post':
 * @property integer $id
 * @property string $title
 * @property string $trans_title
 * @property string $main_image
 * @property string $content
 * @property string $description
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_time
 * @property string $update_time
 * @property integer $active
 * @property integer $contest_media_type_id
 * @property string $media_embed
 * @property integer $count_view
 * @property integer $contest_id
 *
 * The followings are the available model relations:
 * @property User $createUser
 * @property ContestMediaType $contestMediaType
 * @property Contest $contest
 */
class ContestPost extends Details
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContestPost the static model class
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
		return 'contest_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, description, create_user_id, update_user_id', 'required'),
			array('create_user_id, update_user_id, active, contest_media_type_id, count_view, contest_id', 'numerical', 'integerOnly'=>true),
			array('title, trans_title, main_image', 'length', 'max'=>256),
			array('description', 'length', 'max'=>600),
			array('media_embed', 'length', 'max'=>1000),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, trans_title, main_image, content, description, create_user_id, update_user_id, create_time, update_time, active, contest_media_type_id, media_embed, count_view, contest_id', 'safe', 'on'=>'search'),
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
			'contestMediaType' => array(self::BELONGS_TO, 'ContestMediaType', 'contest_media_type_id'),
			'contest' => array(self::BELONGS_TO, 'Contest', 'contest_id'),
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
			'trans_title' => Yii::t('main','Latin Title'),
			'main_image' => Yii::t('main','Main Image'),
			'content' => Yii::t('main','Content'),
			'description' => Yii::t('main','Description'),
			'create_user_id' => Yii::t('main','Create User'),
			'update_user_id' => Yii::t('main','Update User'),
			'create_time' => Yii::t('main','Create Time'),
			'update_time' => Yii::t('main','Update Time'),
			'active' => Yii::t('main','Active'),
			'contest_media_type_id' => Yii::t('main','Contest Media Type'),
			'media_embed' => Yii::t('main','Media Embed'),
			'count_view' => Yii::t('main','Count View'),
			'contest_id' => Yii::t('main','Contest'),
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
		$criteria->compare('trans_title',$this->trans_title,true);
		$criteria->compare('main_image',$this->main_image,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('contest_media_type_id',$this->contest_media_type_id);
		$criteria->compare('media_embed',$this->media_embed,true);
		$criteria->compare('count_view',$this->count_view);
		$criteria->compare('contest_id',$this->contest_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}