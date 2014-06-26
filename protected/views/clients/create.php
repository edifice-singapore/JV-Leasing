<?php
/* @var $this ClientsController */
/* @var $model Clients */
/*
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Create',
);*/
	/*
	$this->menu=array(
		array('label'=>'List Clients', 'url'=>array('index')),
		array('label'=>'Manage Clients', 'url'=>array('admin')),
	);
	*/
	?>

<h3>Add <span style="color:#254078">New Clients</span></h3>
<br />
<h6>Personal Particulars</h6>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>