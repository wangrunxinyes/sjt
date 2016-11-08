<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle {
	public $sourcePath = '@frontend/include/frame';
	public $css = [ 
			'css/reset.css',
			'css/default.css',
			'css/styles.css',
			'css/dialog.css' 
	];
	public $js = [ 
			'js/dialog.js' 
	];
	public $jsOptions = [
			'position' => \yii\web\View::POS_HEAD
	];
	public $depends = [ 
			'yii\web\JqueryAsset',
	];
}
