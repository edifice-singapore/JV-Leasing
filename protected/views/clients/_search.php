<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nick'); ?>
		<?php echo $form->textField($model,'nick',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postalcode'); ?>
		<?php echo $form->textField($model,'postalcode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nric'); ?>
		<?php echo $form->textField($model,'nric',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'res_tel'); ?>
		<?php echo $form->textField($model,'res_tel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ofc_tel'); ?>
		<?php echo $form->textField($model,'ofc_tel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'designation'); ?>
		<?php echo $form->textField($model,'designation',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drvlicense_passdate'); ?>
		<?php echo $form->textField($model,'drvlicense_passdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'policy_id'); ?>
		<?php echo $form->textField($model,'policy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_model'); ?>
		<?php echo $form->textField($model,'v_model',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_type'); ?>
		<?php echo $form->textField($model,'v_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'engine_cap'); ?>
		<?php echo $form->textField($model,'engine_cap',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yr_manufactured'); ?>
		<?php echo $form->textField($model,'yr_manufactured',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_date'); ?>
		<?php echo $form->textField($model,'reg_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roadTax_expDate'); ?>
		<?php echo $form->textField($model,'roadTax_expDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carPlate'); ?>
		<?php echo $form->textField($model,'carPlate',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oldVehcNo'); ?>
		<?php echo $form->textField($model,'oldVehcNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insuranceCo'); ?>
		<?php echo $form->textField($model,'insuranceCo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oldNCD'); ?>
		<?php echo $form->textField($model,'oldNCD',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prevExpDate'); ?>
		<?php echo $form->textField($model,'prevExpDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covPolicyNo'); ?>
		<?php echo $form->textField($model,'covPolicyNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covCoverNoteNo'); ?>
		<?php echo $form->textField($model,'covCoverNoteNo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covCoverageType'); ?>
		<?php echo $form->textField($model,'covCoverageType',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covPlan'); ?>
		<?php echo $form->textField($model,'covPlan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covGrossPrem'); ?>
		<?php echo $form->textField($model,'covGrossPrem',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covNCD'); ?>
		<?php echo $form->textField($model,'covNCD',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covExcess'); ?>
		<?php echo $form->textField($model,'covExcess',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covWindScrAmnt'); ?>
		<?php echo $form->textField($model,'covWindScrAmnt',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covLoadAmnt'); ?>
		<?php echo $form->textField($model,'covLoadAmnt',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covPersonalAcc'); ?>
		<?php echo $form->textField($model,'covPersonalAcc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covExtension'); ?>
		<?php echo $form->textField($model,'covExtension',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covSurCharge'); ?>
		<?php echo $form->textField($model,'covSurCharge',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covPassLiab'); ?>
		<?php echo $form->textField($model,'covPassLiab',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covOther1'); ?>
		<?php echo $form->textField($model,'covOther1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covOther2'); ?>
		<?php echo $form->textField($model,'covOther2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covOther3'); ?>
		<?php echo $form->textField($model,'covOther3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covLoyaltyDis'); ?>
		<?php echo $form->textField($model,'covLoyaltyDis',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covNoClaim'); ?>
		<?php echo $form->textField($model,'covNoClaim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covNCDProtectr'); ?>
		<?php echo $form->textField($model,'covNCDProtectr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covCommDate'); ?>
		<?php echo $form->textField($model,'covCommDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covExpDate'); ?>
		<?php echo $form->textField($model,'covExpDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covInsurCo'); ?>
		<?php echo $form->textField($model,'covInsurCo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covTermDate'); ?>
		<?php echo $form->textField($model,'covTermDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spNameBroker'); ?>
		<?php echo $form->textField($model,'spNameBroker'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spAnnualPrem'); ?>
		<?php echo $form->textField($model,'spAnnualPrem',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spDiscount'); ?>
		<?php echo $form->textField($model,'spDiscount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spPremDue'); ?>
		<?php echo $form->textField($model,'spPremDue'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spGST'); ?>
		<?php echo $form->textField($model,'spGST',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spMiscChanges'); ?>
		<?php echo $form->textField($model,'spMiscChanges',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spTotalDue'); ?>
		<?php echo $form->textField($model,'spTotalDue',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spComm1'); ?>
		<?php echo $form->textField($model,'spComm1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spNetUnderwriter'); ?>
		<?php echo $form->textField($model,'spNetUnderwriter',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spFirmComm'); ?>
		<?php echo $form->textField($model,'spFirmComm',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spAgentComm'); ?>
		<?php echo $form->textField($model,'spAgentComm',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spEarnings'); ?>
		<?php echo $form->textField($model,'spEarnings',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spRemarks'); ?>
		<?php echo $form->textField($model,'spRemarks',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spPaymentBy'); ?>
		<?php echo $form->textField($model,'spPaymentBy',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spReceiptNo'); ?>
		<?php echo $form->textField($model,'spReceiptNo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpDrverName'); ?>
		<?php echo $form->textField($model,'dpDrverName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpDrverICno'); ?>
		<?php echo $form->textField($model,'dpDrverICno',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpDrverOcc'); ?>
		<?php echo $form->textField($model,'dpDrverOcc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpDateBirth'); ?>
		<?php echo $form->textField($model,'dpDateBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpDrverLcnsePass'); ?>
		<?php echo $form->textField($model,'dpDrverLcnsePass'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpDrverMarStat'); ?>
		<?php echo $form->textField($model,'dpDrverMarStat',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpGender'); ?>
		<?php echo $form->textField($model,'dpGender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpRelationship'); ?>
		<?php echo $form->textField($model,'dpRelationship',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpNationality'); ?>
		<?php echo $form->textField($model,'dpNationality',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpWage'); ?>
		<?php echo $form->textField($model,'dpWage',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpRemarks'); ?>
		<?php echo $form->textField($model,'dpRemarks',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpRef'); ?>
		<?php echo $form->textField($model,'dpRef',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpMonth'); ?>
		<?php echo $form->textField($model,'dpMonth',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->