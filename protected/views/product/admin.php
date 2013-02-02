<?php
/* @var $this ProductController */
/* @var $model Product */
$this->breadcrumbs = array('Ürünler' => array('index'), 'Yönet');
$this->menu = array(array('label' => 'Ürünleri Listele', 'url' => array('index')),
  array('label' => 'Ürün Ekle', 'url' => array('create')));

?>
<script type="text/javascript">
/*$(function()
	{
	  function searchGrid1(){
	    $.fn.yiiGridView.update('product-grid', {
	      type: 'GET',
	      url:'/tys/index.php/product/index?Product%5Bproduct_code%5D='+$('data-grid-searh-input').val()+'&Product_page=1&ajax=product-grid',
	      success: function() {
	       //$.fn.yiiGridView.update('product-grid');
		       alert('bitti');
	      }
	     });
	     return false;
	    }
		});

*/
/*
function alpay(){
  alert($('#data-grid-searh-input').val());
  return;
  $.fn.yiiGridView.update('product-grid', {
    type: 'GET',
    url:'/tys/index.php/product/index?Product%5Bproduct_name%5D='+$('#data-grid-searh-input').val()+'Product%5Bproduct_code%5D=&%C3%BC&Product%5Bgroup_id%5D=&Product%5Bbrand_id%5D=&Product_page=1&ajax=product-grid',
    success: function() {
     //$.fn.yiiGridView.update('product-grid');
      alert('bitti');
    }
   });
   return false;
}*/
</script>



<h1></h1>
<p>
  <?=Cms::link("Yeni Ürün Kaydı", "product/create")?>
  <?=Cms::link("Markalar", "brand/admin","color-icons book_co")?>
  <?=Cms::link("Gruplar", "productgroup/admin","color-icons shape_group_co")?>
</p>
<br />
<div class="widget-block">
  <div class="widget-head">
    <h5>Ürün Listesi</h5>
    <div class="widget-control pull-right">
      <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-plus"></i> Yeni Ürün</a></li>
      </ul>
    </div>
  </div>
  <div class="widget-content">
    <div class="widget-box">
     <!-- <div class="tbl-searchbox clearfix">
        <div id="DataTables_Table_1_filter" class="dataTables_filter filters">
          <label> Ürün Adı: <input id="data-grid-searh-input" name="Product[product_name]" type="text" aria-controls="DataTables_Table_1">
          </label>
        </div>
        <div id="DataTables_Table_1_length" class="dataTables_length">
          <label> <span class="lenghtMenu"> <select class="tbl_length" name="DataTables_Table_1_length" size="1" aria-controls="DataTables_Table_1">
                <option value="10" selected="selected">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
          </span> <span class="lengthLabel">Entries per page:</span>
          </label>
        </div>
        <div class="clear"></div>
      </div>-->

<?php
$this->widget('DataGrid', array('id' => 'product-grid', 'itemsCssClass' => 'data-tbl-boxy table',
  'summaryText' => "{count} adet kayıt bulundu", 'enablePagination' => true,
  'dataProvider' => $model->getProducts(), 'filter' => $model,
  'cssFile' => Yii::app()->request->baseUrl . '/interface/css/gridview/styles.css',
  'template' => '{items}{pager}',
  'columns' => array(array('name' => 'product_name'),array('name' => "product_code",'filter'=>false),
    array('name'=>'group.group_name','value'=>'$data->group->group_name','type'=>"text", 'filter'=>false), array('name'=>'brand.brand_name','value'=>'$data->brand->brand_name','type'=>"text", 'filter'=>false),
		/*
		'tax_rate',
		'cost_price',
		'sale_price',
		'currency',
		'quantity',
		'image',
		'type',
		*/
	array
(
    'class'=>'GridButton',
    'template'=>'{edit}{remove}',
    'buttons'=>array
    (
        'edit' => array
        (
            'label'=>'Düzenle',
            'iclass'=>'',
            'url'=>'Yii::app()->createUrl("product/update", array("id"=>$data->product_id))',
            'options'=>array('class'=>'btn'),
        ),
        'remove' => array
        (
            'label'=>'',
            'iclass'=>'icon-trash icon-white',
            'url'=>'Yii::app()->createUrl("product/delete", array("id"=>$data->product_id))',
            'options'=>array('class'=>'btn btn-danger delete'),
        ),
    ),
),
)));

?>
</div>
  </div>
</div>