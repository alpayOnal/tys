<?php
/* @var $this ProductGroupController */
/* @var $model ProductGroup */

$this->breadcrumbs=array(
	'Product Groups'=>array('index'),
	$model->group_id,
);

$this->menu=array(
	array('label'=>'List ProductGroup', 'url'=>array('index')),
	array('label'=>'Create ProductGroup', 'url'=>array('create')),
	array('label'=>'Update ProductGroup', 'url'=>array('update', 'id'=>$model->group_id)),
	array('label'=>'Delete ProductGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->group_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductGroup', 'url'=>array('admin')),
);
?>

<h1>View ProductGroup #<?php echo $model->group_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'group_id',
		'group_name',
	),
)); ?>
