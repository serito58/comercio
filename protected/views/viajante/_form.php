<?php
/* @var $this ViajanteController */
/* @var $model Viajante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'viajante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido'); ?>
		<?php echo $form->textField($model,'pedido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fpagado'); ?>
		<?php echo $form->textField($model,'fpagado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fpagado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
		<?php echo $form->error($model,'importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cheques'); ?>
		<?php echo $form->textField($model,'cheques',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cheques'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frecibido'); ?>
		<?php echo $form->textField($model,'frecibido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'frecibido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obs'); ?>
		<?php echo $form->textArea($model,'obs',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'obs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proveedor_id'); ?>
		<?php echo $form->textField($model,'proveedor_id'); ?>
		<?php echo $form->error($model,'proveedor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->