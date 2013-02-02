<?php
/* @var $this CustomergroupController */
/* @var $model CustomerGroup */

$this->breadcrumbs=array(
	'Müşteri Grupları'=>array('index'),
	'Yönet',
);

$this->menu=array(
	array('label'=>'List CustomerGroup', 'url'=>array('index')),
	array('label'=>'Create CustomerGroup', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-group-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p>
  <?=Cms::link("Yeni Grup Oluştur", "/customergroup/create")?>
</p>
<br />
<div class="widget-block">
  <div class="widget-head">
    <h5>Müşteri Grupları</h5>
  </div>
  <div class="widget-content">
    <div class="widget-box">


<?php $this->widget('DataGrid', array(
	'id'=>'customer-group-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'itemsCssClass' => 'data-tbl-boxy table',
  'summaryText' => "{count} adet kayıt bulundu",
  'template' => '{items}{pager}',
  'cssFile' => Yii::app()->request->baseUrl . '/interface/css/gridview/styles.css',
	'columns'=>array(
		'group_name',
    array('class' => 'GridButton', 'template' => '{edit}{remove}',
        'buttons' => array(
            'edit' => array('label' => 'Düzenle', 'iclass' => '',
                'url' => 'Yii::app()->createUrl("customergroup/update", array("id"=>$data->customer_group_id))',
                'options' => array('class' => 'btn')),
            'remove' => array('label' => '', 'iclass' => 'icon-trash icon-white',
                'url' => 'Yii::app()->createUrl("customergroup/delete", array("id"=>$data->customer_group_id))',
                'options' => array('class' => 'btn btn-danger delete')),

        )),
    	),
)); ?>

</div>
  </div>
</div>
