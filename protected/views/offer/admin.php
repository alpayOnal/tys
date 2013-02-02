<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Teklifler'=>array('index'),
	'Teklif Listesi',
);

$this->menu=array(
	array('label'=>'Teklifleri Listele', 'url'=>array('index')),
	array('label'=>'Teklif Oluştur', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('offer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1></h1>
<p><?=Cms::link("Yeni Teklif Ver", "/offer/create")?></p>
<br />
<div class="widget-block">
  <div class="widget-head">
    <h5>Teklif Listesi</h5>
    <div class="widget-control pull-right">
      <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-plus"></i> Yeni Teklif</a></li>
      </ul>
    </div>
  </div>
  <div class="widget-content">
    <div class="widget-box">


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'offer-grid',
  'itemsCssClass' => 'data-tbl-boxy table',
  'summaryText' => "{count} adet kayıt bulundu",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'template' => '{items}{pager}',
  'cssFile' => Yii::app()->request->baseUrl.'/interface/css/gridview/styles.css',
	'columns'=>array(
		array('name'=>'offer_id','filter'=>false),
		array('name'=>'member_id','filter'=>false),
		array('name'=>'customer_id','filter'=>false),
		array('name'=>'customer_staff','filter'=>false),
		array('name'=>'offer_date','filter'=>false),
		array('name'=>'offer_status','filter'=>false),
	array
(
    'class'=>'GridButton',
    'template'=>'{details}{edit}{remove}',
    'buttons'=>array
    (
        'details' => array
        (
            'label'=>'Detaylar',
            'iclass'=>'',
            'url'=>'Yii::app()->createUrl("offer/details", array("id"=>$data->offer_id))',
            'options'=>array('class'=>'btn'),
        ),
        'edit' => array
        (
            'label'=>'Düzenle',
            'iclass'=>'',
            'url'=>'Yii::app()->createUrl("offer/update", array("id"=>$data->offer_id))',
            'options'=>array('class'=>'btn'),
        ),
        'remove' => array
        (
            'label'=>'',
            'iclass'=>'icon-trash icon-white',
            'url'=>'Yii::app()->createUrl("offer/delete", array("id"=>$data->offer_id))',
            'options'=>array('class'=>'btn btn-danger delete'),
        ),
    ),
),

	),
)); ?>
</div> </div></div>
