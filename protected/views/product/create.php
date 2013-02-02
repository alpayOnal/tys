<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array('Ürünler' => array('index'), 'Yeni Kayıt');
$this->beginWidget('zii.widgets.CPortlet', array('title' => 'İşlemler'));
$this->menu = array(array('label' => 'Ürünleri Listele', 'url' => array('index')),
  array('label' => 'Ürün Yönetimi', 'url' => array('admin')));
$this->endWidget();
?><div class="page-header">  <h1>YENİ ÜRÜN KAYDI</h1></div><?php echo $this->renderPartial('_form', array('model'=>$model)); ?>