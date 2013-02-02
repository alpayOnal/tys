<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Müşteriler'=>array('index'),
	'Yeni kayıt',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Müşteri (Câri) Kaydı</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>