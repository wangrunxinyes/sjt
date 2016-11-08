<?php
use frontend\assets\IndexAsset;
use common\models\Visitor;
/* @var $this yii\web\View */

$connection = Yii::$app->getDb ();
$command = $connection->createCommand ( 'select count(*) as num from ' . Visitor::tableNameString () );
$results = $command->queryAll();
$total = $results[0]['num'];

$frameAsset = IndexAsset::register ( $this );
?>
<article class="htmleaf-container">
	<header class="htmleaf-header">
		<h1>
			早知道考孵蛋大学这么难！我就不报了<br> <br>一只公鸡抱怨道
		</h1>
	</header>
</article>

<div class="fudan-error-div"
	style="text-align: center; width: 100%; margin-top: 2%;">
	<img src="<?php echo $frameAsset->baseUrl; ?>/images/logo.png"
		style="width: auto; height: 128px; display: inline">
</div>
<div class="fudan-error-div" style="text-align: center; margin-top: 5%;">
	<span style="color: gray; font-size: 70%"> 欢迎大家一起来孵蛋<br>
		{点个赞支持我们吧}
	</span><br> <span style="color: gray; font-size: 70%"><a
		id="dislike_url" data="<?php echo Yii::$app->request->baseUrl?>/api/default/clickevent" class="a-button dislike-button"><img
			src="<?php echo $frameAsset->baseUrl; ?>/images/like.png"
			style="width: auto; height: 32px; margin-top: 6px; display: inline"></a><br>
		<label class="dislike-num"><?php echo $total; ?></label></span>

</div>
<div class="fudan-error-div" style="text-align: center; margin-top: 5%;">
	<span style="color: gray; font-size: 70%">孵蛋大学，孵化你真正的思想<br> <br>
	</span>
</div>