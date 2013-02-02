<?php
/* @var $this CustomerstaffController */
/* @var $model CustomerStaff */
/* @var $form CActiveForm */
?>

<div class="widget-content">
  <div class="widget-box">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-staff-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('class' => "form-horizontal well"),
)); ?>

<fieldset>
      <p class="note">
        <span class="required">*</span> zorunlu alanlar.
      </p>
		<?php
		if ($model->isNewRecord)
		  echo $form->hiddenField($model,'customer_id',array('value'=>$model->customerId)); else
		  echo $form->hiddenField($model,'customer_id',array('value'=>CustomerStaff::getCustomerId($model->staff_id)));
		?>


	<div class="control-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'gsm'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'gsm',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'gsm'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'phone_internal'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'phone_internal',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'phone_internal'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

 <div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"btn btn-primary")); ?>
	</div>

	</fieldset>

<?php $this->endWidget(); ?>

</div>

</div>