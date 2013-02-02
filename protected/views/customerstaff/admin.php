<?php
/* @var $this CustomerstaffController */
/* @var $model CustomerStaff */

$this->breadcrumbs=array(
	'Müşteri Personeli'=>array('index'),
	'Yönet',
);

$this->menu=array(
	array('label'=>'List CustomerStaff', 'url'=>array('index')),
	array('label'=>'Create CustomerStaff', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-staff-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p>
  <?=Cms::link("Yeni Personel", "/customerstaff/create/".$model->customerId)?>
</p>
<br />

<div class="widget-block">

  <div class="widget-head">

    <h5>Personel Listesi</h5>

    <div class="widget-control pull-right">

      <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>

      <ul class="dropdown-menu">

        <li><a href="#"><i class="icon-plus"></i> Yeni Personel</a></li>

      </ul>

    </div>

  </div>

  <div class="widget-content">

    <div class="widget-box">


<?php $this->widget('DataGrid', array(
	'id'=>'customer-staff-grid',
  'itemsCssClass' => 'data-tbl-boxy table',
  'summaryText' => "{count} adet kayıt bulundu",
  'template' => '{items}{pager}',
  'cssFile' => Yii::app()->request->baseUrl . '/interface/css/gridview/styles.css',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
    'name',
		'gsm',
		'phone_internal',
		'email',
array('class' => 'GridButton', 'template' => '{edit}{remove}',
    'buttons' => array(
        'edit' => array('label' => 'Düzenle', 'iclass' => '',
            'url' => 'Yii::app()->createUrl("customerstaff/update", array("id"=>$data->staff_id))',
            'options' => array('class' => 'btn')),
        'remove' => array('label' => '', 'iclass' => 'icon-trash icon-white',
            'url' => 'Yii::app()->createUrl("customerstaff/delete", array("id"=>$data->staff_id))',
            'options' => array('class' => 'btn btn-danger delete')),
)),

	),
)); ?>

</div>
  </div>
</div>
