<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;
		$model->public_time = $model->create_time;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			
			if (isset($_POST['Post']['arMedia'])) {
				$model->media_type = serialize($_POST['Post']['arMedia']);
				if($model->save()) {
					$this->redirect(array('view','id'=>$model->id));
				}
			}
			$model->addError('media_type', 'This value is not valid!!!');
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			
			if (isset($_POST['Post']['arMedia'])) {
				$model->media_type = serialize($_POST['Post']['arMedia']);
				if($model->save()) {
					$this->redirect(array('view','id'=>$model->id));
				}
			}
			$model->addError('media_type', 'This value is not valid!!!');
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

// 	/**
// 	 * Lists all models.
// 	 */
// 	public function actionIndex()
// 	{
// 		$dataProvider=new CActiveDataProvider('Post');
// 		$this->render('index',array(
// 			'dataProvider'=>$dataProvider,
// 		));
// 	}

// 	/**
// 	 * Manages all models.
// 	 */
// 	public function actionAdmin()
// 	{
// 		$model=new Post('search');
// 		$model->unsetAttributes();  // clear any default values
// 		if(isset($_GET['Post']))
// 			$model->attributes=$_GET['Post'];

// 		$this->render('admin',array(
// 			'model'=>$model,
// 		));
// 	}
	
	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];
	
		$this->render('admin',array(
				'model'=>$model,
		));
	}
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function imageResize($image, $name, $wm = NULL){
	
		$imageSizes = Yii::app()->params['imgSize'];
	
		$img_watermark = Yii::app()->image->load(Yii::app()->params['imgUploadLarge'].'watermark_nikcenter.png');
	
		if ($image->width >= $image->height) {
			$image->resize($imageSizes['originWidth'], $imageSizes['originHeight']);
		}
		else{
			$image->resize($imageSizes['originHeight'], $imageSizes['originWidth']);
		}
	
		if (isset($wm)){
			$image->watermark($img_watermark, 20, ($image->height - 40), 100);
		}
		$image->save();
		$image->resize($imageSizes['largeWidth'], $imageSizes['largeHeight']);
		$image->save(Yii::app()->params['imgUploadLarge'].$name);
		$image->resize($imageSizes['mediumWidth'], $imageSizes['mediumHeight']);
		$image->save(Yii::app()->params['imgUploadMedium'].$name);
		$image->resize($imageSizes['thumbWidth'], $imageSizes['thumbHeight'], Image::AUTO);
		$image->save(Yii::app()->params['imgUploadThumb'].$name);
	
	}
}
