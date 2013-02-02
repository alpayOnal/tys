<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Teklifler'=>array('index'),
	'Yeni teklif',
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>

<div class="page-header">  <h1>TEKLİF OLUŞTUR</h1></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>