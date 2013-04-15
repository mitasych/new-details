<?php

/**
 * This is the model class for table "contest".
 *
 * The followings are the available columns in table 'contest':
 * @property integer $id
 * @property string $name
 * @property string $machine_name
 * @property string $description
 * @property string $short_description
 * @property integer $contest_media_type_id
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_time
 * @property string $update_time
 * @property string $start_time
 * @property string $end_time
 * @property integer $winner_item_id
 * @property integer $winner_id
 *
 * The followings are the available model relations:
 * @property ContestMediaType $contestMediaType
 */
class Contest extends Details
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contest the static model class
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
		return 'contest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, machine_name, description, short_description, contest_media_type_id, create_user_id, update_user_id', 'required'),
			array('contest_media_type_id, create_user_id, update_user_id, winner_item_id, winner_id', 'numerical', 'integerOnly'=>true),
			array('name, machine_name', 'length', 'max'=>255),
			array('short_description', 'length', 'max'=>600),
			array('create_time, update_time, start_time, end_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, machine_name, description, short_description, contest_media_type_id, create_user_id, update_user_id, create_time, update_time, start_time, end_time, winner_item_id, winner_id', 'safe', 'on'=>'search'),
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
			'contestMediaType' => array(self::BELONGS_TO, 'ContestMediaType', 'contest_media_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => Yii::t('main','Name'),
			'machine_name' => Yii::t('main','Machine Name'),
			'description' => Yii::t('main','Description'),
			'short_description' => Yii::t('main','Short Description'),
			'contest_media_type_id' => Yii::t('main','Contest Media Type'),
			'create_user_id' => Yii::t('main','Create User'),
			'update_user_id' => Yii::t('main','Update User'),
			'create_time' => Yii::t('main','Create Time'),
			'update_time' => Yii::t('main','Update Time'),
			'start_time' => Yii::t('main','Start Time'),
			'end_time' => Yii::t('main','End Time'),
			'winner_item_id' => Yii::t('main','Winner Item'),
			'winner_id' => Yii::t('main','Winner'),
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('machine_name',$this->machine_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('contest_media_type_id',$this->contest_media_type_id);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('winner_item_id',$this->winner_item_id);
		$criteria->compare('winner_id',$this->winner_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getMediaType()
	{
		return ContestMediaType::model()->findAll(array(
		    'select'=>'name',
		    'condition'=>'id=:contest_media_type_id',
		    'params'=>array(':contest_media_type_id'=>$this->contest_media_type_id),));
	}
}