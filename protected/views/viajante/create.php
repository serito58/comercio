<?php
/* @var $this ViajanteController */
/* @var $model Viajante */

$this->breadcrumbs=array(
	'Viajantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Viajante', 'url'=>array('index')),
	array('label'=>'Manage Viajante', 'url'=>array('admin')),
);
?>

<h1>Create Viajante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>