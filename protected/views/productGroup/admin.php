<?php
/* @var $this ProductGroupController */
/* @var $model ProductGroup */

$this->breadcrumbs=array(
	'Ürün Grupları'=>array('admin'),
	'Yönetim',
);

$this->menu=array(
	array('label'=>'List ProductGroup', 'url'=>array('index')),
	array('label'=>'Create ProductGroup', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('product-group-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p>
  <?=Cms::link("Yeni Grup Oluştur", "/productgroup/create")?>
</p>
<br />
<div class="widget-block">
  <div class="widget-head">
    <h5>Ürün Grupları</h5>
  </div>
  <div class="widget-content">
    <div class="widget-box">

<?php $this->widget('DataGrid', array(
	'id'=>'product-group-grid',
  'itemsCssClass' => 'data-tbl-boxy table',
  'summaryText' => "{count} adet kayıt bulundu",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'template' => '{items}{pager}',
  'cssFile' => Yii::app()->request->baseUrl . '/interface/css/gridview/styles.css',
	'columns'=>array(
		'group_name',

  array('class' => 'GridButton', 'template' => '{edit}{remove}{delete}',
    'buttons' => array(
        'edit' => array('label' => 'Düzenle', 'iclass' => '',
            'url' => 'Yii::app()->createUrl("productgroup/update", array("id"=>$data->group_id))',
            'options' => array('class' => 'btn')),

        'remove' => array('label' => '', 'iclass' => 'icon-trash icon-white',
            'url' => 'Yii::app()->createUrl("productgroup/delete", array("id"=>$data->group_id))',
            'options' => array('class' => 'btn btn-danger delete')),
))
	),
)); ?>

</div>
  </div>
</div>

<script type="text/javascript" >
$(document).ready(function(){
  $('#customer-grid a[title=Delete]').hide();
});
</script>
