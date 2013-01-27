<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Cari Listesi', 'url'=>array('index')),
	array('label'=>'Yeni Müşteri', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Müşteri Yönetimi</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'cssFile' => Yii::app()->request->baseUrl.'/interface/css/gridview/styles.css',
	'columns'=>array(
		'customer_id',
		'customer_group_id',
		'current_code',
		'company_name',
		'company_title',
		'phone_gsm',
		/*
		'phone',
		'fax',
		'email',
		'web',
		'address',
		'city',
		'town',
		'company_type',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
