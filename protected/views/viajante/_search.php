<?php
/* @var $this ViajanteController */
/* @var $model Viajante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido'); ?>
		<?php echo $form->textField($model,'pedido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fpagado'); ?>
		<?php echo $form->textField($model,'fpagado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cheques'); ?>
		<?php echo $form->textField($model,'cheques',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frecibido'); ?>
		<?php echo $form->textField($model,'frecibido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs'); ?>
		<?php echo $form->textArea($model,'obs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proveedor_id'); ?>
		<?php echo $form->textField($model,'proveedor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->