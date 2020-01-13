<?php
/* @var $this PopupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Popups',
);
?>

<h1>Popups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
