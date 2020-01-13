<?php
/* @var $this PopupController */
/* @var $model Popup */
if($model->status == "1"):

	$baseUrl = Yii::app()->baseUrl;
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile($baseUrl.'/css/modal.css');
?>
<div class="modal" id="modal<?=$model->id;?>">
	<div class="modal__content">
		<div class="modal__header">
			<h1><?php echo $model->title; ?></h1>
		</div>
		<div class="modal__description">
			<?php echo $model->content; ?>
		</div>
		<div class="modal__footer">
			<a class="btn-close">Закрыть попап</a>
		</div>
	</div>
</div>
<?php endif; ?>
