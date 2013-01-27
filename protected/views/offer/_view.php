<?php
/* @var $this OfferController */
/* @var $data Offer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->offer_id), array('view', 'id'=>$data->offer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php echo CHtml::encode($data->member_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_staff')); ?>:</b>
	<?php echo CHtml::encode($data->company_staff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manage_note')); ?>:</b>
	<?php echo CHtml::encode($data->manage_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_status')); ?>:</b>
	<?php echo CHtml::encode($data->offer_status); ?>
	<br />

	*/ ?>

</div>