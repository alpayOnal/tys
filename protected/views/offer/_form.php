<?php
/* @var $this OfferController */
/* @var $model Offer */
/* @var $form CActiveForm */
?>

<fieldset class="fieldset">
<legend class="legend">Teklif Formu</legend>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'offer-form',
	'enableAjaxValidation'=>false,
  'htmlOptions'=>array('class'=>"columns")
)); ?>

	<p class="note"> <span class="required">*</span> zorunlu alanlar.</p>

	<?php //echo $form->errorSummary($model); ?>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'member_id',array('class'=>"label")); ?>
		<?php echo $form->textField($model,'member_id',array('class'=>"input",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'member_id'); ?>
	</p>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'company_id',array('class'=>"label")); ?>
		<?php echo $form->textField($model,'company_id',array('class'=>"input",'size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</p>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'company_staff',array('class'=>"label")); ?>
		<?php echo $form->textField($model,'company_staff',array('class'=>"input",'size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'company_staff'); ?>
	</p>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'note',array('class'=>"label")); ?>
		<?php echo $form->textArea($model,'note',array('class'=>"input",'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</p>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'manage_note',array('class'=>"label")); ?>
		<?php echo $form->textArea($model,'manage_note',array('class'=>"input",'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'manage_note'); ?>
	</p>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'offer_date',array('class'=>"label")); ?>
		<?php echo $form->textField($model,'offer_date',array('class'=>"input")); ?>
		<?php echo $form->error($model,'offer_date'); ?>
	</p>

	<p class="button-height inline-label">
		<?php echo $form->labelEx($model,'offer_status',array('class'=>"label")); ?>
		<?php echo $form->textField($model,'offer_status',array('class'=>"input",'size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'offer_status'); ?>
	</p>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"button blue-gradient")); ?>
	</div>

<?php $this->endWidget(); ?>

</fieldset> <!-- form -->