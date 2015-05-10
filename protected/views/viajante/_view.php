<?php
/* @var $this ViajanteController */
/* @var $data Viajante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido')); ?>:</b>
	<?php echo CHtml::encode($data->pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fpagado')); ?>:</b>
	<?php echo CHtml::encode($data->fpagado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cheques')); ?>:</b>
	<?php echo CHtml::encode($data->cheques); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frecibido')); ?>:</b>
	<?php echo CHtml::encode($data->frecibido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('obs')); ?>:</b>
	<?php echo CHtml::encode($data->obs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor_id')); ?>:</b>
	<?php echo CHtml::encode($data->proveedor_id); ?>
	<br />

	*/ ?>

</div>