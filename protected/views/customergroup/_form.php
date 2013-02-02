<?php
/* @var $this CustomergroupController */
/* @var $model CustomerGroup */
/* @var $form CActiveForm */
?>

<div class="widget-content">
  <div class="widget-box">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-group-form',
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('class' => "form-horizontal well"),
)); ?>

<fieldset>
      <p class="note">
        <span class="required">*</span> zorunlu alanlar.
      </p>

	<div class="control-group">
		<?php echo $form->labelEx($model,'group_name',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'group_name',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'group_name'); ?>
		</div>
	</div>

 <div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"btn btn-primary")); ?>
	</div>

</fieldset>
<?php $this->endWidget(); ?>

</div>
</div>