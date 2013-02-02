<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Teklifler'=>array('index'),
	$model->offer_id=>array('view','id'=>$model->offer_id),
	'Güncelle',
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Teklif Oluştur', 'url'=>array('create')),
	array('label'=>'View Offer', 'url'=>array('view', 'id'=>$model->offer_id)),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>
<div class="page-header">
  <h1>TEKLİF GÜNCELLE #<?php echo $model->offer_id; ?></h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>