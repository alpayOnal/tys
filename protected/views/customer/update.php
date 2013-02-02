<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Müşteriler'=>array('index'),
	$model->company_name=>array('view','id'=>$model->customer_id),
	'Güncelle',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'View Customer', 'url'=>array('view', 'id'=>$model->customer_id)),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Müşteri (Câri) Güncelle</h1>
</div>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>