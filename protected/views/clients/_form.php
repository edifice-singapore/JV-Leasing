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
<<<<<<< HEAD
                                    echo $form->dropDownList($model,'nationality',array(
                                                        '0'=>'--- Choose Type ---',
                                                        '1'=>'Singaporean',
                                                        '2'=>'American',
                                                        '3'=>'Filipino' ), 
                                                        array('options' => array('0'=>array('selected'=>true)), 
                                                        'class'=>'selectmenu')
                                                        );
                                                                
                                ?>
                                <?php echo $form->error($model,'nationality', array('style'=> 'color:red;')); ?>

=======
                                    echo $form->dropDownList($model,'nationality',array('0'=>'--- Choose Type ---','1'=>'Singaporean','2'=>'American',
                                                            '3'=>'Filipino'), 
                                                        array('options' => array('0'=>array('selected'=>true)), 'class'=>'selectmenu')
                                                        );
                                   // echo $form->textField($model,'nationality',array('size'=>30,'maxlength'=>30));                                
                                ?>
                                <?php echo $form->error($model,'nationality', array('style'=> 'color:red;')); ?>
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
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
                            <td>
                                <?php echo $form->textField($model,'dpDrverName',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpDrverName', array('style'=> 'color:red;')); ?></td>

                        </tr>
                        <tr>
                            <td width="200">Driver's IC No.:</td>
                            <td><?php echo $form->textField($model,'dpDrverICno',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpDrverICno', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Occ.:</td>
                            <td><?php echo $form->textField($model,'dpDrverOcc',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpDrverOcc', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Date of Birth:</td>
                            <td>
                                
                                <?php echo $form->textField($model,'dpDateBirth',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpDateBirth', array('style'=> 'color:red;')); ?></td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />License Pass Date:</td>
                            <td>
                                <?php echo $form->textField($model,'dpDrverLcnsePass',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpDrverLcnsePass', array('style'=> 'color:red;')); ?></td>

                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Marital Status:</td>
                            <td>
                            <?php echo $form->textField($model,'dpDrverMarStat',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpDrverMarStat', array('style'=> 'color:red;')); ?></td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Gender:</td>
                            <td><?php 
                                        
                                    echo $form->radioButtonList($model, 'dpGender',
                                    array(  1 => 'Male',
                                            2 => 'Female'),
                                    array( 'separator' => "", 'disabled'=>'true')
                                     ); // choose your own separator </td>

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
                            <td><?php echo $form->textField($model,'dpRelationship',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true') ); ?>
                                <?php echo $form->error($model,'dpRelationship', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Nationality:</td>
                            <td>
                                <?php echo $form->textField($model,'dpNationality',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true') ); ?>
                                <?php echo $form->error($model,'dpNationality', array('style'=> 'color:red;')); ?></td>

                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Wage:</td>
                            <td><?php echo $form->textField($model,'dpWage',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpWage', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br />Remarks:</td>
                            <td><?php echo $form->textArea($model, 'dpRemarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23, 'class'=>'textarea', 'readonly'=>'true')); ?>
                                    <?php $form->error($model, 'dpRemarks', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Ref:</td>
                            <td><?php echo $form->textField($model,'dpRef',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpRef', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Month:</td>
                            <td>
                                <?php echo $form->textField($model,'dpMonth',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($model,'dpMonth', array('style'=> 'color:red;')); ?></td>
                            
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 40px 0 0">
                    
                <img id="addDriverBtn" src="<?php echo Yii::app()->request->baseUrl.'/images/btn_add2.png'; ?>" style="cursor: pointer" onClick="addDrivers()" />

                <img id="editDriverBtn" src="<?php echo Yii::app()->request->baseUrl.'/images/btn_edit.png'; ?>" style="cursor: pointer" onClick="editDrivers()" />    
                     
                <img id="removeDriverBtn" src="<?php echo Yii::app()->request->baseUrl.'/images/btn_remove.png'; ?>" style="cursor: pointer" onClick="removeDrivers()" />    
                
                </td>

                <td style="padding: 30px 40px 0 0" >
                   
                  <div class="pagination" style="alignment: right;">
                    <a href="#" class="first" data-action="first">&laquo;</a>
                    <a href="#" class="previous" data-action="previous">&lsaquo;</a>
                    <input type="text" readonly="readonly" data-max-page="40" />
                    <a href="#" class="next" data-action="next">&rsaquo;</a>
                    <a href="#" class="last" data-action="last">&raquo;</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
             <tr>
                <td>&nbsp;</td>
            </tr>
             <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
<<<<<<< HEAD
                  
                    <a href=""><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_createclient.png" /></div></a>
=======
                  <!--  <a href="#"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_add2.png" /></div></a> ---->
                    <a href="create?s=a"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_createclient.png" /></div></a>
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
                </td>
            </tr>
            
        </table>

    </div><!-- .wrapper -->    





    
<!-- Driver's Dialog Box   ---->
    <div id="driversParticularDialog">
        
            <table>
            <tr>
                <td>
                    <table style="width: 440px;" class="form" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td colspan="2"><h6>Driver's Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Name:</td>
                            <td>
                                <input size="30" maxlength="100" class="textfield" id="DGdpDrverName" type="text">
                                <p class="DGdpDrverName"></p>
                            </td></tr>
                        <tr>
                            <td width="200">Driver's IC No.:</td>
                            <td>
                                <input size="30" maxlength="100" class="textfield" id="DGdpDrverICno" type="text">
                                <p class="DGdpDrverICno"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Occ.:</td>
                            <td>
                                <input size="30" maxlength="100" class="textfield" id="DGdpDrverOcc" type="text">
                                <p class="DGdpDrverOcc"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br>Date of Birth:</td>
                            <td>
                                <?php
                                        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                            'name'=>'dpDateofBirthDG',
                                            'id'=>'dpDateBirthDG',
                                            
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
                                                'style'=>'',
                                                
                                            ),
                                        ));
                                        ?>
                                        <p class="dpDateBirthDG"></p>                                                                
                                </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br>License Pass Date:</td>
                            <td>
                                <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                        'name'=>'dpLicensePassDateDG',
                                        'id'=>'dpDrverLcnsePassDG',
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
                                            'style'=>'',
                                            
                                        ),
                                    ));
                                ?>
                                <p class="dpDrverLcnsePassDG"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br>Marital Status:</td>
                            <td>
                                <select class="selectmenu" id="DGdpDrverMarStat">
                                <option value="0" selected="selected">--- Choose Type ---</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Divorced</option>
                                </select> 
                                <p class="DGdpDrverMarStat"></p>                                                          
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Gender:</td>
                            <td>
                                <input id="DGdpGender" value="" type="hidden">
                                
                                    <input value="1" type="radio" name="DGgender" checked="true">
                                    <label>Male</label> 
                                    <input value="2" type="radio" name="DGgender">
                                    <label>Female</label>
                                </span> 
                                <p class="DGdpGender"></p>                                                       
                            </td>
                        </tr>
                    </tbody></table>
                </td>
                <td style="padding: 10px 20px;" width="480">
                    <table style="width: 440px;" class="form" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td colspan="2"><h6>&nbsp;</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br>Relationship:</td>
                            <td>
                                <input size="30" maxlength="100" class="textfield" id="DGdpRelationship" type="text">
                                <p class="DGdpRelationship"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br>Nationality:</td>
                            <td>
                                <select class="selectmenu" id="DGdpNationality">
                                <option value="0" selected="selected">--- Choose Type ---</option>
                                <option value="1">Singaporean</option>
                                <option value="2">American</option>
                                <option value="3">Filipino</option>
                                </select>
                                <p class="DGdpNationality"></p>                                                            
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Wage:</td>
                            <td>
                                <input size="30" maxlength="100" class="textfield" id="DGdpWage" type="text">
                                <p class="DGdpWage"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br>Remarks:</td>
                            <td>
                                <textarea maxlength="300" rows="6" cols="23" class="textarea" id="DGdpRemarks"></textarea>
                                <p class="DGdpRemarks"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Ref:</td>
                            <td>
                                <input size="30" maxlength="100" class="textfield" id="DGdpRef" type="text">
                                <p class="DGdpRef"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Month:</td>
                            <td>
                            <select class="selectmenu" id="DGdpMonth">
                                <option value="0" selected="selected">--- Choose Type ---</option>
                                <option value="1">January</option>
                                <option value="2">Febuary</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select> 
                            <p class="DGdpMonth"></p>                                                       
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            </table>
                
            
    </div>

<!-- End of Driver's Dialog   ---->
    

 <!--- Driver's Particular ---->
<?php  
    $baseUrl = Yii::app()->baseUrl; 
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/jquery.jqpagination.js');
?>
    <script type="text/javascript">


            var objFields = new Array();
            objFields=['dpDrverName','dpDrverICno'];
            var arrdpDrverName = new Array();
            var arrdpDrverICno = new Array();
            var arrdpDriverOcc = new Array();
            var arrdpDateBirth = new Array();
            var arrdpDrverLcnsePassDG = new Array();
            var arrdpDrverMarStat = new Array();
            var arrdpGender = new Array();
            var arrdpRelationship = new Array();
            var arrdpNationality = new Array();
            var arrdpWage = new Array();
            var arrdpRemarks = new Array();
            var arrdpRef = new Array();
            var arrdpMonth = new Array();
            
            var count = 0;
            var records = new Array(objFields.length);


            $(function() {
              var maxpage = arrdpDrverName.length > 0 ? arrdpDrverName.length : 0;  
              //clear all fields, set all defaults
              $( "#driversParticularDialog" ).hide();
              $("#editDriverBtn").hide();
              $("#removeDriverBtn").hide();
              $("#Clients_dpDrverICno").val('');
              $("#Clients_dpDrverOcc").val('');
              //$("#Clients_dpDateBirth").val('');
              //$("#Clients_dpDrverLcnsePass").val('');
              $("#Clients_dpDrverMarStat").val('');
              $("#Clients_dpRelationship").val('');
              $("#Clients_dpDrverMarStat").val('');
              $("#Clients_dpNationality").val('');
              $("#Clients_dpDrverMarStat").val('');
              $("#Clients_dpWage").val('');
              $("#Clients_dpRemarks").val('');
              $("#Clients_dpRef").val('');
              $("#Clients_dpMonth").val('');
              

              paginate(maxpage);
              
              
            });


            function paginate(p){
                $('.pagination').jqPagination({
                    max_page: p,
                    page_string: 'Record   {current_page} of {max_page}',
                    paged: function(page) {
                       getDriverDetails(page-1);
                    },
                    current_page: p,

                });
            }

             function updateTips( n,t ) {
                n.addClass( "ui-state-highlight" );
               // n.next().text(t).addClass("ui-statge-highlight");
                
                setTimeout(function() {
                    n.removeClass( "ui-state-highlight", 500 );
                   // n.next().removeClass( "ui-state-highlight", 500 );
                }, 500 );
            }

             function checkLength( o, n, min, max ) {
                if ( o.val().length > max || o.val().length < min ) {
                    o.addClass( "ui-state-error" );
                    updateTips( o, "Length of " + n + " must be between " +
                    min + " and " + max + "." );
                    return false;
                } else {
                    return true;
                }
            }


            function countInObject(obj) {
                var count = 0;
                // iterate over properties, increment if a non-prototype property
                for(var key in obj) if(obj.hasOwnProperty(key)) count++;
                return count;
            }


            function saveDrivers(m){
                
                var valid = true;
                var mode = m;

                DGdpDrverName = $("#DGdpDrverName"),
                DGdpDrverICno = $("#DGdpDrverICno"),
                dgDriverOcc = $("#DGdpDrverOcc"),
                dgDateBirth = $("#dpDateBirthDG"),
                dpDrverLcnsePassDG = $("#dpDrverLcnsePassDG"),
                DGdpDrverMarStat = $("#DGdpDrverMarStat"),
                DGdpGender = $("#DGdpGender");
                DGdpRelationship = $("#DGdpRelationship"),
                DGdpNationality = $("#DGdpNationality"),
                DGdpWage = $("#DGdpWage"),
                DGdpRemarks = $("#DGdpRemarks"),
                DGdpRef = $("#DGdpRef"),
                DGdpMonth = $("#DGdpMonth"),
                
                allFields = $( [] ).add(DGdpDrverName).add(DGdpDrverICno).add(dgDriverOcc).add(dgDateBirth).add(dpDrverLcnsePassDG).add(DGdpDrverMarStat).add(DGdpGender).add(DGdpRelationship).add(DGdpNationality).add(DGdpWage).add(DGdpRemarks).add(DGdpRef).add(DGdpMonth);
                allFields.removeClass( "ui-state-error" );



                valid = valid && checkLength(DGdpDrverName, "Driver Name", 1, 100);
                valid = valid && checkLength(DGdpDrverICno, "Driver IC No.", 1, 50);
                valid = valid && checkLength(dgDriverOcc, "Driver OCC No.", 1, 50);
                valid = valid && checkLength(dgDateBirth, "Driver Birth date", 1, 50);
                valid = valid && checkLength(dpDrverLcnsePassDG, "Driver License pass date", 1, 50);
                valid = valid && checkLength(DGdpDrverMarStat, "Driver Marital status", 1, 50);
                //valid = valid && checkLength(DGdpGender, "Driver Gender", 1, 10);
                valid = valid && checkLength(DGdpRelationship, "Driver relationship", 1, 50);
                valid = valid && checkLength(DGdpNationality, "Driver nationality", 1, 50);
                valid = valid && checkLength(DGdpWage, "Driver wage", 1, 50);
                valid = valid && checkLength(DGdpRemarks, "Driver remarks", 1, 50);
                valid = valid && checkLength(DGdpRef, "Driver ref", 1, 50);
                valid = valid && checkLength(DGdpMonth, "Driver month", 1, 50);

                
               
                if( valid ){
                    

                    if (mode == 'add'){
                        arrdpDrverName[count] = $("#DGdpDrverName").val();
                        arrdpDrverICno[count] = $("#DGdpDrverICno").val();
                        arrdpDriverOcc[count] = $("#DGdpDrverOcc").val();
                        arrdpDateBirth[count] = $("#dpDateBirthDG").val();
                        arrdpDrverLcnsePassDG[count] = $("#dpDrverLcnsePassDG").val();
                        arrdpDrverMarStat[count] = $("#DGdpDrverMarStat").val();
                        arrdpGender[count] = $("#DGdpGender").val();
                        arrdpRelationship[count] = $("#DGdpRelationship").val();
                        arrdpNationality[count] = $("#DGdpNationality").val();
                        arrdpWage[count] = $("#DGdpWage").val();
                        arrdpRemarks[count] = $("#DGdpRemarks").val();
                        arrdpRef[count] = $("#DGdpRef").val();
                        arrdpMonth[count] = $("#DGdpMonth").val();
                         paginate(count+1);
                         getDriverDetails(count);
                         count++;
                    }
                    if(mode == 'edit'){
                        arrdpDrverName[arrNo] = $("#DGdpDrverName").val();
                        arrdpDrverICno[arrNo] = $("#DGdpDrverICno").val();
                        arrdpDriverOcc[arrNo] = $("#DGdpDrverOcc").val();
                        arrdpDateBirth[arrNo] = $("#dpDateBirthDG").val();
                        arrdpDrverLcnsePassDG[arrNo] = $("#dpDrverLcnsePassDG").val();
                        arrdpDrverMarStat[arrNo] = $("#DGdpDrverMarStat").val();
                        arrdpGender[arrNo] = $("#DGdpGender").val();
                        arrdpRelationship[arrNo] = $("#DGdpRelationship").val();
                        arrdpNationality[arrNo] = $("#DGdpNationality").val();
                        arrdpWage[arrNo] = $("#DGdpWage").val();
                        arrdpRemarks[arrNo] = $("#DGdpRemarks").val();
                        arrdpRef[arrNo] = $("#DGdpRef").val();
                        arrdpMonth[arrNo] = $("#DGdpMonth").val();
                        getDriverDetails(arrNo);
                    }

                    $("#driversParticularDialog").dialog("close");
                    $("#editDriverBtn").show();
                    $("#removeDriverBtn").show();

                }
                
               
                   
               return valid;
                   
            }
        
            function saveEditedDrivers(){
                saveDrivers('edit');
            }


            function populateDrverName(){
                $('#Clients_dpDrverName').empty();
                
                $('#Clients_dpDrverName').removeAttr('disabled');
                var b = 0;

                for (var a = 0; a < arrdpDrverName.length; a++) {
                                   
                    var selected = ""; 
                       
                                        
                    //selected = arrdpDrverName.length-1 == a ? 'selected' : '';
                    

                    $('#Clients_dpDrverName').append('<option value='+b+'>'+arrdpDrverName[a]+'</option>');
                    
                    b++;
                    
                }
            }

            function addDrivers(){
                
                 $( "#driversParticularDialog" ).dialog( {
                    modal: true,
                    width: "80%",
                    draggable: false,
                    resizable: false,
                    dialogClass: 'ui-dialog-osx',
                    buttons: {
                        Save: function() {
                                saveDrivers('add');
                               
                            },
                        Cancel: function(){
                            $(this).dialog("close");
                        }
                    },
                    open: 
                        function(){
                            $('#DGdpDrverName').val('');
                            $('#DGdpDrverICno').val('');
                            $('#DGdpDrverOcc').val('');
                            $('#dpDateBirthDG').val('');
                            $('#dpDrverLcnsePassDG').val('');
                            $('#DGdpDrverMarStat').val('');
                            $('#DGdpRelationship').val('');
                            $('#DGdpWage').val('');
                            $('#DGdpRemarks').val('');
                            $('#DGdpRef').val('');
                            $('#DGdpMonth').val('');

                        }


                });
                            
            }

            function editDrivers(){
                
                $( "#driversParticularDialog" ).dialog( {
                    modal: true,
                    width: "80%",
                    draggable: false,
                    resizable: false,
                    dialogClass: 'ui-dialog-osx',
                    buttons: {
                        Save: function() {
                                saveEditedDrivers();
                               
                            },
                        Cancel: function(){
                            $(this).dialog("close");
                        }
                    },
                    open: 
                        function(){
                            //alert(arrdpDrverName).index());

                            $('#DGdpDrverName').val(arrdpDrverName[arrNo]);
                            $('#DGdpDrverICno').val(arrdpDrverICno[arrNo]);
                            $('#DGdpDrverOcc').val(arrdpDriverOcc[arrNo]);
                            $('#dpDateBirthDG').val(arrdpDateBirth[arrNo]);
                            $('#dpDrverLcnsePassDG').val(arrdpDrverLcnsePassDG[arrNo]);
                            $('#DGdpDrverMarStat').val(arrdpDrverMarStat[arrNo]);
                            $('#DGdpRelationship').val(arrdpRelationship[arrNo]);
                            $('#DGdpWage').val(arrdpWage[arrNo]);
                            $('#DGdpRemarks').val(arrdpRemarks[arrNo]);
                            $('#DGdpRef').val(arrdpRef[arrNo]);
                            $('#DGdpMonth').val(arrdpMonth[arrNo]);

                        }


                });

            }

      


            function editDriver(){
                $('#addDriverBtn').attr("id","SaveDriverBtn");
                $('#SaveDriverBtn').attr("src","<?php echo Yii::app()->request->baseUrl; ?>/images/btn_save.png");
                $('#SaveDriverBtn').attr("onClick","saveDrivers('add')");
                $('#editDriverBtn').attr("id","cancelDriverBtn");
                $('#cancelDriverBtn').attr("src","<?php echo Yii::app()->request->baseUrl; ?>/images/btn_cnl.png");
                $('#cancelDriverBtn').attr("onClick","cancelBtn()")
                $('#Clients_dpDrverName').replaceWith('<input size="30" maxlength="100" class="textfield" id="Clients_dpDrverName" type="text">');
                enableFields(); 
                 


            }      

            function removeDrivers(){
                if(count > 0){
                    arrdpDrverName.splice(0,1);
                    arrdpDrverICno.splice(0,1);
                    arrdpDriverOcc.splice(0,1);
                    arrdpDateBirth.splice(0,1);
                    arrdpDrverLcnsePassDG.splice(0,1);
                    arrdpDrverMarStat.splice(0,1);
                    arrdpGender.splice(0,1);
                    arrdpRelationship.splice(0,1);
                    arrdpNationality.splice(0,1);
                    arrdpWage.splice(0,1);
                    arrdpRemarks.splice(0,1);
                    arrdpRef.splice(0,1);
                    arrdpMonth.splice(0,1);
                   
                    count--;
                    
                    paginate(count);
                    getDriverDetails(count-1);
                   
                }
                if(count == 0){
                    paginate(0);
                    $("#removeDriverBtn").hide();
                    $("#editDriverBtn").hide();
                }


            }                  
            
            function cancelBtn(){
                $('#SaveDriverBtn').attr("id","addDriverBtn");
                $('#addDriverBtn').attr("src","<?php echo Yii::app()->request->baseUrl; ?>/images/btn_add2.png");
                $('#addDriverBtn').attr("onClick","addDrivers()")
                $('#cancelDriverBtn').attr("id","editDriverBtn");
                $('#editDriverBtn').attr("src","<?php echo Yii::app()->request->baseUrl; ?>/images/btn_edit.png");
                $('#editDriverBtn').attr("onClick","editDriver()");
                
                $('#Clients_dpDrverName').replaceWith('<select onClick="alert(getval(this));" class="selectmenu" id="Clients_dpDrverName"></select>');
                disableFields();
                
            }

            function setToDefault(){
                disableFields();
               

            }


            function getDriverDetails(p){
                arrNo = p;
                $('#Clients_dpDrverName').val(arrdpDrverName[arrNo]);
                $('#Clients_dpDrverICno').val(arrdpDrverICno[arrNo]);
                $('#Clients_dpDrverOcc').val(arrdpDriverOcc[arrNo]);
                $('#Clients_dpDateBirth').val(arrdpDateBirth[arrNo]);
                $('#Clients_dpDrverLcnsePass').val(arrdpDrverLcnsePassDG[arrNo]);
                $('#Clients_dpDrverMarStat').val(arrdpDrverMarStat[arrNo]);
                $('#Clients_dpRelationship').val(arrdpRelationship[arrNo]);
                $('#Clients_dpNationality').val(arrdpNationality[arrNo]);
                $('#Clients_dpWage').val(arrdpWage[arrNo]);
                $('#Clients_dpRemarks').val(arrdpRemarks[arrNo]);
                $('#Clients_dpRef').val(arrdpRef[arrNo]);
                $('#Clients_dpMonth').val(arrdpMonth[arrdpMonth]);

            }

            function enableFields(){
             $('#Clients_dpDrverICno').removeAttr('readonly');
             $('#Clients_dpDrverOcc').removeAttr('readonly');
             $('#Clients_dpDateBirth').removeAttr('disabled');
             $('#Clients_dpDrverLcnsePass').removeAttr('disabled');
             $('#Clients_dpDrverMarStat').removeAttr('disabled');
             $('#Clients_dpGender_0').removeAttr('disabled');
             $('#Clients_dpGender_1').removeAttr('disabled');
             $('#Clients_dpRelationship').removeAttr('read');
             $('#Clients_dpNationality').removeAttr('disabled');
             $('#Clients_dpWage').removeAttr('readonly');
             $('#Clients_dpRemarks').removeAttr('readonly');
             $('#Clients_dpRef').removeAttr('readonly');
             $('#Clients_dpMonth').removeAttr('disabled');
            }

            function disableFields(){
              $('#Clients_dpDrverICno').attr('readonly','true');
             $('#Clients_dpDrverOcc').attr('readonly','true');
             $('#Clients_dpDateBirth').attr('disabled','true');
             $('#Clients_dpDrverLcnsePass').attr('disabled','true');
             $('#Clients_dpDrverMarStat').attr('disabled','true');
             $('#Clients_dpGender_0').attr('disabled','true');
             $('#Clients_dpGender_1').attr('disabled','true');
             $('#Clients_dpRelationship').attr('read','true');
             $('#Clients_dpNationality').attr('disabled','true');
             $('#Clients_dpWage').attr('readonly','true');
             $('#Clients_dpRemarks').attr('readonly','true');
             $('#Clients_dpRef').attr('readonly','true');
             $('#Clients_dpMonth').attr('disabled','true');
              populateDrverName();
             

            }


        
        </script>


    

<?php $this->endWidget(); ?>

</div><!-- form -->
<<<<<<< HEAD
<div id="addnewbroker" class="reveal-modal">
            <div style="background-color: #eeeeee; margin-top: 3px;padding: 10px 20px;"><h5>Add  <span style="color:#254078">New Broker</span></h5></div>
            <div style="width: 450px;margin: 30px auto 50px;">
                <table cellpadding="0" cellspacing="0" style="font-size:15px;">
                <tr>
                    <td width="200px">Name:</td>
                    <td><input name="" type="text" class="textfield" /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>% of Commission:</td>
                    <td><input name="" type="text" class="textfield" /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>Mailing Address:</td>
                    <td><textarea name="" cols="" rows="" class="textarea"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>Contact No.:</td>
                    <td><input name="" type="text" class="textfield" /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="" type="text" class="textfield" /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="#"><div class="btn"><img src="images/btn_add2.png" /></div></a>
                        <a href="#" class="big-link close-reveal-modal" style="position: relative; top: 0; right: 0"><div class="btn"><img src="images/btn_cnl.png" /></div></a>
                    </td>
                </tr>
            </table>
            </div>
            <a class="close-reveal-modal">&#215;</a>
        </div>
=======

>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46

   
    
