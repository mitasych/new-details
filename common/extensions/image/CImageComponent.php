<?php

Yii::import('common.extensions.image.Image');
Yii::import('common.extensions.image.images.*');
/**
 * Description of CImageComponent
 *
 * @author Loning<aloning@gmail.com>
 */
class CImageComponent extends CApplicationComponent
{
    /**
     * Drivers available:
     *  GD - The default driver, requires GD2 version >= 2.0.34 (Debian / Ubuntu users note: Some functions, eg. sharpen may not be available)
     *  ImageMagick - Windows users must specify a path to the binary. Unix versions will attempt to auto-locate.
     * @var string
     */
    public $driver = 'GD';

    /**
     * ImageMagick driver params
     * @var array
     */
    public $params = array();

    public function init()
    {
        parent::init();
        if($this->driver != 'GD' && $this->driver != 'Imagick'){
            throw new CException('driver must be GD or Imagick');
        }
    }

    public function load($image)
    {
        return Image::factory($image,$this->driver);
    }
}
?>
