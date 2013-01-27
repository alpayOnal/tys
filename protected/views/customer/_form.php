<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_group_id'); ?>
		<?php echo $form->textField($model,'customer_group_id'); ?>
		<?php echo $form->error($model,'customer_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_code'); ?>
		<?php echo $form->textField($model,'current_code',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'current_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_title'); ?>
		<?php echo $form->textField($model,'company_title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'company_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_gsm'); ?>
		<?php echo $form->textField($model,'phone_gsm',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone_gsm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'web'); ?>
		<?php echo $form->textField($model,'web',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'web'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'town'); ?>
		<?php echo $form->textField($model,'town',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_type'); ?>
		<?php echo $form->textField($model,'company_type',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'company_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->