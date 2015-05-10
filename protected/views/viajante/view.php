<?php
/* @var $this ViajanteController */
/* @var $model Viajante */

$this->breadcrumbs=array(
	'Viajantes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Viajante', 'url'=>array('index')),
	array('label'=>'Create Viajante', 'url'=>array('create')),
	array('label'=>'Update Viajante', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Viajante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Viajante', 'url'=>array('admin')),
);
?>

<h1>View Viajante #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'pedido',
		'fpagado',
		'importe',
		'cheques',
		'frecibido',
		'obs',
		'proveedor_id',
	),
)); ?>
