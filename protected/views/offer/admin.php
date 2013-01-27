<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Offers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Teklifleri Listele', 'url'=>array('index')),
	array('label'=>'Teklif Oluştur', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('offer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Teklifleri Yönet</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'offer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'cssFile' => Yii::app()->request->baseUrl.'/interface/css/gridview/styles.css',
	'columns'=>array(
		'offer_id',
		'member_id',
		'company_id',
		'company_staff',
		'note',
		'manage_note',
		/*
		'offer_date',
		'offer_status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
