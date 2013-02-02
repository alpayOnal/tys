<?php
/* @var $this CustomerstaffController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customer Staffs',
);

$this->menu=array(
	array('label'=>'Create CustomerStaff', 'url'=>array('create')),
	array('label'=>'Manage CustomerStaff', 'url'=>array('admin')),
);
?>

<h1>Customer Staffs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
