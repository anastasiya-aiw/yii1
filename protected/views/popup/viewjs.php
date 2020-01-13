<?php
/* @var $this PopupController */
/* @var $model Popup */

$baseUrl = Yii::app()->getBaseUrl(true) ;

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Popup', 'url'=>array('admin')),
);
?>

<h1>JS код popup</h1>
<div class="form">
<textarea name="name" rows="8" cols="80" id="jscode">
<? echo "<script type='text/javascript'>
var popupId = ".$model->id.";
var s = document.createElement('script');
s.type = 'text/javascript';
s.src = '".$baseUrl."/js/modal.js';
document.body.append(s);
</script>";
?>
</textarea>
</div>

<script type="text/javascript">
	document.getElementById("jscode").focus();
	document.getElementById("jscode").select();
</script>
