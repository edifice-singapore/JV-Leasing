<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Create Brokers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#brokers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Brokers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'brokers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'brokers_id',
		'brokers_name',
		'brokers_contact',
		'brokers_email',
		'brokers_address',
		'brokers_commission',
		/*
		'date',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
