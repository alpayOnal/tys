<?php
/* @var $this ProductGroupController */
/* @var $model ProductGroup */

$this->breadcrumbs=array(
	'Ürün Grupları'=>array('admin'),
	'Oluştur',
);

$this->menu=array(
	array('label'=>'List ProductGroup', 'url'=>array('index')),
	array('label'=>'Manage ProductGroup', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Ürün Grubu Oluştur</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>