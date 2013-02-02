<?php
/* @var $this OfferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teklifler',
);

$this->menu=array(
	array('label'=>'Teklif Oluştur', 'url'=>array('create')),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>

<h1>Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
