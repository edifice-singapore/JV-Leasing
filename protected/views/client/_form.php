<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>
<div class="form">

<?php 
    $c = 0;
    $form   = $this->beginWidget('CActiveForm', array('id'=>'client-form'));
   
?>

	

<?php echo $form->errorSummary($model); ?>


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
                                    'model' => $model,
                                    'attribute' => 'birthdate',
                                    'id'=>'birthdate',
                                    'value'=>date('yyyy/mm/dd'),    
                                    'options'=>array(
                                        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                        'showButtonPanel'=>false,
                                        'changeMonth'=>true,
                                        'changeYear'=>true,
                                        'showOtherMonths'=>true,// Show Other month in jquery
                                        'selectOtherMonths'=>true,// Select Other month in jquery
                                        'yearRange'=>'1920:2099',
                                        'dateFormat' => 'yy-mm-dd',
                                        
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
                                    echo $form->dropDownList($model,'nationality',array(
                                                            '1'=>'Singaporean',
                                                            '2'=>'American',
                                                            '3'=>'Filipino'), 
                                                        array('empty' => '--- Choose Nationality ----'),
                                                        array('options' => array('1'=>array('selected'=>true)), 
                                                                                    'class'=>'selectmenu')
                                                        );
                                                                 
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
                                    'model'=> $model,
                                    'attribute' => 'drvlicense_passdate',
                                    'id'=>'drvlicense_passdate',
                                    'value'=>date('yyyy/mm/dd'),    
                                    'options'=>array(
                                        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                        'showButtonPanel'=>false,
                                        'changeMonth'=>true,
                                        'changeYear'=>true,
                                        'showOtherMonths'=>true,// Show Other month in jquery
                                        'selectOtherMonths'=>true,// Select Other month in jquery
                                        'yearRange'=>'1920:2099',
                                        'dateFormat' => 'yy-mm-dd',
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
                                echo $form->dropDownList($model,'policy_id',array(
                                                        '1'=>'Policy 1',
                                                        '2'=>'Policy 2',
                                                        '3'=>'Policy 3'), 
                                                        array('empty' => '--- Choose Policy type ---'),
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
                                    'model' => $model,
                                    'attribute' => 'reg_date',
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
                                        'dateFormat' => 'yy-mm-dd',
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
                                    'model' => $model,
                                    'attribute' => 'roadTax_expDate',
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
                                        'dateFormat' => 'yy-mm-dd',
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
                                    'model' => $model,
                                    'attribute' => 'prevExpDate',
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
                                        'dateFormat' => 'yy-mm-dd', 
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
                                echo $form->dropDownList($model,'covCoverageType',array(
                                                        '1'=>'Coverage Type 1',
                                                        '2'=>'Coverage Type 2',
                                                        '3'=>'Coverage Type 3'), 
                                                        array('empty' => '-- Choose Coverage Type ---'),
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
                                echo $form->dropDownList($model,'covNCDProtectr',array(
                                                            '1'=>'NCD Protector 1',
                                                            '2'=>'NCD Protector 2',
                                                            '3'=>'NCD Protector 3'), 
                                                        array('empty' => '--- Choose a type ---'),
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
                                    'model' => $model,
                                    'attribute' => 'covCommDate',
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
                                        'dateFormat' => 'yy-mm-dd',
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
                                    'model' => $model,
                                    'attribute' => 'covExpDate',
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
                                        'dateFromat' => 'yy-mm-dd',
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
                                echo $form->dropDownList($model,'covInsurCo',array(
                                                            '1'=>'Insurance Option 1',
                                                            '2'=>'Insurance Option 2',
                                                            '3'=>'Insurance Option 3'), 
                                                        array('empty'=>'--- Choose Type ---'),
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
                                    'model' => $model,
                                    'attribute' => 'covTermDate',
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
                                        'dateFromat' => 'yy-mm-dd',
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
                            <td><?php 
                                    $list = CHtml::listData(Broker::model()->findAll(),'brokers_id', 'brokers_name');
                                    echo $form->dropDownList($model, 'spNameBroker',$list,array('empty'=>'-- Select Broker--'),array('options' => array('class'=>'selectmenu' )));
                     
                                ?>
                                <?php //echo $form->textField($model,'spNameBroker',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spNameBroker', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Annual Premium:</td>
                            <td><?php echo $form->textField($model,'spAnnualPrem',array('size'=>30,'maxlength'=>100, 'onchange'=>'compAnnPrem()','class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spAnnualPrem', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Discount
                                <?php echo $form->textField($model,'spDiscount',array('size'=>3,'maxlength'=>10, 'onchange'=>'compDisc();', 'onclick'=>'compDisc()')); ?> %:
                            </td>
                            <td><?php echo $form->textField($model,'spDiscountAmount',array('size'=>30,'maxlength'=>100, 'onchange'=>'compDiscAmount()', 'onclick'=>'compDiscAmount()','class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spDiscountAmount', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Premium Due :</td>
                            <td><?php echo $form->textField($model,'spPremDue',array('size'=>30,'maxlength'=>100, 'class'=>'textfield')); ?>
                                <?php echo $form->error($model,'spPremDue', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">GST<?php echo $form->textField($model,'spGST',array('size'=>2,'maxlength'=>5, 'onchange'=>'compGST();', 'onclick'=>'compGST()','class'=>'textField', 'style'=>'width: 30px; margin:-4px 2px 0 5px')); ?>
                                <?php echo $form->error($model,'spGST', array('style'=> 'color:red;')); ?>%:</td>
                            <td>
                                <?php echo $form->textField($model,'spGSTAmount',array('size'=>30,'maxlength'=>100, 'onchange'=>'compGSTAmount($(this).attr("id"));', 'onclick'=>'compGSTAmount()','class'=>'textField')); ?>
                            </td>
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
                                echo $form->dropDownList($model,'spPaymentBy',array(
                                                            '1'=>'Payment Option 1',
                                                            '2'=>'Payment Option 2',
                                                            '3'=>'Payment Option 3'), 
                                                        array('empty' => '-- Choose Payment --'),
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
            








<?php //$i = 0; ?>
            <tr>
                <td width="600" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Driver's Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Name:</td>
                            <td>
                                <?php echo $form->textField($DPmodel,"dp_Name[]",array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,"dp_Name", array('style'=> 'color:red;')); ?></td>

                        </tr>
                        <tr>
                            <td width="200">Driver's IC No.:</td>
                            <td><?php echo $form->textField($DPmodel,'dp_icno',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_icno', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Occ.:</td>
                            <td><?php echo $form->textField($DPmodel,'dp_occ',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_occ', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Date of Birth:</td>
                            <td>
                                
                                <?php echo $form->textField($DPmodel,'dp_dateBirth',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_dateBirth', array('style'=> 'color:red;')); ?></td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />License Pass Date:</td>
                            <td>
                                <?php echo $form->textField($DPmodel,'dp_licPassDate',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_licPassDate', array('style'=> 'color:red;')); ?></td>

                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Marital Status:</td>
                            <td>
                            <?php echo $form->textField($DPmodel,'dp_maritalStatus',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_maritalStatus', array('style'=> 'color:red;')); ?></td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Gender:</td>
                            <td><?php 
                                        
                                    echo $form->radioButtonList($DPmodel, 'dp_gender',
                                    array(  1 => 'Male',
                                            2 => 'Female'),
                                    array( 'separator' => "", 'disabled'=>'true')
                                     ); // choose your own separator </td>

                                ?>
                                <?php $form->error($DPmodel, 'dp_gender', array('style'=> 'color:red;')); ?>
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
                            <td><?php echo $form->textField($DPmodel,'dp_relationship',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true') ); ?>
                                <?php echo $form->error($DPmodel,'dp_relationship', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Nationality:</td>
                            <td>
                                <?php echo $form->textField($DPmodel,'dp_nationality',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true') ); ?>
                                <?php echo $form->error($DPmodel,'dp_nationality', array('style'=> 'color:red;')); ?></td>

                                
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Wage:</td>
                            <td><?php echo $form->textField($DPmodel,'dp_wage',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_wage', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br />Remarks:</td>
                            <td><?php echo $form->textArea($DPmodel, 'dp_remarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23, 'class'=>'textarea', 'readonly'=>'true')); ?>
                                    <?php $form->error($DPmodel, 'dp_remarks', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Ref:</td>
                            <td><?php echo $form->textField($DPmodel,'dp_ref',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_ref', array('style'=> 'color:red;')); ?></td>
                        </tr>
                        <tr>
                            <td width="200">Month:</td>
                            <td>
                                <?php echo $form->textField($DPmodel,'dp_month',array('size'=>30,'maxlength'=>100, 'class'=>'textfield', 'readonly'=>'true')); ?>
                                <?php echo $form->error($DPmodel,'dp_month', array('style'=> 'color:red;')); ?></td>
                            
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
                  
                    <a href="" onclick="return save()"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_createclient.png" /></div></a>
                </td>
            </tr>
            <tr>
                <td colspan="4"><input type="button" onclick="populate()" value="Fill text" /> </td>
               
            </tr>
        </table>
        <div id="dummy"></div>

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
    

 
    

<?php $this->endWidget(); ?>

</div><!-- form -->
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
              //$("#client-form").removeAttr('action');
              //$("#client-form").attr('action','/client/save');
              $("#driversParticularDialog" ).hide();
              $("#editDriverBtn").hide();
              $("#removeDriverBtn").hide();
              $("#Client_dpDrverICno").val('');
              $("#Client_dpDrverOcc").val('');
              //$("#Client_dpDateBirth").val('');
              //$("#Client_dpDrverLcnsePass").val('');
              $("#Client_dpDrverMarStat").val('');
              $("#Client_dpRelationship").val('');
              $("#Client_dpDrverMarStat").val('');
              $("#Client_dpNationality").val('');
              $("#Client_dpDrverMarStat").val('');
              $("#Client_dpWage").val('');
              $("#Client_dpRemarks").val('');
              $("#Client_dpRef").val('');
              $("#Client_dpMonth").val('');
              

              paginate(maxpage);
              
              
            });
            
            

            function formula()
            {

            }

            function compAnnPrem()
            {
                compDisc();
                compDiscAmount();
            }

            function compDisc()
            {
                var total = ($('#ClientForm_spDiscount').val() / 100)  * $('#ClientForm_spAnnualPrem').val();
                total = isNaN(total) ? 0 : total;
                $('#ClientForm_spDiscountAmount').val(total);
               

            }

            function compDiscAmount()
            {
                var total = ($('#ClientForm_spDiscountAmount').val() / $('#ClientForm_spAnnualPrem').val()) * 100;
                total = isNaN(total) ? 0 : total;
                $('#ClientForm_spDiscount').val(total);
            }

            function compGST()
            {
                
                    var total = ($('#ClientForm_spGST').val() / 100)  * $('#ClientForm_spAnnualPrem').val();
                    total = isNaN(total) ? 0 : total;
                    $('#ClientForm_spGSTAmount').val(total);
                

            }
            function compGSTAmount()
            {
                var total = ($('#ClientForm_spGSTAmount').val() / $('#ClientForm_spAnnualPrem').val()) * 100;
                total = isNaN(total) ? 0 : total;
                $('#ClientForm_spGST').val(total);
            }

            function paginate(p){
                $('.pagination').jqPagination({
                    max_page: p,
                    page_string: 'Record{current_page} of {max_page}',
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
                        

                        

                        
                         getDriverDetails(count);
                         paginate(count+1);
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
                $('#Client_dpDrverName').empty();
                
                $('#Client_dpDrverName').removeAttr('disabled');
                var b = 0;

                for (var a = 0; a < arrdpDrverName.length; a++) {
                                   
                    var selected = ""; 
                       
                                        
                    //selected = arrdpDrverName.length-1 == a ? 'selected' : '';
                    

                    $('#Client_dpDrverName').append('<option value='+b+'>'+arrdpDrverName[a]+'</option>');
                    
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
                $('#Client_dpDrverName').replaceWith('<input size="30" maxlength="100" class="textfield" id="Client_dpDrverName" type="text">');
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
                
                $('#Client_dpDrverName').replaceWith('<select onClick="alert(getval(this));" class="selectmenu" id="Client_dpDrverName"></select>');
                disableFields();
                
            }

            function setToDefault(){
                disableFields();
               

            }


            function getDriverDetails(p){
                
                arrNo = p;

                $('#DriverParticularForm_dp_Name').val(arrdpDrverName[arrNo]);
                
                $('#DriverParticularForm_dp_icno').val(arrdpDrverICno[arrNo]);
                $('#DriverParticularForm_dp_occ').val(arrdpDriverOcc[arrNo]);
                $('#DriverParticularForm_dp_dateBirth').val(arrdpDateBirth[arrNo]);
                $('#Driverparticular_dp_licPassDate').val(arrdpDrverLcnsePassDG[arrNo]);
                $('#DriverParticularForm_dp_maritalStatus').val(arrdpDrverMarStat[arrNo]);
                $('#DriverParticularForm_dp_gender').val('1');
                $('#DriverParticularForm_dp_relationship').val(arrdpRelationship[arrNo]);
                $('#DriverParticularForm_dp_nationality').val(arrdpNationality[arrNo]);
                $('#DriverParticularForm_dp_wage').val(arrdpWage[arrNo]);
                $('#DriverParticularForm_dp_remarks').val(arrdpRemarks[arrNo]);
                $('#DriverParticularForm_dp_ref').val(arrdpRef[arrNo]);
                $('#DriverParticularForm_dp_month').val(arrdpMonth[arrdpMonth]);
                
                //$("#DriverParticularForm_"+arrNo+"_dp_Name").val(arrdpDrverName[arrNo]);

                //$("#DriverParticularForm_"+arrNo+"_dp_Name").attr('id', "DriverParticularForm_"+count+"_dp_Name");
                //$("#DriverParticularForm_"+arrNo+"_dp_Name").attr('name', "DriverParticularForm["+count+"][dp_Name]").val(arrdpDrverName[arrNo]);
                        

                 
               

            }

            function enableFields(){
             $('#Client_dpDrverICno').removeAttr('readonly');
             $('#Client_dpDrverOcc').removeAttr('readonly');
             $('#Client_dpDateBirth').removeAttr('disabled');
             $('#Client_dpDrverLcnsePass').removeAttr('disabled');
             $('#Client_dpDrverMarStat').removeAttr('disabled');
             $('#Client_dpGender_0').removeAttr('disabled');
             $('#Client_dpGender_1').removeAttr('disabled');
             $('#Client_dpRelationship').removeAttr('read');
             $('#Client_dpNationality').removeAttr('disabled');
             $('#Client_dpWage').removeAttr('readonly');
             $('#Client_dpRemarks').removeAttr('readonly');
             $('#Client_dpRef').removeAttr('readonly');
             $('#Client_dpMonth').removeAttr('disabled');
            }

            function disableFields(){
              $('#Client_dpDrverICno').attr('readonly','true');
             $('#Client_dpDrverOcc').attr('readonly','true');
             $('#Client_dpDateBirth').attr('disabled','true');
             $('#Client_dpDrverLcnsePass').attr('disabled','true');
             $('#Client_dpDrverMarStat').attr('disabled','true');
             $('#Client_dpGender_0').attr('disabled','true');
             $('#Client_dpGender_1').attr('disabled','true');
             $('#Client_dpRelationship').attr('read','true');
             $('#Client_dpNationality').attr('disabled','true');
             $('#Client_dpWage').attr('readonly','true');
             $('#Client_dpRemarks').attr('readonly','true');
             $('#Client_dpRef').attr('readonly','true');
             $('#Client_dpMonth').attr('disabled','true');
              populateDrverName();
             

            }

            function save(){

                $('input,textarea','#client-form').removeClass('errorField');
                $('#client-form .inline-error').remove();
                // client validation
                error = false;
                


                if( error == false ){
                    
                    $("#dummy").html("");
                    for (var i = 0; i < arrdpDrverName.length; i++) {
                         $("#dummy").append('<input name="DriverParticularForm[dp_Name][]" id="DriverParticularForm_dp_Name" type="text" value="'+arrdpDrverName[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_icno][]" id="DriverParticularForm_dp_icno" type="text" value="'+arrdpDrverICno[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_occ][]" id="DriverParticularForm_dp_occ" type="text" value="'+arrdpDriverOcc[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_dateBirth][]" id="DriverParticularForm_dp_dateBirth" type="text" value="'+arrdpDateBirth[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_licPassDate][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpDrverLcnsePassDG[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_maritalStatus][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpDrverMarStat[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_gender][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpGender[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_relationship][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpRelationship[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_nationality][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpWage[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_wage][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpDrverLcnsePassDG[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_remarks][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpRemarks[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_ref][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpRef[i]+' " hidden="true"/>');
                         $("#dummy").append('<input name="DriverParticularForm[dp_month][]" id="DriverParticularForm_dp_licPassDate" type="text" value="'+arrdpMonth[i]+' " hidden="true"/>');



                     }; 
                                       
                    $.ajax({
                        url: app.baseUrl+'/index.php/client/save',
                        data: $('input,textarea,select','#client-form').serialize(),
                        type:'POST',
                        dataType:'json',
                        success: function(json){
                            if( json.success ){
                                alert('Successfully created');
                                window.location.href =  app.baseUrl + '/index.php/client/list';
                            }else if( typeof json.validation_errors != 'undefined' ){
                                $.each( json.validation_errors, function(i,e){
                                    $('#'+i ).addClass('errorField');
                                    $('<span class="inline-error">'+ e.join('<br/>') +'</span>').insertAfter('#'+i);
                                })
                            }
                        }
                    });
                }

                return false

            }



            function populate(){
                $('#ClientForm_name').val('Juan Dela Cruz');
                $('#ClientForm_nick').val('Juan').arrNo;
                $('#ClientForm_address').val('New York City United States');
                $('#ClientForm_postalcode').val('4056');
                $('#ClientForm_nric').val('12345-00');
                $('#birthdate').val('1935-08-23'); //datepicker('option','dateFormat','1935-08-23');
                $('#ClientForm_nationality').val('3');
                $('#ClientForm_res_tel').val('233-0993-00');
                $('#ClientForm_ofc_tel').val('2993-0004-0');
                $('#ClientForm_mobile').val('639059200121');
                $('#ClientForm_email').val('juandelacruz@gmail.com');
                $('#ClientForm_company').val('Car studio auto parts');
                $('#ClientForm_designation').val('Manager');
                $('#drvlicense_passdate').val('1977-12-28');
                $('#ClientForm_policy_id').val('3');
                $('#ClientForm_v_model').val('2009');
                $('#ClientForm_v_type').val('Sedan');
                $('#ClientForm_engine_cap').val('230 kgs');
                $('#ClientForm_yr_manufactured').val('2000');
                $('#reg_date').val('1999-02-15');
                $('#roadTax_expDate').val('1999-03-30');
                $('#ClientForm_carPlate').val('GXL-255');
                $('#ClientForm_oldVehcNo').val('PXR-233');
                $('#ClientForm_insuranceCo').val('DEADLY INSURANCE');
                $('#ClientForm_oldNCD').val('234-0293');
                $('#prevExpDate').val('2000-10-20');
                $('#ClientForm_covPolicyNo').val('12203049-00');
                $('#ClientForm_covCoverNoteNo').val('23344');
                $('#ClientForm_covCoverageType').val('3');
                $('#ClientForm_covPlan').val('Plan A');
                $('#ClientForm_covGrossPrem').val('5000');
                $('#ClientForm_covNCD').val('2');
                $('#ClientForm_covExcess').val('100');
                $('#ClientForm_covWindScrAmnt').val('200');
                $('#ClientForm_covLoadAmnt').val('300');
                $('#ClientForm_covPersonalAcc').val('300,000.00');
                $('#ClientForm_covExtension').val('23456-00');
                $('#ClientForm_covSurCharge').val('300');
                $('#ClientForm_covPassLiab').val('200');
                $('#ClientForm_covOther1').val('Dog');
                $('#ClientForm_covOther2').val('Mistress');
                $('#ClientForm_covOther3').val('Alien');
                $('#ClientForm_covLoyaltyDis').val('10');
                $('#ClientForm_covNoClaim').val('5');
                $('#ClientForm_covNCDProtectr').val('2');
                $('#covCommDate').val('2001-02-26');
                $('#covExpDate').val('2002-03-23');
                $('#ClientForm_covInsurCo').val('2');
                $('#covTermDate').val('2003-03-08');
                $('#ClientForm_spNameBroker').val('Henry');
                $('#ClientForm_spAnnualPrem').val('100,000.00');
                $('#ClientForm_spDiscount').val('2');
                $('#ClientForm_spPremDue').val('300');
                $('#ClientForm_spGST').val('100');
                $('#ClientForm_spMiscChanges').val('300');
                $('#ClientForm_spTotalDue').val('2,020.10');
                $('#ClientForm_spComm1').val('2001, 2002');
                $('#ClientForm_spNetUnderwriter').val('50');
                $('#ClientForm_spFirmComm').val('10');
                $('#ClientForm_spAgentComm').val('2');
                $('#ClientForm_spEarnings').val('2,000.00');
                $('#ClientForm_spRemarks').val('Nothing...');
                $('#ClientForm_spPaymentBy').val('3');
                $('#ClientForm_spReceiptNo').val('54321-2001');
                $('#ClientForm_dpDrverName').val('Dexter Sio');
                $('#ClientForm_dpDrverICno').val('233456-00');
                $('#ClientForm_dpDrverOcc').val('2334-009');
                $('#ClientForm_dpDateBirth').val('1978-12-18');
                $('#ClientForm_dpDrverLcnsePass').val('2008-09-14');
                $('#ClientForm_dpDrverMarStat').val('2');
                $('#ClientForm_dpGender').val('1');
                $('#ClientForm_dpRelationship').val('Relative');
                $('#ClientForm_dpNationality').val('2');
                $('#ClientForm_dpWage').val('2,000.00');
                $('#ClientForm_dpRemarks').val('Driver is very stuborn');
                $('#ClientForm_dpRef').val('Isyot Manlaki');
                $('#ClientForm_dpMonth').val('3');
            }
        
        </script>

