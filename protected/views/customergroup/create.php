<?php
/* @var $this CustomergroupController */
/* @var $model CustomerGroup */

$this->breadcrumbs=array(
	'Müşteri Grupları'=>array('index'),
	'Yeni Grup',
);

$this->menu=array(
	array('label'=>'List CustomerGroup', 'url'=>array('index')),
	array('label'=>'Manage CustomerGroup', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Grup Oluştur</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>