<?php
/* @var $this CustomerstaffController */
/* @var $model CustomerStaff */

$this->breadcrumbs=array(
	'Personel'=>array('index'),
	'Oluştur',
);

$this->menu=array(
	array('label'=>'List CustomerStaff', 'url'=>array('index')),
	array('label'=>'Manage CustomerStaff', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1><?php echo $customer['company_name'];?> Personel Kaydı</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>