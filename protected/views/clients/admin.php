<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Clients', 'url'=>array('index')),
	array('label'=>'Create Clients', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clients-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clients</h1>

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
	'id'=>'clients-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'nick',
		'address',
		'postalcode',
		'nric',
		/*
		'birthdate',
		'nationality',
		'res_tel',
		'ofc_tel',
		'mobile',
		'email',
		'company',
		'designation',
		'drvlicense_passdate',
		'policy_id',
		'v_model',
		'v_type',
		'engine_cap',
		'yr_manufactured',
		'reg_date',
		'roadTax_expDate',
		'carPlate',
		'oldVehcNo',
		'insuranceCo',
		'oldNCD',
		'prevExpDate',
		'covPolicyNo',
		'covCoverNoteNo',
		'covCoverageType',
		'covPlan',
		'covGrossPrem',
		'covNCD',
		'covExcess',
		'covWindScrAmnt',
		'covLoadAmnt',
		'covPersonalAcc',
		'covExtension',
		'covSurCharge',
		'covPassLiab',
		'covOther1',
		'covOther2',
		'covOther3',
		'covLoyaltyDis',
		'covNoClaim',
		'covNCDProtectr',
		'covCommDate',
		'covExpDate',
		'covInsurCo',
		'covTermDate',
		'spNameBroker',
		'spAnnualPrem',
		'spDiscount',
		'spPremDue',
		'spGST',
		'spMiscChanges',
		'spTotalDue',
		'spComm1',
		'spNetUnderwriter',
		'spFirmComm',
		'spAgentComm',
		'spEarnings',
		'spRemarks',
		'spPaymentBy',
		'spReceiptNo',
		'dpDrverName',
		'dpDrverICno',
		'dpDrverOcc',
		'dpDateBirth',
		'dpDrverLcnsePass',
		'dpDrverMarStat',
		'dpGender',
		'dpRelationship',
		'dpNationality',
		'dpWage',
		'dpRemarks',
		'dpRef',
		'dpMonth',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
