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
        'webAssets/plugins/animsition/css/animsition.min.css',
        'webAssets/plugins/ladda/css/ladda.min.css',
    	'webAssets/plugins/sweetalert/css/sweetalert.css',
        'webAssets/plugins/ionicons/css/ionicons.min.css',
        'webAssets/css/kotex.css',
    ];
    public $js = [
     	'webAssets/plugins/sweetalert/js/sweetalert.min.js',
        'webAssets/plugins/animsition/js/animsition.min.js',
        'webAssets/plugins/ladda/js/spin.min.js',
        'webAssets/plugins/ladda/js/ladda.min.js',
    	'js/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
