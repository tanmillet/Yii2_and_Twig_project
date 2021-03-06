<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
	'css/bootstrap.min.css',
	'css/bootstrap-responsive.min.css',
	'css/style.css',
	'css/slider1.css',
	'css/slider2.css',
	'css/slider3.css'
    ];
    public $js = [
	'js/jquery.min.js',
	'js/isotope.js',
	'js/jquery.imagesloaded.js',
	'js/bootstrap.min.js',
	'js/flexslider.js',
	'js/carousel.js',
	'js/fancybox.js',
	'js/twitter.js',
	'js/modernizr.custom.79639.js',
	'js/jquery.ba-cond.min.js',
	'js/jquery.slitslider.js',
	'js/excanvas.js',
	'js/jquery.flot.min.js',
	'js/jquery.flot.pie.min.js',
	'js/jquery.flot.stack.js',
	'js/jquery.flot.resize.min.js',
	'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
