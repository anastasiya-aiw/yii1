<?php
/* @var $this PopupController */
/* @var $model Popup */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Popup', 'url'=>array('create')),
	array('label'=>'Manage Popup', 'url'=>array('admin')),
);
?>

<h1>Update Popup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>