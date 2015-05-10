<?php
/* @var $this ViajanteController */
/* @var $model Viajante */

$this->breadcrumbs=array(
	'Viajantes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Viajante', 'url'=>array('index')),
	array('label'=>'Create Viajante', 'url'=>array('create')),
	array('label'=>'View Viajante', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Viajante', 'url'=>array('admin')),
);
?>

<h1>Update Viajante <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>