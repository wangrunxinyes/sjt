<?php
use frontend\assets\IndexAsset;
use yii\helpers\Url;
IndexAsset::register($this);
?>
<?php $this->beginPage();?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="YM3sbTFlXbgiMOgXvoeLgpgsAbegJ4nLgxXbLw3s4xE" />
	<meta name="baidu-site-verification" content="bAhhDMyY1G" />
	<title>孵蛋大学</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
	<!--[if IE]>
	<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
	<?php $this->head();?>
	<script type="text/javascript">
	$(function(){
		$(".bt-fudan-login").on("click", function(){
			var dialog = dialog_class.createNew();
			dialog.show("提示", "你好, 登录功能将稍后开放。", true);
			// dialog.dismiss();
		});
	})
</script>
</head>
<body>
<?php $this->
	beginBody();?>
	<div id="top-bar" class="top-bar">
		<div class="bar">
			<button id="navbox-trigger" class="navbox-trigger"> <i class="fa fa-lg fa-th"></i>
			</button>
			<label class="fudan-title">孵蛋大学</label>
			<a href="#" class="fudan-title-right bt-fudan-login"> <i class="fa fa-user fudan-title-icon"></i>
				<span class="fudan-top-username">登录</span>
			</a>
		</div>
		<div class="navbox">
			<div class="navbox-tiles">
				<a href="<?php echo Url::to("@web/site/"); ?>" class="tile">
					<div class="icon">
						<i class="fa fa-bank"></i>
					</div>
					<span class="title">主页</span>
				</a>
				<a href="<?php echo Url::to("@web/system/news") ?>" class="tile">
					<div class="icon">
						<i class="fa fa-camera-retro"></i>
					</div>
					<span class="title">新鲜事</span>
				</a>
				<a href="<?php echo Url::to("@web/system/affectionwall") ?>" class="tile">
					<div class="icon">
						<i class="fa fa-heart"></i>
					</div>
					<span class="title">表白墙</span>
				</a>
				<a href="<?php echo Url::to("@web/system/friends") ?>" class="tile">
					<div class="icon">
						<i class="fa fa-lg fa-users"></i>
					</div>
					<span class="title">校友会</span>
				</a>
				<a href="<?php echo Url::to("@web/system/study") ?>" class="tile">
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<span class="title">学霸小组</span>
				</a>
				<a href="<?php echo Url::to("@web/system/about") ?>" class="tile">
					<div class="icon">
						<i class="fa fa-info"></i>
					</div>
					<span class="title">关于</span>
				</a>
			</div>
		</div>
	</div>
	<div class="fudan-main-content">
		<div class="fudan-custom-content">
			<?php echo $content ?></div>
	</div>
<script>
	(function () {
	    $(document).ready(function () {
	        $('#navbox-trigger').click(function () {
	            return $('#top-bar').toggleClass('navbox-open');
	        });
	        return $(document).on('click', function (e) {
	            var $target;
	            $target = $(e.target);
	            if (!$target.closest('.navbox').length && !$target.closest('#navbox-trigger').length) {
	                return $('#top-bar').removeClass('navbox-open');
	            }
	        });
	    });
	}.call(this));
	</script>
	<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>