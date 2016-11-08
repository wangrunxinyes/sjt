<article class="htmleaf-container">
	<header class="htmleaf-header">
		<h1>
			抱歉，您访问的内容有问题
			<span>
				<?php
echo CHtml::encode($message);?></span>
		</h1>
		<h2>
			<div class="fudan-error-div">
				<a href="<?php echo Yii::app()->assets->getUrlPath("")?>" class="fudan-error-home btn-lg log" data="off">主页</a>
			</div>
		</h2>
	</header>
</article>