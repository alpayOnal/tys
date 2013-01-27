<?php
/* @var $this ProductController */
/* @var $model Product */
$this->breadcrumbs = array('Products' => array('index'), 'Manage');
$this->menu = array(array('label' => 'Ürünleri Listele', 'url' => array('index')),
  array('label' => 'Ürün Ekle', 'url' => array('create')));
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('product-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1></h1>
<p><?=cms::link("Yeni Ürün Kaydı", "/product/create")?></p>
<br />
<div class="widget-block">
					<div class="widget-head">
						<h5>Ürün Listesi</h5>
						<div class="widget-control pull-right">
							<a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-plus"></i> Yeni Ürün</a></li>
								<li><a href="#"><i class="icon-ok"></i> Bulk Approved</a></li>
								<li><a href="#"><i class="icon-minus-sign"></i> Bulk Remove</a></li>
							</ul>
						</div>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php
$this->widget('DataGrid', array('id' => 'product-grid',
'itemsCssClass' => 'data-tbl-boxy table',
'summaryText'=>"{count} adet kayıt bulundu",
'enablePagination'=>true,
  'dataProvider' => $model->search(), /*'filter' => $model,*/
  'cssFile' => Yii::app()->request->baseUrl.'/interface/css/gridview/styles.css',
'template'=>'{items}{pager}',
  'columns' => array(array('name'=>"product_code", 'filter'=>false),array('name'=> 'product_name','filter'=>true), 'group_id', 'brand_id',
		/*
		'tax_rate',
		'cost_price',
		'sale_price',
		'currency',
		'quantity',
		'image',
		'type',
		*/
		array('class' => 'CButtonColumn'))));
    //$this->widget("GridPager",array('pages'=>$model->search()->getPagination()));

?>
</div>
</div>
</div>

