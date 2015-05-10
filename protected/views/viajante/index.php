<?php
/* @var $this ViajanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Viajantes',
);

$this->menu=array(
	array('label'=>'Create Viajante', 'url'=>array('create')),
	array('label'=>'Manage Viajante', 'url'=>array('admin')),
);
?>

<h1>Viajantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
