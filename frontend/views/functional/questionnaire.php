<?php

Yii::app()->
	assets->registerGlobalCss('extensions/questionnaire/css/normalize.css');
Yii::app()->assets->registerGlobalCss('extensions/questionnaire/css/demo.css');
Yii::app()->assets->registerGlobalCss('extensions/questionnaire/css/component.css');
Yii::app()->assets->registerGlobalScript('extensions/questionnaire/js/modernizr.custom.js');
Yii::app()->assets->registerGlobalScript('extensions/questionnaire/js/classie.js');
Yii::app()->assets->registerGlobalScript('extensions/questionnaire/js/stepsForm.js');
Yii::app()->assets->registerGlobalScript('custom.js/question.post.js');
Yii::app()->assets->registerGlobalCss("global/frame/css/dialog.css");
Yii::app()->assets->registerGlobalScript("global/frame/js/dialog.js");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>有奖小调查</title>
</head>
<body>
	<div id="top-bar" class="fudan_securty" security="<?php echo md5(session_id() . "2"); ?>" target="<?php echo Yii::app()->assets->getUrlPath("api/savequestion") ?>" type="<?php echo md5("question"); ?>" identify="<?php echo base64_encode("2"); ?>"></div>

	<div class="container">
		<section>
			<form id="theForm" class="simform" autocomplete="off">
				<div class="simform-inner">
					<ol class="questions">
						<li>
							<span>
								<label for="q1">你希望我们的网站有什么功能?</label>
							</span>
							<br>
							<input id="q1" name="q1" type="text"/>
						</li>
						<li>
							<span>
								<label for="q2">你是孵蛋的学生吗?</label>
							</span>
							<br>
							<input id="q2" name="q2" type="text"/>
						</li>
						<li>
							<span>
								<label for="q3">你觉得这个域名好记吗?</label>
							</span>
							<br>
							<input id="q3" name="q3" type="text"/>
						</li>
						<li>
							<span>
								<label for="q4">你是男生女生?</label>
							</span>
							<br>
							<input id="q4" name="q4" type="text"/>
						</li>
						<li>
							<span>
								<label for="q5">你现在的身份?学生或者工作?</label>
							</span>
							<br>
							<input id="q5" name="q5" type="text"/>
						</li>
						<li>
							<span>
								<label for="q6">派送小礼品的联系方式，手机或邮箱</label>
							</span>
							<br>
							<input id="q6" name="q6" type="text" onkeypress="if(event.keyCode==13){return false}"/>
						</li>
					</ol>
					<!-- /questions -->
					<button class="submit" type="submit">提交问卷</button>
					<div class="controls">
						<button class="next"></button>
						<div class="progress"></div>
						<span class="number">
							<span class="number-current"></span>
							<span class="number-total"></span>
						</span>
						<span class="error-message"></span>
					</div>
					<!-- / controls -->
				</div>
				<!-- /simform-inner -->
				<span class="final-message"></span>
			</form>
			<!-- /simform -->
		</section>
	</div>
	<!-- /container -->
	<script>
			var theForm = document.getElementById( 'theForm' );

			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					// $.ajax(){

					// }

					// let's just simulate something...
					var messageEl = theForm.querySelector( '.final-message' );
					messageEl.innerHTML = '<lable style="color:black">Thank you! We\'ll be in touch.</lable>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
</body>
</html>