<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array('Products' => array('index'), $model->product_id);
$this->menu = array(array('label' => 'List Product', 'url' => array('index')),
  array('label' => 'Create Product', 'url' => array('create')),
  array('label' => 'Update Product', 'url' => array('update', 'id' => $model->product_id)),
  array('label' => 'Delete Product', 'url' => '#',
    'linkOptions' => array('submit' => array('delete', 'id' => $model->product_id),
      'confirm' => 'Are you sure you want to delete this item?')),
  array('label' => 'Manage Product', 'url' => array('admin')));
?><div class="page-header">
  <h1>ÜRÜN DETAYI</h1>
</div><?php

$this->widget('zii.widgets.CDetailView', array('data' => $model,
  'attributes' => array('product_id', 'product_code', 'product_name', 'group_id', 'brand_id',
    'tax_rate', 'cost_price', 'sale_price', 'currency', 'quantity', 'image', 'type','description')));
?>
