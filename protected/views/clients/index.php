<?php
/* @var $this ClientsController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Clients',
);*/


/*
$this->menu=array(
	array('label'=>'Create Clients', 'url'=>array('create')),
	array('label'=>'Manage Clients', 'url'=>array('admin')),
);
*/


?>

<h3>Due for <span style="color:#254078">Renewal</span></h3>
<br />

<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 



?>
