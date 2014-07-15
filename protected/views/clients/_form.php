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

	

<?php //echo $form->errorSummary($model); ?>


<div class="clear" style="height:15px"></div>
    <div class="wrapper">
        <div class="clear"></div>
    
        <h3>Add <span style="color:#254078">New Clients</span></h3>
        <br />
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="600" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Personal Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Name:</td>
                            <td><?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'name', array('style'=> 'color:red;')); ?>

                            </td>
                        </tr>
                        <tr>
                            <td width="200">Nickname:</td>
                            <td><?php echo $form->textField($model,'nick',array('size'=>30,'maxlength'=>30, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'nick', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Address:</td>
                            <td><?php echo $form->textArea($model,'address',array('size'=>30,'maxlength'=>100, 'class'=>'textarea')); ?>
                                <?php echo $form->error($model,'address', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Postal Code:</td>
                            <td><?php echo $form->textField($model,'postalcode',array('size'=>10,'maxlength'=>10, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'postalcode', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">NRIC:</td>
                            <td><?php echo $form->textField($model,'nric',array('size'=>10,'maxlength'=>10, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'nric', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Date of Birth:</td>
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
                                <?php echo $form->error($model,'birthdate', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Nationality:</td>
                            <td>
                                <?php 
                                    echo $form->dropDownList($model,'nationality',array('0'=>'--- Choose Type ---','1'=>'Singaporean','2'=>'American',
                                                            '3'=>'Filipino'), 
                                                        array('options' => array('0'=>array('selected'=>true)), 'class'=>'selectmenu')
                                                        );
                                   // echo $form->textField($model,'nationality',array('size'=>30,'maxlength'=>30));                                
                                ?>
                                <?php echo $form->error($model,'nationality', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Residential Tel:</td>
                            <td><?php echo $form->textField($model,'res_tel',array('size'=>20,'maxlength'=>20, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'res_tel', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Office Tel:</td>
                            <td><?php echo $form->textField($model,'ofc_tel',array('size'=>20,'maxlength'=>20, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'ofc_tel', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Mobile:</td>
                            <td><?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'mobile', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Email:</td>
                            <td><?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>50, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'email', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Company Name:</td>
                            <td><?php echo $form->textField($model,'company',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'company', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Designation:</td>
                            <td><?php echo $form->textField($model,'designation',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'designation', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driving License Pass Date:</td>
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
                                <?php echo $form->error($model,'drvlicense_passdate', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="480" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Policy</h6></td>
                        </tr>
                        <tr>
                            <td width="200">&nbsp;</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'policy_id',array('0'=>'--- Choose Type ---','1'=>'Policy 1','2'=>'Policy 2',
                                                            '3'=>'Policy 3'), 
                                                        array('options' => array('0'=>array('selected'=>true)),'class'=>'selectmenu')
                                                        );
                                echo $form->error($model,'policy_id', array('style'=> 'color:red;'));
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Vehicle Model:</td>
                            <td><?php echo $form->textField($model,'v_model',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'v_model', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Vehicle Type:</td>
                            <td><?php echo $form->textField($model,'v_type',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'v_type', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Engine Capacity:</td>
                            <td><?php echo $form->textField($model,'engine_cap',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'engine_cap', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Year Manufactured:</td>
                            <td><?php echo $form->textField($model,'yr_manufactured',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'yr_manufactured', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Registration Date:</td>
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

                                <?php $form->error($model,'reg_date', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Road Tax Expiry Date:</td>
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
                                <?php $form->error($model, 'roadTax_expDate', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Car Plate:</td>
                            <td><?php echo $form->textField($model,'carPlate',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'carPlate', array('style'=> 'color:red;')); ?></td>
                        </tr>
                    </table>
                    <br />
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Previous Insurance</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Old Vehicle No.</td>
                            <td><?php echo $form->textField($model,'oldVehcNo',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'oldVehcNo', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Insurance Co.:</td>
                            <td><?php echo $form->textField($model,'insuranceCo',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'insuranceCo', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">OLD NCD:</td>
                            <td><?php echo $form->textField($model,'oldNCD',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'oldNCD', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Expiry Date:</td>
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
                                <?php $form->error($model,'prevExpDate', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="background-color: #eee">
                <td width="600" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Coverage Details</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Policy No.:</td>
                            <td><?php echo $form->textField($model,'covPolicyNo',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covPolicyNo', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Cover Note No.:</td>
                            <td><?php echo $form->textField($model,'covCoverNoteNo',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covCoverNoteNo', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Coverage Type:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'covCoverageType',array('0'=>'--- Choose Type ---','1'=>'Coverage Type 1','2'=>'Coverage Type 2',
                                                            '3'=>'Coverage Type 3'), 
                                                        array('options' => array('0'=>array('selected'=>true)),'class'=>'selectmenu')
                                                        );
                                echo $form->error($model,'covCoverageType', array('style'=> 'color:red;'));
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Plan:</td>
                            <td><?php echo $form->textField($model,'covPlan',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covPlan', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Gross Premium:</td>
                            <td><?php echo $form->textField($model,'covGrossPrem',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covGrossPrem', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">NCD%:</td>
                            <td><?php echo $form->textField($model,'covNCD',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covNCD', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Excess:</td>
                            <td><?php echo $form->textField($model,'covExcess',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covExcess', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Windscreen Amount:</td>
                            <td><?php echo $form->textField($model,'covWindScrAmnt',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covWindScrAmnt', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Load Amount:</td>
                            <td><?php echo $form->textField($model,'covLoadAmnt',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covLoadAmnt', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Personal Accident:</td>
                            <td><?php echo $form->textField($model,'covPersonalAcc',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covPersonalAcc', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Extension:</td>
                            <td><?php echo $form->textField($model,'covExtension',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covExtension', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Sur Charge:</td>
                            <td><?php echo $form->textField($model,'covSurCharge',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covSurCharge', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Passenger Liab:</td>
                            <td><?php echo $form->textField($model,'covPassLiab',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covPassLiab', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Other 1:</td>
                            <td><?php echo $form->textField($model,'covOther1',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covOther1', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Other 2:</td>
                            <td><?php echo $form->textField($model,'covOther2',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covOther2', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Other 3:</td>
                            <td><?php echo $form->textField($model,'covOther3',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covOther3', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Loyalty Discount:</td>
                            <td><?php echo $form->textField($model,'covLoyaltyDis',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covLoyaltyDis', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">No Claim Discount:</td>
                            <td><?php echo $form->textField($model,'covNoClaim',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'covNoClaim', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">NCD Protector:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'covNCDProtectr',array('0'=>'--- Choose Type ---','1'=>'NCD Protector 1','2'=>'NCD Protector 2',
                                                            '3'=>'NCD Protector 3'), 
                                                        array('options' => array('0'=>array('selected'=>true)),'class'=>'selectmenu')
                                                        );
                                echo $form->error($model,'covNCDProtectr', array('style'=> 'color:red;'));
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td width="200">Commence Date:</td>
                            <td><?php
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
                                <?php $form->error($model, 'covCommDate', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Expiry Date:</td>
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
                                <?php $form->error($model, 'covExpDate', array('style'=> 'color:red;')) ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Insurance Co.:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'covInsurCo',array('0'=>'--- Choose Type ---','1'=>'Insurance Option 1','2'=>'Insurance Option 2',
                                                            '3'=>'Insurance Option 3'), 
                                                        array('options' => array('0'=>array('selected'=>true)), 'class'=>'selectmenu')
                                                        );
                                echo $form->error($model,'covInsurCo', array('style'=> 'color:red;'));
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Terminate Date<br />(If Any):</td>
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
                                <?php $form->error($model,'covTermDate', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="480" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Sales Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Name Of Broker:</td>
                            <td><?php echo $form->textField($model,'spNameBroker',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spNameBroker', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Annual Premium:</td>
                            <td><?php echo $form->textField($model,'spAnnualPrem',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spAnnualPrem', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Discount<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><?php echo $form->textField($model,'spDiscount',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spDiscount', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Premium Due :</td>
                            <td><?php echo $form->textField($model,'spPremDue',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spPremDue', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">GST<?php echo $form->textField($model,'spGST',array('size'=>2,'maxlength'=>5, 'class'=>'textField', 'style'=>'width: 30px; margin:-4px 2px 0 5px')); ?>
                                <?php echo $form->error($model,'spGST', array('style'=> 'color:red;')); ?>%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Misc Changes:</td>
                            <td><?php echo $form->textField($model,'spMiscChanges',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spMiscChanges', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Total Due:</td>
                            <td><?php echo $form->textField($model,'spTotalDue',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spTotalDue', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Comm 1:</td>
                            <td><?php echo $form->textField($model,'spComm1',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spComm1', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Net To Underwriter:</td>
                            <td><?php echo $form->textField($model,'spNetUnderwriter',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spNetUnderwriter', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Firm's Com<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><?php echo $form->textField($model,'spFirmComm',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spFirmComm', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Agent's Com<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><?php echo $form->textField($model,'spAgentComm',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spAgentComm', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Earning:</td>
                            <td><?php echo $form->textField($model,'spEarnings',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spEarnings', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Remarks:</td>
                            <td><?php echo $form->textArea($model, 'spRemarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23, 'class' => 'textarea')); ?>
                                <?php echo $form->error($model,'spRemarks', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td>Payment By:</td>
                            <td>
                                <?php
                                echo $form->dropDownList($model,'spPaymentBy',array('0'=>'--- Choose Type ---','1'=>'Payment Option 1','2'=>'Payment Option 2',
                                                            '3'=>'Payment Option 3'), 
                                                        array('options' => array('0'=>array('selected'=>true)),'class'=>'selectmenu')
                                                        );
                                
                                ?>
                                <?php $form->error($model, 'spPaymentBy', array('style'=> 'color:red;')) ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Reciept No.<br />(auto generated):</td>
                            <td><?php echo $form->textField($model,'spReceiptNo',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spReceiptNo', array('style'=> 'color:red;')); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td width="600" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Driver's Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Name:</td>
                            <td><?php echo $form->textField($model,'dpDrverName',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'dpDrverName', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's IC No.:</td>
                            <td><?php echo $form->textField($model,'dpDrverICno',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'dpDrverICno', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Occ.:</td>
                            <td><?php echo $form->textField($model,'dpDrverOcc',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'dpDrverOcc', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Date of Birth:</td>
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
                                        <?php $form->error($model, 'dpDateBirth', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />License Pass Date:</td>
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
                                <?php $form->error($model, 'dpDrverLcnsePass', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Marital Status:</td>
                            <td>
                                <?php
                                    echo $form->dropDownList($model,'dpDrverMarStat',array('0'=>'--- Choose Type ---','1'=>'Single','2'=>'Married',
                                                            '3'=>'Divorced'), 
                                                        array('options' => array('0'=>array('selected'=>true)),'class'=>'selectmenu')
                                                        );
                                ?>
                                <?php echo $form->error($model,'dpDrverMarStat', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Gender:</td>
                            <td><?php 
                                        
                                    echo $form->radioButtonList($model, 'dpGender',
                                    array(  1 => 'Male',
                                            2 => 'Female'),
                                    array( 'separator' => "")); // choose your own separator </td>

                                ?>
                                <?php $form->error($model, 'dpGender', array('style'=> 'color:red;')); ?>
                        </td>
                        </tr>
                    </table>
                </td>
                <td width="480" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>&nbsp;</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br />Relationship:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Nationality:</td>
                            <td>
                                <?php 
                                    echo $form->dropDownList($model,'dpNationality',array('0'=>'--- Choose Type ---','1'=>'Singaporean','2'=>'American',
                                                            '3'=>'Filipino'), 
                                                        array('options' => array('0'=>array('selected'=>true)),'class'=>'selectmenu')
                                                        );
                                   
                                    echo $form->error($model,'dpNationality', array('style'=> 'color:red;')); 

                                ?>
                                <?php $form->error($model, 'dpNationality', array('style'=> 'color:red;')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Wage:</td>
                            <td><?php echo $form->textField($model,'dpWage',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'dpWage', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br />Remarks:</td>
                            <td><?php echo $form->textArea($model, 'dpRemarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23, 'class'=>'textarea')); ?>
                                    <?php $form->error($model, 'dpRemarks', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Ref:</td>
                            <td><?php echo $form->textField($model,'dpRef',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'dpRef', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Month:</td>
                            <td>
                            <?php 
                                echo $form->dropDownList($model,'dpMonth',array('0'=>'--- Choose Type ---',
                                    '1'=>'January','2'=>'Febuary',
                                    '3'=>'March','4'=>'April',
                                    '5'=>'May','6'=>'June',
                                    '7'=>'July','8'=>'August',
                                    '9'=>'September','10'=>'October',
                                    '11'=>'November','12'=>'December'),
                                    array('options' => array('0'=>array('selected'=>true)), 'class'=>'selectmenu')
                                    );
                            ?>
                            <?php echo $form->error($model,'dpMonth', array('style'=> 'color:red;'));  ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 30px 40px 0 0">
                    <?php echo CHTML::imageButton(Yii::app()->request->baseUrl.'/images/btn_add2.png', array('style'=>'border:none')); ?>
                    
                    <a href="#"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_add2.png" /></div></a>
                    <a href="client_details2.html"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_upload.png" /></div></a>
                </td>
            </tr>
        </table>
    </div><!-- .wrapper -->    
    
    
 
    

<?php $this->endWidget(); ?>

</div><!-- form -->


   
    
