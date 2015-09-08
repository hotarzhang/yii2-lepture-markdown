<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2015/9/8
 * Time: 16:36
 */

namespace hoter\markdown;


use yii\web\AssetBundle;
use Yii;

class MarkdownAssets extends AssetBundle{

    public $sourcePath = "@leptureeditor/assets";
    public $basePath = "@webroot/assets'";

    public $js = [
        'js/marked.js',
        'js/editor.js',
    ];
    public $css = [
        'css/editor.css',
        'fonts/icomoon.woff',
        'fonts/icomoon.ttf',
        'fonts/icomoon.svg',
        'fonts/icomoon.eot',
        'fonts/icomoon.dev.svg',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init() {
        Yii::setAlias('@leptureeditor',__DIR__);
        return parent::init();
    }
}