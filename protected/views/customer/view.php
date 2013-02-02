<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Müşteriler'=>array('index'),
	$model->company_name,
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Update Customer', 'url'=>array('update', 'id'=>$model->customer_id)),
	array('label'=>'Delete Customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Müşteri Detayı</h1>
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_id',
		'customer_group_id',
		'current_code',
		'company_name',
		'company_title',
		'phone_gsm',
		'phone',
		'fax',
		'email',
		'web',
		'address',
		'city',
		'town',
		'company_type',
	),
)); ?>


