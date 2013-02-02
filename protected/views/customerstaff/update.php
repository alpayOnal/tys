<?php
/* @var $this CustomerstaffController */
/* @var $model CustomerStaff */

$this->breadcrumbs=array(
	'Personel'=>array('index'),
	$model->name=>array('view','id'=>$model->staff_id),
	'Güncelle',
);

$this->menu=array(
	array('label'=>'List CustomerStaff', 'url'=>array('index')),
	array('label'=>'Create CustomerStaff', 'url'=>array('create')),
	array('label'=>'View CustomerStaff', 'url'=>array('view', 'id'=>$model->staff_id)),
	array('label'=>'Manage CustomerStaff', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Personel Güncelle > <?php echo $model->name; ?></h1>
</div>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>