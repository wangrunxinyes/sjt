<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models\initModel;

$this->title = 'Init';
$this->params ['breadcrumbs'] [] = $this->title;
?>
<div class="site-login">
	<h1>Init Application</h1>

	<p>Init Start</p>
	
	<?php 
	    $init = new initModel();
	    $data = $init->init();
	    foreach ($data as $table=>$result){
	    	echo "<p>" . $table . ": result code - " . $result . "</p>";
	    }
	?>

	<div class="row">
		<div class="col-lg-5">
			<div class="form-group">
			    <?= Html::button('Back', ['class' => 'btn btn-default', 'name' => 'init-button', 'onclick'=>"location.href = 'index';"])?>
            </div>
		</div>
	</div>
</div>
