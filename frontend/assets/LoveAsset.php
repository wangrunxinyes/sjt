<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoveAsset extends AssetBundle {
	public $sourcePath = '@frontend/include/extensions';
	public $css = [ 
			'lovewall/demo.css'
			];
	public $js = [ 
			'lovewall/svg-morpheus.js',
			'lovewall/demo.js'
	];
	public $jsOptions = [
			'position' => \yii\web\View::POS_HEAD
	];
	public $depends = [ 
			'yii\web\JqueryAsset',
	];
}
