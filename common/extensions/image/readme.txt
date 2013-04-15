说明：
移植自Kohana的Image类库

文档地址：http://kohanaframework.org/3.0/guide/api/Image

------------------------------------------------------------------------------

安装：
将image文件夹放入application的extensions文件中即可

------------------------------------------------------------------------------

使用方法：

第一种：
配置：
在application的main config的components中添加以下配置
'image'=>array(
            'class'=>'application.extensions.image.CImageComponent',
            // GD or Imagick
            'driver'=>'GD',
        ),

调用方法()：
$image = Yii::app()->image->load('images/test.jpg');
$image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
$image->save(); // or $image->save('images/small.jpg');

第二种：
Yii::import('application.extensions.image.Image');
$image = new Image('images/test.jpg');
$image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
$image->render();

------------------------------------------------------------------------------
感谢插件原作者 http://www.yiiframework.com/extension/image