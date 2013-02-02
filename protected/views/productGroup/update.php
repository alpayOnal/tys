<?php
/* @var $this ProductGroupController */
/* @var $model ProductGroup */

$this->breadcrumbs=array(
	'Ürün Grupları'=>array('admin'),
	$model->group_name=>array('view','id'=>$model->group_id),
	'Güncelle',
);

$this->menu=array(
	array('label'=>'List ProductGroup', 'url'=>array('index')),
	array('label'=>'Create ProductGroup', 'url'=>array('create')),
	array('label'=>'View ProductGroup', 'url'=>array('view', 'id'=>$model->group_id)),
	array('label'=>'Manage ProductGroup', 'url'=>array('admin')),
);
?>

<h1>Update ProductGroup <?php echo $model->group_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>