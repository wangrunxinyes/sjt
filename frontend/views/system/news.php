<?php

// Yii::app()->assets->registerGlobalCss("extensions/news/css/normalize.css");
// Yii::app()->assets->registerGlobalCss("extensions/news/css/default.css");
Yii::app()->assets->registerGlobalCss("extensions/news/css/bootstrap.min.css");
Yii::app()->assets->registerGlobalCss("extensions/news/css/bootstrap-theme.min.css");
Yii::app()->assets->registerGlobalCss("extensions/news/css/site.css");
Yii::app()->assets->registerGlobalScript("extensions/news/js/jquery.bootstrap.newsbox.min.js");

$news = news_helper::load_baidu_news();
?>
<div class="htmleaf-container fudan-news">
	<div class="container mp30">
		<div class="row">
			<div class="col-md-4 fudan-news-left-box">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list-alt"></span> <b>孵蛋短新闻</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								<ul class="demo1">
									<?php

foreach ($news as $key =>
	$unit) {
	echo '
									<li class="news-item">
										<table style="width:100%" cellpadding="4">
											<tr>
												<td>' . $unit->body . '<br><br>' . $unit->time . '
													<a style="float:right" target="_blank" href="' . urldecode($unit->link) . '">详情...</a>
												</td>
											</tr>
										</table>
									</li>
									';
}
?>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list-alt"></span> <b>新鲜事</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								<ul class="demo2">
									<li class="news-item">
										暂无新鲜事
										<a href="#"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>