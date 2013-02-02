<?php
/* @var $this CustomergroupController */
/* @var $data CustomerGroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_group_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->customer_group_id), array('view', 'id'=>$data->customer_group_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_name')); ?>:</b>
	<?php echo CHtml::encode($data->group_name); ?>
	<br />


</div>