<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs = array('Müşteriler' => array('index'), 'Yönet');
$this->menu = array(array('label' => 'Cari Listesi', 'url' => array('index')),
  array('label' => 'Yeni Müşteri', 'url' => array('create')));
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1></h1>
<p>
  <?=Cms::link("Yeni Cari Kayıt", "/customer/create")?>
  <?=Cms::link("Gruplar", "customergroup/admin","color-icons shape_group_co")?>
</p>
<br />
<div class="widget-block">
  <div class="widget-head">
    <h5>Ürün Listesi</h5>
    <div class="widget-control pull-right">
      <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-plus"></i> Yeni Müşteri</a></li>
      </ul>
    </div>
  </div>
  <div class="widget-content">
    <div class="widget-box">
<?php
$this->widget('DataGrid', array('id' => 'customer-grid',
  'itemsCssClass' => 'data-tbl-boxy table',  'summaryText' => "{count} adet kayıt bulundu",  'template' => '{items}{pager}',
  'enablePagination' => true,  'dataProvider' => $model->search(),
  'filter' => $model,
  'cssFile' => Yii::app()->request->baseUrl . '/interface/css/gridview/styles.css',
  'columns' => array(array('name' => 'company_name'),
    array('name' => 'company_title', 'filter' => false),
    array('name' => 'current_code', 'filter' => false),
    array('name' => 'customer_group_id', 'filter' => false),
    array('name' => 'phone_gsm', 'filter' => false),
		/*
		'phone',
		'fax',
		'email',
		'web',
		'address',
		'city',
		'town',
		'company_type',
		*/
array('class' => 'GridButton', 'template' => '{edit}{stuff}{remove}',
      'buttons' => array(
        'edit' => array('label' => 'Düzenle', 'iclass' => '',
          'url' => 'Yii::app()->createUrl("customer/update", array("id"=>$data->customer_id))',
          'options' => array('class' => 'btn')),
        'stuff' => array('label' => 'Personel', 'iclass' => '',
          'url' => 'Yii::app()->createUrl("customerstaff/admin", array("id"=>$data->customer_id))',
          'options' => array('class' => 'btn')),        'remove' => array('label' => '', 'iclass' => 'icon-trash icon-white',
            'url' => 'Yii::app()->createUrl("customer/delete", array("id"=>$data->customer_id))',
            'options' => array('class' => 'btn btn-danger')),)))));
?>
</div>
  </div>
</div>

<script type="text/javascript" >
$(document).ready(function(){
  $('#customer-grid a[title=Delete]').hide();
});
</script>