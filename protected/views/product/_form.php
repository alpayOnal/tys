<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */

?>
<div class="widget-content">
  <div class="widget-box">
<?php
$form = $this->beginWidget('CActiveForm', array('id' => 'product-form',
  'enableAjaxValidation' => true, 'htmlOptions' => array('class' => "form-horizontal well")));
?>


<fieldset>
      <p class="note">
        <span class="required">*</span> zorunlu alanlar.
      </p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'product_code',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->textField($model,'product_code',array('class'=>"input-xlarge", 'size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'product_code',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'product_name',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->textField($model,'product_name',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_name',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">		<?php echo $form->labelEx($model,'group_id',array('class'=>"control-label")); ?><div class="controls">
		<?php
  $productGroups = $form->dropDownList($model, 'group_id', $model->groups, array(
    'empty' => Yii::t('', 'Seçiniz')));
  echo $productGroups;
  ?>
		<?php echo $form->error($model,'group_id',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'brand_id',array('class'=>"control-label")); ?><div class="controls">
		<?php
  $brands = $form->dropDownList($model, 'brand_id', $model->brands, array(
    'empty' => Yii::t('', 'Seçiniz')));
  echo $brands;
  ?>
		<?php echo $form->error($model,'brand_id',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'tax_rate',array('class'=>"control-label")); ?><div class="controls">
<?php echo $form->dropDownList($model,'tax_rate', array('1'=>1,'8'=>8,'18'=>18),array('class'=>"span1")); ?>
		<?php echo $form->error($model,'tax_rate',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'cost_price',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->textField($model,'cost_price',array('class'=>"input-xlarge", 'size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cost_price',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'sale_price',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->textField($model,'sale_price',array('class'=>"input-xlarge",'size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'sale_price',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'currency',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->dropDownList($model,'currency', array('TL'=>'TL','USD'=>'USD','EURO'=>'EURO'), array('class'=>"span1")); ?>
		<?php echo $form->error($model,'currency',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'quantity',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->textField($model,'quantity',array('class'=>"input-xlarge",'value'=>0)); ?>
		<?php echo $form->error($model,'quantity',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'image',array('class'=>"control-label")); ?><div class="controls">
		<?php echo $form->textField($model,'image',array('class'=>"input-xlarge",'size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image',array('tag'=>"label", 'class'=>"error")); ?></div>
      </div>
      <div class="control-group">
		<?php echo $form->labelEx($model,'type',array('class'=>"control-label")); ?><div class="controls">
		    <?php echo $form->dropDownList($model,'type', array('URUN'=>'Ürün','Yedek'=>'Yedek parça')/*, array('prompt'=>'Türü seçiniz')*/); ?>
</div>
		<?php //echo $form->selectField($model,'type',array('class'=>"input-xlarge",'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>
      <div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kaydet' : 'Güncelle',array('class'=>"btn btn-primary")); ?>
	</div>
    </fieldset>
<?php $this->endWidget(); ?>
