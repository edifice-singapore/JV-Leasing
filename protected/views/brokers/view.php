<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	$model->brokers_id,
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Create Brokers', 'url'=>array('create')),
	array('label'=>'Update Brokers', 'url'=>array('update', 'id'=>$model->brokers_id)),
	array('label'=>'Delete Brokers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->brokers_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
?>

<h1>View Brokers #<?php echo $model->brokers_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'brokers_id',
		'brokers_name',
		'brokers_contact',
		'brokers_email',
		'brokers_address',
		'brokers_commission',
		'date',
		'status',
	),
)); ?>
