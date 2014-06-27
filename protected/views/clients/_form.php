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

	

<?php $this->endWidget(); ?>

</div><!-- form -->


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
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Nickname:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Address:</td>
                            <td><textarea name="" cols="" rows="" class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td width="200">Postal Code:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">NRIC:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Date of Birth:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Nationality:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Residential Tel:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Office Tel:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Mobile:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Email:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Company Name:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Designation:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Driving License Pass Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
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
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Private Cars</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Vehicle Model:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Vehicle Type:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Engine Capacity:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Year Manufactured:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Registration Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Road Tax Expiry Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td>Car Plate:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                    </table>
                    <br />
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Previous Insurance</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Old Vehicle No.</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Insurance Co.:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">OLD NCD:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Expiry Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
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
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Cover Note No.:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Coverage Type:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Plan:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Gross Premium:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">NCD%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Excess:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Windscreen Amount:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Load Amount:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Personal Accident:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Extension:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Sur Charge:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Passenger Liab:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Other 1:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Other 2:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Other 3:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Loyalty Discount:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">No Claim Discount:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">NCD Protector:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Policy No.:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Commence Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Expiry Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Insurance Co.:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Terminate Date<br />(If Any):</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
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
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Annual Premium:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Discount<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Premium Due	:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">GST<input name="" type="text" value="7" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Misc Changes:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Total Due:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Comm 1:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Net To Underwriter:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Firm's Com<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Agent's Com<input name="" type="text" class="textfield" style="width: 30px; margin:-4px 2px 0 5px"/>%:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td>Earning:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Remarks:</td>
                            <td><textarea name="" cols="" rows="" class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td>Payment By:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Reciept No.<br />(auto generated):</td>
                            <td><input name="" type="text" class="textfield" /></td>
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
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's IC No.:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Occ.:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Date of Birth:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />License Pass Date:</td>
                            <td>
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" /> / 
                                <input name="" type="text" class="textfieldsmall" />
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Marital Status:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Gender:</td>
                            <td><form id="form1" name="form1" method="post" action="">
                                <label>
                                  <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" />
                                  Male</label>
                                
                                <label>
                                  <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" />
                                  Female</label>
                            </form></td>
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
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Wage:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br />Remarks:</td>
                            <td><textarea name="" cols="" rows="" class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td width="200">Ref:</td>
                            <td><input name="" type="text" class="textfield" /></td>
                        </tr>
                        <tr>
                            <td width="200">Month:</td>
                            <td>
                                <select name="" class="selectmenu">
                                    <option>Please Select</option>
                                    <option>January</option>
                                    <option>Febuary</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                    		</td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        </table>
    </div><!-- .wrapper -->    
    
