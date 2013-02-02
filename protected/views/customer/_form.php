<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="widget-content">
  <div class="widget-box">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	 'enableAjaxValidation' => false, 'htmlOptions' => array('class' => "form-horizontal well"),
)); ?>

<fieldset>
      <p class="note">
        <span class="required">*</span> zorunlu alanlar.
      </p>

<!--
	<div class="control-group">
		<?php echo $form->labelEx($model,'customer_group_id',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'customer_group_id'); ?>
		<?php echo $form->error($model,'customer_group_id'); ?>
		</div>
	</div>
 -->
	<div class="control-group">
		<?php echo $form->labelEx($model,'current_code',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'current_code',array('class'=>"input-xlarge",'size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'current_code'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'company_name',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'company_name',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'company_name'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'company_title',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'company_title',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'company_title'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'phone_gsm',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'phone_gsm',array('class'=>"input-xlarge",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone_gsm'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'phone',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'phone',array('class'=>"input-xlarge",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'fax',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fax',array('class'=>"input-xlarge",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fax'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'email',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'email',array('class'=>"input-xlarge",'size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'web',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'web',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'web'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'address',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'address',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'city',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'city',array('class'=>"input-xlarge",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'city'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'town',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textField($model,'town',array('class'=>"input-xlarge",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'town'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'company_type',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model,'company_type',array('BUYER'=>"Alıcı",'SELLER'=>"Satıcı")); ?>
		<?php echo $form->error($model,'company_type'); ?>
		</div>
	</div>

 <div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"btn btn-primary")); ?>
	</div>

</fieldset>
<?php $this->endWidget(); ?>

</div>
</div>