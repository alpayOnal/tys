<?php
/* @var $this CustomerstaffController */
/* @var $model CustomerStaff */

$this->breadcrumbs=array(
	'Customer Staffs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomerStaff', 'url'=>array('index')),
	array('label'=>'Create CustomerStaff', 'url'=>array('create')),
	array('label'=>'Update CustomerStaff', 'url'=>array('update', 'id'=>$model->staff_id)),
	array('label'=>'Delete CustomerStaff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->staff_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerStaff', 'url'=>array('admin')),
);
?>
<div class="page-header">
  <h1>Personel Detayı <?php echo $model->name; ?></h1>
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'staff_id',
		'customer_id',
		'name',
		'gsm',
		'phone_internal',
		'email',
	),
)); ?>
