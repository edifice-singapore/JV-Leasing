<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clients-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

<?php echo $form->errorSummary($model); ?>
<div class="clear" style="height:15px"></div>
    <div class="wrapper">
    	<div class="clear"></div>
    
    	<h3>Add <span style="color:#254078">New Clients</span></h3>
        <br />
        <table cellpadding="0" cellspacing="0">
        	<tr>
            	<td width="30%" style="padding: 10px 20px; vertical-align: top;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Personal Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="100">Name:</td>
                            <td><?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>100)); ?>
                            	<?php echo $form->error($model,'name'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Nickname:</td>
                            <td><?php echo $form->textField($model,'nick',array('size'=>30,'maxlength'=>30)); ?>
								<?php echo $form->error($model,'nick'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Address:</td>
                            <td><?php echo $form->textField($model,'address',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'address'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Postal Code:</td>
                            <td><?php echo $form->textField($model,'postalcode',array('size'=>10,'maxlength'=>10)); ?>
								<?php echo $form->error($model,'postalcode'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">NRIC:</td>
                            <td><?php echo $form->textField($model,'nric',array('size'=>10,'maxlength'=>10)); ?>
								<?php echo $form->error($model,'nric'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Date of Birth:</td>
                            <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'DateofBirth',
								    'id'=>'birthdate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								        
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php echo $form->error($model,'birthdate'); ?>

                            </td>
                        </tr>
                        <tr>
                            <td width="100">Nationality:</td>
                            <td>
                                <?php 
	                                echo $form->dropDownList($model,'nationality',array('0'=>'--- Choose Type ---','1'=>'Singaporean','2'=>'American',
	                                						'3'=>'Filipino'), 
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
	                               // echo $form->textField($model,'nationality',array('size'=>30,'maxlength'=>30));                                
								?>
								<?php echo $form->error($model,'nationality'); ?>
                    		</td>
                        </tr>
                        <tr>
                            <td width="100">Residential Tel:</td>
                            <td>
                            	<?php echo $form->textField($model,'res_tel',array('size'=>20,'maxlength'=>20)); ?>
								<?php echo $form->error($model,'res_tel'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Office Tel:</td>
                            <td>
                            	<?php echo $form->textField($model,'ofc_tel',array('size'=>20,'maxlength'=>20)); ?>
								<?php echo $form->error($model,'ofc_tel'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Mobile:</td>
                            <td>
                            	<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
								<?php echo $form->error($model,'mobile'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Email:</td>
                            <td>
                            	<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>50)); ?>
								<?php echo $form->error($model,'email'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Company Name:</td>
                            <td><?php echo $form->textField($model,'company',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'company'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Designation:</td>
                            <td>
                            	<?php echo $form->textField($model,'designation',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'designation'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Driving License Pass Date:</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'DrivingLicensePass',
								    'id'=>'drvlicense_passdate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php echo $form->error($model,'drvlicense_passdate'); ?>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            	<td width="%" style="padding: 10px 20px; vertical-align: top;">
                    <table cellpadding="0" cellspacing="0" style="width: 30%;" class="form">
                        <tr>
                            <td colspan="2"><h6>Policy</h6></td>
                        </tr>
                        <tr>
                            <td width="100">&nbsp;</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'policy_id',array('0'=>'--- Choose Type ---','1'=>'Policy 1','2'=>'Policy 2',
	                                						'3'=>'Policy 3'), 
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
								echo $form->error($model,'policy_id');
								?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Vehicle Model:</td>
                            <td><?php echo $form->textField($model,'v_model',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'v_model'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Vehicle Type:</td>
                            <td><?php echo $form->textField($model,'v_type',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'v_type'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Engine Capacity:</td>
                            <td><?php echo $form->textField($model,'engine_cap',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'engine_cap'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Year Manufactured:</td>
                            <td><?php echo $form->textField($model,'yr_manufactured',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'yr_manufactured'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Registration Date:</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'RegistrationDate',
								    'id'=>'reg_date',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>

								<?php $form->error($model,'reg_date'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Road Tax Expiry Date:</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'RoadTaxExpiryDate',
								    'id'=>'roadTax_expDate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php $form->error($model, 'roadTax_expDate'); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Car Plate:</td>
                            <td><?php echo $form->textField($model,'carPlate',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'carPlate'); ?>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table cellpadding="0" cellspacing="0" style="width: %;" class="form">
                        <tr>
                            <td colspan="2"><h6>Previous Insurance</h6></td>
                        </tr>
                        <tr>
                            <td width="100">Old Vehicle No.</td>
                            <td><?php echo $form->textField($model,'oldVehcNo',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'oldVehcNo'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Insurance Co.:</td>
                            <td><?php echo $form->textField($model,'insuranceCo',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'insuranceCo'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">OLD NCD:</td>
                            <td><?php echo $form->textField($model,'oldNCD',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'oldNCD'); ?>
							</td>
                        </tr>
                        <tr>
                            <td width="100">Expiry Date:</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'ExpiryDate',
								    'id'=>'prevExpDate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php $form->error($model,'prevExpDate'); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        	<tr style="background-color: #eee">
            	<td width="30%" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 30%;" class="form">
                        <tr>
                            <td colspan="2"><h6>Coverage Details</h6></td>
                        </tr>
                        <tr>
                            <td width="150">Policy No.:</td>
                            <td><?php echo $form->textField($model,'covPolicyNo',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covPolicyNo'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Cover Note No.:</td>
                            <td><?php echo $form->textField($model,'covCoverNoteNo',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covCoverNoteNo'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Coverage Type:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'covCoverageType',array('0'=>'--- Choose Type ---','1'=>'Coverage Type 1','2'=>'Coverage Type 2',
	                                						'3'=>'Coverage Type 3'), 
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
								echo $form->error($model,'covCoverageType');
								?>
                    		</td>
                        </tr>
                        <tr>
                            <td width="150">Plan:</td>
                            <td><?php echo $form->textField($model,'covPlan',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covPlan'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Gross Premium:</td>
                            <td><?php echo $form->textField($model,'covGrossPrem',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covGrossPrem'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">NCD%:</td>
                            <td><?php echo $form->textField($model,'covNCD',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covNCD'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Excess:</td>
                            <td><?php echo $form->textField($model,'covExcess',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covExcess'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Windscreen Amount:</td>
                            <td><?php echo $form->textField($model,'covWindScrAmnt',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covWindScrAmnt'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Load Amount:</td>
                            <td><?php echo $form->textField($model,'covLoadAmnt',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covLoadAmnt'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Personal Accident:</td>
                            <td><?php echo $form->textField($model,'covPersonalAcc',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covPersonalAcc'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Extension:</td>
                            <td><?php echo $form->textField($model,'covExtension',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covExtension'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Sur Charge:</td>
                            <td><?php echo $form->textField($model,'covSurCharge',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covSurCharge'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Passenger Liab:</td>
                            <td><?php echo $form->textField($model,'covPassLiab',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covPassLiab'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Other 1:</td>
                            <td><?php echo $form->textField($model,'covOther1',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covOther1'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Other 2:</td>
                            <td><?php echo $form->textField($model,'covOther2',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covOther2'); ?>
							</td>
                        </tr>
                        <tr>
                            <td width="150">Other 3:</td>
                            <td><?php echo $form->textField($model,'covOther3',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covOther3'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Loyalty Discount:</td>
                            <td><?php echo $form->textField($model,'covLoyaltyDis',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covLoyaltyDis'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">No Claim Discount:</td>
                            <td><?php echo $form->textField($model,'covNoClaim',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'covNoClaim'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">NCD Protector:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'covNCDProtectr',array('0'=>'--- Choose Type ---','1'=>'NCD Protector 1','2'=>'NCD Protector 2',
	                                						'3'=>'NCD Protector 3'), 
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
								echo $form->error($model,'covNCDProtectr');
								?>
                    		</td>
                        </tr>
                        
                        <tr>
                            <td width="150">Commence Date:</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'CommenceDate',
								    'id'=>'covCommDate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php $form->error($model, 'covCommDate'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Expiry Date:</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'covExpiryDate',
								    'id'=>'covExpDate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php $form->error($model, 'covExpDate') ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Insurance Co.:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'covInsurCo',array('0'=>'--- Choose Type ---','1'=>'Insurance Option 1','2'=>'Insurance Option 2',
	                                						'3'=>'Insurance Option 3'), 
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
								echo $form->error($model,'covInsurCo');
								?>
                    		</td>
                        </tr>
                        <tr>
                            <td width="150">Terminate Date<br />(If Any):</td>
                            <td>
                                <?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'name'=>'covTerminateDate',
								    'id'=>'covTermDate',
								    'value'=>date('d/m/Y'),    
								    'options'=>array(
								        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>false,
								        'changeMonth'=>true,
        								'changeYear'=>true,
								        'showOtherMonths'=>true,// Show Other month in jquery
        								'selectOtherMonths'=>true,// Select Other month in jquery
        								'yearRange'=>'1920:2099',
								    ),
								    'htmlOptions'=>array(
								        'style'=>''
								    ),
								));
								?>
								<?php $form->error($model,'covTermDate'); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            	<td width="%" style="padding: 10px 20px; vertical-align: top;">
                    <table cellpadding="0" cellspacing="0" class="form">
                        <tr>
                            <td colspan="2"><h6>Sales Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="150">Name Of Broker:</td>
                            <td><?php echo $form->textField($model,'spNameBroker',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spNameBroker'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Annual Premium:</td>
                            <td><?php echo $form->textField($model,'spAnnualPrem',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spAnnualPrem'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Discount<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><?php echo $form->textField($model,'spDiscount',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spDiscount'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Premium Due	:</td>
                            <td><?php echo $form->textField($model,'spPremDue',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spPremDue'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">GST &nbsp;<?php echo $form->textField($model,'spGST',array('size'=>2,'maxlength'=>5)); ?>
								<?php echo $form->error($model,'spGST'); ?>%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Misc Changes:</td>
                            <td><?php echo $form->textField($model,'spMiscChanges',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spMiscChanges'); ?>
							</td>
                        </tr>
                        <tr>
                            <td>Total Due:</td>
                            <td><?php echo $form->textField($model,'spTotalDue',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spTotalDue'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Comm 1:</td>
                            <td><?php echo $form->textField($model,'spComm1',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spComm1'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Net To Underwriter:</td>
                            <td><?php echo $form->textField($model,'spNetUnderwriter',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spNetUnderwriter'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Firm's Com<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><?php echo $form->textField($model,'spFirmComm',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spFirmComm'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Agent's Com<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><?php echo $form->textField($model,'spAgentComm',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spAgentComm'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Earning:</td>
                            <td><?php echo $form->textField($model,'spEarnings',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spEarnings'); ?>	
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Remarks:</td>
                            <td><?php echo $form->textArea($model, 'spRemarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23)); ?>
                            	<?php echo $form->error($model,'spRemarks'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Payment By:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'spPaymentBy',array('0'=>'--- Choose Type ---','1'=>'Payment Option 1','2'=>'Payment Option 2',
	                                						'3'=>'Payment Option 3'), 
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
								
								?>
								<?php $form->error($model, 'spPaymentBy') ?>

                    		</td>
                        </tr>
                        <tr>
                            <td width="150">Reciept No.<br />(auto generated):</td>
                            <td><?php echo $form->textField($model,'spReceiptNo',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'spReceiptNo'); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        	<tr>
            	

            </tr>
            
        </table>
        
          <?php  
                //Load the script ParamQuery
                //Yii::app()->clientScript->registerCoreScript('grid-master/pqgrid.min.js'); 
                //Yii::app()->clientScript->registerCoreScript('jquery.ui');
                
                //$path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('application.components'));
                //Yii::app()->clientScript->registerCssFile($path . '/addons/grid-master/pqgrid.min.css', 'screen, projection');
                //Yii::app()->clientScript->registerScriptFile($path.'/addons/grid-master/pqgrid.min.js');
          ?>
          
			

			
    </div><!-- .wrapper --> 
	
    <div>
    	<script type="text/javascript">
    	var dp_id;
    	var arrDrverPart = [
							{ dp_id:"",dp_Name:"",dp_icno:"",dp_occ:"",dp_dateBirth:"",dp_licPassDate:"",dp_maritalStatus:"",dp_gender:"",dp_relationship:"",dp_nationality:"",dp_wage:"",dp_remarks:"",dp_ref:"",dp_month:""},
							];
		
		$('#addDriver').click(function(){
			alert('');
		});
		
    	</script>


    	<fieldset width="100%"> 
				<legend>Driver's Particular</legend> 
				<table>
				<tr>
					<td colspan="2">
					</td>
				</tr>
				<tr>
					<td>
						<table cellpadding="0" cellspacing="0" style="" class="form">
		                        <tr>
		                            <td width="200">  Name:</td>
		                            <td><?php //echo $form->textField($model,'dpDrverName',array('size'=>30,'maxlength'=>100)); ?>
										<?php //echo $form->error($model,'dpDrverName'); ?>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td width="200">  IC No.:</td>
		                            <td><?php echo $form->textField($model,'dpDrverICno',array('size'=>30,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'dpDrverICno'); ?>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td width="200">  Occ.:</td>
		                            <td><?php echo $form->textField($model,'dpDrverOcc',array('size'=>30,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'dpDrverOcc'); ?>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td width="200">  <br />Date of Birth:</td>
		                            <td>
		                                <?php
										$this->widget('zii.widgets.jui.CJuiDatePicker',array(
										    'name'=>'dpDateofBirth',
										    'id'=>'dpDateBirth',
										    'value'=>date('d/m/Y'),    
										    'options'=>array(
										        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
										        'showButtonPanel'=>false,
										        'changeMonth'=>true,
		        								'changeYear'=>true,
										        'showOtherMonths'=>true,// Show Other month in jquery
		        								'selectOtherMonths'=>true,// Select Other month in jquery
		        								'yearRange'=>'1920:2099',
										    ),
										    'htmlOptions'=>array(
										        'style'=>''
										    ),
										));
										?>
										<?php $form->error($model, 'dpDateBirth'); ?>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td width="200">  <br />License Pass Date:</td>
		                            <td>
		                                <?php
										$this->widget('zii.widgets.jui.CJuiDatePicker',array(
										    'name'=>'dpLicensePassDate',
										    'id'=>'dpDrverLcnsePass',
										    'value'=>date('d/m/Y'),    
										    'options'=>array(
										        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
										        'showButtonPanel'=>false,
										        'changeMonth'=>true,
		        								'changeYear'=>true,
										        'showOtherMonths'=>true,// Show Other month in jquery
		        								'selectOtherMonths'=>true,// Select Other month in jquery
		        								'yearRange'=>'1920:2099',
										    ),
										    'htmlOptions'=>array(
										        'style'=>''
										    ),
										));
										?>
										<?php $form->error($model, 'dpDrverLcnsePass'); ?>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td width="200">  <br />Marital Status:</td>
		                            <td>
		                                <?php
		                                echo $form->dropDownList($model,'dpDrverMarStat',array('0'=>'--- Choose Type ---','1'=>'Single','2'=>'Married',
			                                						'3'=>'Divorced'), 
			                                					array('options' => array('0'=>array('selected'=>true)))
			                                					);
										?>
										<?php echo $form->error($model,'dpDrverMarStat'); ?>
		                    		</td>
		                        </tr>
		                        <tr>
		                            <td width="200">  Gender:</td>
		                            <td><?php 
										
		                            	echo $form->radioButtonList($model, 'dpGender',
					                    array(  1 => 'Male',
					                            2 => 'Female'),
					                    array( 'separator' => "")); // choose your own separator </td>

				                    ?>
				                    <?php $form->error($model, 'dpGender'); ?>
				                    </td>
		                        </tr>
		                </table>
                	</td>
            		<td width="%" style="padding: 10px 20px; vertical-align: top;">
	                    <table cellpadding="0" cellspacing="0" style="" class="form">
	                        
	                        <tr>
	                            <td width="100"> <br />Relationship:</td>
	                            <td><input name="" type="text" class="textfield" /></td>
	                        </tr>
	                        <tr>
	                            <td width="100">  <br />Nationality:</td>
	                            <td>
	                                <?php 
		                                echo $form->dropDownList($model,'dpNationality',array('0'=>'--- Choose Type ---','1'=>'Singaporean','2'=>'American',
		                                						'3'=>'Filipino'), 
		                                					array('options' => array('0'=>array('selected'=>true)))
		                                					);
		                               
										echo $form->error($model,'dpNationality'); 

									?>
									<?php $form->error($model, 'dpNationality'); ?>
	                    		</td>
	                        </tr>
	                        <tr>
	                            <td width="100">  Wage:</td>
	                            <td><?php echo $form->textField($model,'dpWage',array('size'=>30,'maxlength'=>100)); ?>
									<?php echo $form->error($model,'dpWage'); ?>
								</td>
	                        </tr>
	                        <tr>
	                            <td width="100"> <br />Remarks:</td>
	                            <td><?php echo $form->textArea($model, 'dpRemarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23)); ?>
	                            	<?php $form->error($model, 'dpRemarks'); ?>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td width="100">Ref:</td>
	                            <td><?php echo $form->textField($model,'dpRef',array('size'=>30,'maxlength'=>100)); ?>
									<?php echo $form->error($model,'dpRef'); ?>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td width="100">Month:</td>
	                            <td><?php 
		                                echo $form->dropDownList($model,'dpMonth',array('0'=>'--- Choose Type ---',
		                                	'1'=>'January','2'=>'Febuary',
		                                	'3'=>'March','4'=>'April',
		                                	'5'=>'May','6'=>'June',
		                                	'7'=>'July','8'=>'August',
		                                	'9'=>'September','10'=>'October',
		                                	'11'=>'November','12'=>'December'),
		                                	array('options' => array('0'=>array('selected'=>true)))
		                  					);
									?>
	                                <?php echo $form->error($model,'dpMonth');  ?>

	                    		</td>
	                        </tr>
	                        
	                    </table>
					</td>
					<td>
						
					</td>
				</tr>

				<tr>
					<td>
						<input type="button" id="addDriver" value="Add Driver" />
					</td>
					<td>&nbsp;</td> 
					
					
				</tr>
				</table>

			</fieldset>

			<?php foreach($driversModel as $driversModels): 
				echo $form->textField($driversModels,'dp_Name',array('size'=>30,'maxlength'=>100)); 
			endforeach; 
			?>

			
			<?php 
				
				$this->widget('CLinkPager', array('pages' => $pages ));
				//echo $pages->getCurrentPage();
			?>
    </div>
	

    

<?php $this->endWidget(); ?>

</div><!-- form -->


   
    
