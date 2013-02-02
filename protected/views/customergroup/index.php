<?php
/* @var $this CustomergroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Müşteri Grupları',
);

$this->menu=array(
	array('label'=>'Create CustomerGroup', 'url'=>array('create')),
	array('label'=>'Manage CustomerGroup', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Müşteri Grupları</h1>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
