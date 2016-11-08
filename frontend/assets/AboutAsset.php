<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AboutAsset extends AssetBundle {
	public $sourcePath = '@frontend/include/extensions';
	public $css = [ 
			'introduction/source/style_002.css',
			'introduction/source/style.css',
	];
	public $js = [ 
	];
	public $jsOptions = [
			'position' => \yii\web\View::POS_HEAD
	];
	public $depends = [ 
			'yii\web\JqueryAsset',
	];
}
