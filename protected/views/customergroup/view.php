<?php
/* @var $this CustomergroupController */
/* @var $model CustomerGroup */

$this->breadcrumbs=array(
	'Customer Groups'=>array('index'),
	$model->customer_group_id,
);

$this->menu=array(
	array('label'=>'List CustomerGroup', 'url'=>array('index')),
	array('label'=>'Create CustomerGroup', 'url'=>array('create')),
	array('label'=>'Update CustomerGroup', 'url'=>array('update', 'id'=>$model->customer_group_id)),
	array('label'=>'Delete CustomerGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_group_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerGroup', 'url'=>array('admin')),
);
?>

<h1>View CustomerGroup #<?php echo $model->customer_group_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_group_id',
		'group_name',
	),
)); ?>
