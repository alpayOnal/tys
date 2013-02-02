<?php
/* @var $this BrandController */
/* @var $model Brand */
/* @var $form CActiveForm */
?>

<div class="widget-content">
  <div class="widget-box">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brand-form',
   'action'=>$this->createUrl("brand/create"),
	'enableAjaxValidation'=>false,'htmlOptions' => array('class' => "form-horizontal well"),
)); ?>

<fieldset>
      <p class="note">
        <span class="required">*</span> zorunlu alanlar.
      </p>

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'brand_name',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'brand_name',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'brand_name'); ?>
		</div>
	</div>

 <div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"btn btn-primary")); ?>
	</div>

</fieldset>
<?php $this->endWidget(); ?>

</div>
</div>