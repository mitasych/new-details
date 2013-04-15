<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id
 * @property string $title
 * @property string $trans_title
 * @property string $main_image
 * @property string $content
 * @property string $description
 * @property string $meta_keywords
 * @property string $meta_description
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_time
 * @property string $update_time
 * @property string $public_time
 * @property integer $active
 * @property string $media_type
 * @property integer $category_id
 * @property integer $subcategory_id
 * @property integer $front_slider
 * @property string $media_embed
 * @property integer $count_view
 * @property integer $color_id
 *
 * The followings are the available model relations:
 * @property User $createUser
 * @property User $updateUser
 * @property Category $category
 * @property PostTitleColor $color
 * @property MediaType $mediaType
 */
class Post extends Details
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, description, public_time, media_type, category_id', 'required'),
			array('id, create_user_id, update_user_id, active, category_id, subcategory_id, front_slider, count_view, color_id', 'numerical', 'integerOnly'=>true),
			array('title, trans_title, main_image', 'length', 'max'=>256),
			array('description', 'length', 'max'=>600),
			array('media_embed', 'length', 'max'=>1000),
			array('create_time, update_time, public_time', 'safe'),
			array('media_type', 'validTypeMedia', 'on'=>array('update', 'create'), ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, trans_title, main_image, content, description, create_user_id, update_user_id, create_time, update_time, public_time, active, media_type, category_id, subcategory_id, front_slider, media_embed, count_view, color_id', 'safe', 'on'=>'search'),
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
			'updateUser' => array(self::BELONGS_TO, 'User', 'update_user_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'titleColor' => array(self::BELONGS_TO, 'PostTitleColor', 'color_id'),
		//	'mediaType' => array(self::BELONGS_TO, 'MediaType', 'media_type'),
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
			'meta_keywords' => 'Meta Keywords',
			'meta_description' => 'Meta Description',
			'create_user_id' => Yii::t('main','Create User'),
			'update_user_id' => Yii::t('main','Update User'),
			'create_time' => Yii::t('main','Create Time'),
			'update_time' => Yii::t('main','Update Time'),
			'public_time' => Yii::t('main','Public Time'),
			'active' => Yii::t('main','Active'),
			'media_type' => Yii::t('main','Media Type'),
			'category_id' => Yii::t('main','Category'),
			'subcategory_id' => Yii::t('main','Subcategory'),
			'front_slider' => Yii::t('main','Front Slider'),
			'media_embed' => Yii::t('main','Media Embed'),
			'count_view' => Yii::t('main','Count View'),
			'color_id' => Yii::t('main','Color'),
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
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('public_time',$this->public_time,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('media_type',$this->media_type);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('subcategory_id',$this->subcategory_id);
		$criteria->compare('front_slider',$this->front_slider);
		$criteria->compare('media_embed',$this->media_embed,true);
		$criteria->compare('count_view',$this->count_view);
		$criteria->compare('color_id',$this->color_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getArMedia() 
	{
		return unserialize($this->media_type);
	}
	
	public function getmediaTypes()
	{
		$criteria=new CDbCriteria;
		$criteria->addInCondition('id', $this->arMedia);
		$media_types=MediaType::model()->findAll($criteria);
		$arTypes = array();
		foreach ($media_types as $type)
		{
			$arTypes[] = $type->name;
		}
		$outTypes = implode(', ', $arTypes);
		return $outTypes;		
	}
	
	public function getallMediaTypes()
	{
		$media_types=MediaType::model()->findAll();
		$arTypes = array();
		foreach ($media_types as $type)
		{
			$arTypes[] = $type->id;
		}
		return $arTypes;
	}
	
	public function validTypeMedia()
	{
		$out_array = array_intersect($this->arMedia, $this->allMediaTypes);
		if (empty($out_array)){
			$this->addError('media_type', 'This value is not valid');
		}
	}
	
	protected function beforeValidate()
	{
		return parent::beforeValidate();
	}
	
}