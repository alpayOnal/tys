<?php
/* @var $this BrandController */
/* @var $model Brand */

$this->breadcrumbs=array(
	'Markalar'=>array('index'),
	$model->brand_name=>array('view','id'=>$model->brand_id),
	'Güncelle',
);

$this->menu=array(
	array('label'=>'List Brand', 'url'=>array('index')),
	array('label'=>'Create Brand', 'url'=>array('create')),
	array('label'=>'View Brand', 'url'=>array('view', 'id'=>$model->brand_id)),
	array('label'=>'Manage Brand', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Marka Güncelle</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>