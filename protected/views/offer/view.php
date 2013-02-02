<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Teklifler'=>array('index'),
	$model->offer_id,
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Teklif Oluştur', 'url'=>array('create')),
	array('label'=>'Update Offer', 'url'=>array('update', 'id'=>$model->offer_id)),
	array('label'=>'Delete Offer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->offer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>

<h1>View Offer #<?php echo $model->offer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'offer_id',
		'member_id',
		'customer_id',
		'customer_staff',
		'note',
		'offer_date',
		'offer_status',
	),
)); ?>
