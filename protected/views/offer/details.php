<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(	'Teklifler'=>array('index'),	'Teklif Detayları',);$tabs= array(
    'tab1'=>array('title'=>'Arabul', 'view'=>'_addproducttooffer', 'viewData'=>array()),
    'tab2'=>array('title'=>'Yeni Kayıt', 'view'=>'preview', 'viewData'=>array()),
);
?>

<div class="page-header">  <h1>TEKLİF Detayları</h1></div><?php$this->widget('TabView', array('htmlOptions'=>array('class'=>"tabbable"), 'tabs' => $tabs));?>
