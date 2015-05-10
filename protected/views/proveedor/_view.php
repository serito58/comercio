<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcas')); ?>:</b>
	<?php echo CHtml::encode($data->marcas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viajante')); ?>:</b>
	<?php echo CHtml::encode($data->viajante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	*/ ?>

</div>