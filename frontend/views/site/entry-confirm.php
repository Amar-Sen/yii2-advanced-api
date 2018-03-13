<?php 
use yii\helpers\Html;
?>

<h5>You have entered the following info:</h5>

<ul>
	<li>
		<label>Name</label>: <?= Html::encode($model->name) ?>
	</li>
	<li>
		<label>Email</label>: <?= Html::encode($model->email) ?>
	</li>
</ul>