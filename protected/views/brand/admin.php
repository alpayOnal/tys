<?php
/* @var $this BrandController */
/* @var $model Brand */

$this->breadcrumbs=array(
	'Markalar'=>array('admin'),
	'Yönet',
);

$this->menu=array(
	array('label'=>'List Brand', 'url'=>array('index')),
	array('label'=>'Create Brand', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('brand-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="page-header">
  <h1>Markaları Yönet</h1>
</div>




<?php $this->renderPartial('_form',array(
	'model'=>$model,
)); ?>

<div class="widget-block">
  <div class="widget-head">
    <h5>MARKALAR</h5>
    <div class="widget-control pull-right">
      <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-plus"></i> Yeni Marka</a></li>
      </ul>
    </div>
  </div>
  <div class="widget-content">
    <div class="widget-box">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'brand-grid',
	'dataProvider'=>$model->search(),
  'itemsCssClass' => 'data-tbl-boxy table', 'summaryText' => "{count} adet kayıt bulundu",
  'enablePagination' => true, 'template' => '{items}{pager}',
  'cssFile' => Yii::app()->request->baseUrl . '/interface/css/gridview/styles.css',
	/*'filter'=>$model,*/
	'columns'=>array(
		'brand_name',
array('class' => 'GridButton', 'template' => '{edit}{remove}',
    'buttons' => array(
        'edit' => array('label' => 'Düzenle', 'iclass' => '',
            'url' => 'Yii::app()->createUrl("brand/update", array("id"=>$data->brand_id))',
            'options' => array('class' => 'btn')),
        'remove' => array('label' => '', 'iclass' => 'icon-trash icon-white',
            'url' => 'Yii::app()->createUrl("brand/delete", array("id"=>$data->brand_id))',
            'options' => array('class' => 'btn btn-danger delete')),
)),

	),
)); ?>

</div>
  </div>
</div>

