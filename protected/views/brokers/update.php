<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	$model->brokers_id=>array('view','id'=>$model->brokers_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Create Brokers', 'url'=>array('create')),
	array('label'=>'View Brokers', 'url'=>array('view', 'id'=>$model->brokers_id)),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
?>

<h1>Update Brokers <?php echo $model->brokers_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>