<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array('Ürünler' => array('index'),
  $model->product_id => array('view', 'id' => $model->product_id), 'Update');
$this->menu = array(array('label' => 'List Product', 'url' => array('index')),
  array('label' => 'Create Product', 'url' => array('create')),
  array('label' => 'View Product', 'url' => array('view', 'id' => $model->product_id)),
  array('label' => 'Manage Product', 'url' => array('admin')));
?><div class="page-header">
  <h1>ÜRÜN GÜNCELLE</h1>
</div><?php echo $this->renderPartial('_form', array('model'=>$model)); ?>