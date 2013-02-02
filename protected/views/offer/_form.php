<?php
/* @var $this OfferController */
/* @var $model Offer */
/* @var $form CActiveForm */
?>

<div class="widget-content">
  <div class="widget-box">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'offer-form',
	'enableAjaxValidation'=>false,
  'htmlOptions'=>array('class'=>"form-horizontal well")
)); ?>

<fieldset>
      <p class="note">
        <span class="required">*</span> zorunlu alanlar.
        </p>

	<div class="control-group">
		<div class="controls">
		<?php echo $form->hiddenField($model,'member_id',array('value'=>Yii::app()->user->memberid)); ?>
		</div>
	</div>	<div class="control-group">		<?php echo $form->labelEx($model,'customer_id',array('class'=>"control-label")); ?>		<div class="controls">		<?php		echo CHtml::dropDownList('customer_id','', $model->customers,		    array(
        'empty' => Yii::t('', 'Seçiniz'),
		        'ajax' => array(
		            'type'=>'POST', //request type
		            'url'=>CController::createUrl('customer/stafflist'), //url to call.
		            //Style: CController::createUrl('currentController/methodToCall')
		            'update'=>'#Offer_customer_staff', //selector to update
		            //'data'=>'js:javascript statement'
		        //leave out the data key to pass all form values through
		        )));
		$customerList = $form->dropDownList($model, 'customer_id', $model->customers, array(
		    'empty' => Yii::t('', 'Seçiniz')));
		//echo $customerList;
		?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'customer_staff',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model,'customer_staff',array()); ?>
		<?php echo $form->error($model,'customer_staff'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'note',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'note',array('class'=>"input-xlarge",'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
		</div>
	</div>


	<div class="control-group">
		<?php echo $form->labelEx($model,'offer_date',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php //echo $form->dateField($model,'offer_date',array('class'=>"input-xlarge",)); ?>		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(			  'model' => $model,			  'attribute' => 'offer_date',			  'value' => $model->offer_date,			  'language'=>Yii::app()->language=='tr' ? 'tr' : null,								'htmlOptions'=>array(					'style'=>'width:100px;text-align:center'				),			) ); ?>
		<?php echo $form->error($model,'offer_date'); ?>
		</div>
	</div>
<?php
if (!$model->isNewRecord ){
?>
	<div class="control-group">
		<?php echo $form->labelEx($model,'offer_status',array('class'=>"control-label")); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model,'offer_status',array('WAITING'=>"Bekliyor",'APPROVED'=>"Onaylandı",'REJECTED'=>"Kabul Edilmedi")); ?>
		<?php echo $form->error($model,'offer_status'); ?>
		</div>
	</div>
<?php } ?>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"btn btn-primary")); ?>
	</div>
    </fieldset>
<?php $this->endWidget(); ?>

</div>
</div>