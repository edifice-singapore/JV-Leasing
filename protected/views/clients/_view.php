<?php
/* @var $this ClientsController */
/* @var $data Clients */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick')); ?>:</b>
	<?php echo CHtml::encode($data->nick); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postalcode')); ?>:</b>
	<?php echo CHtml::encode($data->postalcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nric')); ?>:</b>
	<?php echo CHtml::encode($data->nric); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->birthdate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality')); ?>:</b>
	<?php echo CHtml::encode($data->nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('res_tel')); ?>:</b>
	<?php echo CHtml::encode($data->res_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ofc_tel')); ?>:</b>
	<?php echo CHtml::encode($data->ofc_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
	<?php echo CHtml::encode($data->designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drvlicense_passdate')); ?>:</b>
	<?php echo CHtml::encode($data->drvlicense_passdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_id')); ?>:</b>
	<?php echo CHtml::encode($data->policy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_model')); ?>:</b>
	<?php echo CHtml::encode($data->v_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_type')); ?>:</b>
	<?php echo CHtml::encode($data->v_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('engine_cap')); ?>:</b>
	<?php echo CHtml::encode($data->engine_cap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yr_manufactured')); ?>:</b>
	<?php echo CHtml::encode($data->yr_manufactured); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_date')); ?>:</b>
	<?php echo CHtml::encode($data->reg_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roadTax_expDate')); ?>:</b>
	<?php echo CHtml::encode($data->roadTax_expDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carPlate')); ?>:</b>
	<?php echo CHtml::encode($data->carPlate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oldVehcNo')); ?>:</b>
	<?php echo CHtml::encode($data->oldVehcNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insuranceCo')); ?>:</b>
	<?php echo CHtml::encode($data->insuranceCo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oldNCD')); ?>:</b>
	<?php echo CHtml::encode($data->oldNCD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prevExpDate')); ?>:</b>
	<?php echo CHtml::encode($data->prevExpDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covPolicyNo')); ?>:</b>
	<?php echo CHtml::encode($data->covPolicyNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covCoverNoteNo')); ?>:</b>
	<?php echo CHtml::encode($data->covCoverNoteNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covCoverageType')); ?>:</b>
	<?php echo CHtml::encode($data->covCoverageType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covPlan')); ?>:</b>
	<?php echo CHtml::encode($data->covPlan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covGrossPrem')); ?>:</b>
	<?php echo CHtml::encode($data->covGrossPrem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covNCD')); ?>:</b>
	<?php echo CHtml::encode($data->covNCD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covExcess')); ?>:</b>
	<?php echo CHtml::encode($data->covExcess); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covWindScrAmnt')); ?>:</b>
	<?php echo CHtml::encode($data->covWindScrAmnt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covLoadAmnt')); ?>:</b>
	<?php echo CHtml::encode($data->covLoadAmnt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covPersonalAcc')); ?>:</b>
	<?php echo CHtml::encode($data->covPersonalAcc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covExtension')); ?>:</b>
	<?php echo CHtml::encode($data->covExtension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covSurCharge')); ?>:</b>
	<?php echo CHtml::encode($data->covSurCharge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covPassLiab')); ?>:</b>
	<?php echo CHtml::encode($data->covPassLiab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covOther1')); ?>:</b>
	<?php echo CHtml::encode($data->covOther1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covOther2')); ?>:</b>
	<?php echo CHtml::encode($data->covOther2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covOther3')); ?>:</b>
	<?php echo CHtml::encode($data->covOther3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covLoyaltyDis')); ?>:</b>
	<?php echo CHtml::encode($data->covLoyaltyDis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covNoClaim')); ?>:</b>
	<?php echo CHtml::encode($data->covNoClaim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covNCDProtectr')); ?>:</b>
	<?php echo CHtml::encode($data->covNCDProtectr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covCommDate')); ?>:</b>
	<?php echo CHtml::encode($data->covCommDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covExpDate')); ?>:</b>
	<?php echo CHtml::encode($data->covExpDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covInsurCo')); ?>:</b>
	<?php echo CHtml::encode($data->covInsurCo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covTermDate')); ?>:</b>
	<?php echo CHtml::encode($data->covTermDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spNameBroker')); ?>:</b>
	<?php echo CHtml::encode($data->spNameBroker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spAnnualPrem')); ?>:</b>
	<?php echo CHtml::encode($data->spAnnualPrem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spDiscount')); ?>:</b>
	<?php echo CHtml::encode($data->spDiscount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spPremDue')); ?>:</b>
	<?php echo CHtml::encode($data->spPremDue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spGST')); ?>:</b>
	<?php echo CHtml::encode($data->spGST); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spMiscChanges')); ?>:</b>
	<?php echo CHtml::encode($data->spMiscChanges); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spTotalDue')); ?>:</b>
	<?php echo CHtml::encode($data->spTotalDue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spComm1')); ?>:</b>
	<?php echo CHtml::encode($data->spComm1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spNetUnderwriter')); ?>:</b>
	<?php echo CHtml::encode($data->spNetUnderwriter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spFirmComm')); ?>:</b>
	<?php echo CHtml::encode($data->spFirmComm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spAgentComm')); ?>:</b>
	<?php echo CHtml::encode($data->spAgentComm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spEarnings')); ?>:</b>
	<?php echo CHtml::encode($data->spEarnings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spRemarks')); ?>:</b>
	<?php echo CHtml::encode($data->spRemarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spPaymentBy')); ?>:</b>
	<?php echo CHtml::encode($data->spPaymentBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spReceiptNo')); ?>:</b>
	<?php echo CHtml::encode($data->spReceiptNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpDrverName')); ?>:</b>
	<?php echo CHtml::encode($data->dpDrverName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpDrverICno')); ?>:</b>
	<?php echo CHtml::encode($data->dpDrverICno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpDrverOcc')); ?>:</b>
	<?php echo CHtml::encode($data->dpDrverOcc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpDateBirth')); ?>:</b>
	<?php echo CHtml::encode($data->dpDateBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpDrverLcnsePass')); ?>:</b>
	<?php echo CHtml::encode($data->dpDrverLcnsePass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpDrverMarStat')); ?>:</b>
	<?php echo CHtml::encode($data->dpDrverMarStat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpGender')); ?>:</b>
	<?php echo CHtml::encode($data->dpGender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpRelationship')); ?>:</b>
	<?php echo CHtml::encode($data->dpRelationship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpNationality')); ?>:</b>
	<?php echo CHtml::encode($data->dpNationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpWage')); ?>:</b>
	<?php echo CHtml::encode($data->dpWage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpRemarks')); ?>:</b>
	<?php echo CHtml::encode($data->dpRemarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpRef')); ?>:</b>
	<?php echo CHtml::encode($data->dpRef); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpMonth')); ?>:</b>
	<?php echo CHtml::encode($data->dpMonth); ?>
	<br />

	*/ ?>

</div>