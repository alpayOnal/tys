<?php
/* @var $this CustomergroupController */
/* @var $model CustomerGroup */

$this->breadcrumbs=array(
	'Müşteri Grupları'=>array('index'),
	$model->group_name=>array('view','id'=>$model->customer_group_id),
	'Güncelle',
);

$this->menu=array(
	array('label'=>'List CustomerGroup', 'url'=>array('index')),
	array('label'=>'Create CustomerGroup', 'url'=>array('create')),
	array('label'=>'View CustomerGroup', 'url'=>array('view', 'id'=>$model->customer_group_id)),
	array('label'=>'Manage CustomerGroup', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Grup Güncelle</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>