<div class="row">
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id'); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nick'); ?>
		<?php echo $form->textField($model,'nick',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nick'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postalcode'); ?>
		<?php echo $form->textField($model,'postalcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'postalcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nric'); ?>
		<?php echo $form->textField($model,'nric',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nric'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'res_tel'); ?>
		<?php echo $form->textField($model,'res_tel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'res_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ofc_tel'); ?>
		<?php echo $form->textField($model,'ofc_tel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ofc_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designation'); ?>
		<?php echo $form->textField($model,'designation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'designation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drvlicense_passdate'); ?>
		<?php echo $form->textField($model,'drvlicense_passdate'); ?>
		<?php echo $form->error($model,'drvlicense_passdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>











	//////////// Drivers Particular

	<td width="600" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 440px;" class="form">
                        <tr>
                            <td colspan="2"><h6>Driver's Particulars</h6></td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Name:</td>
                            <td><?php echo $form->textField($model,'dpDrverName',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'dpDrverName'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's IC No.:</td>
                            <td><?php echo $form->textField($model,'dpDrverICno',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'dpDrverICno'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Occ.:</td>
                            <td><?php echo $form->textField($model,'dpDrverOcc',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'dpDrverOcc'); ?>
                            </td>
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
								<?php $form->error($model, 'dpDateBirth'); ?>
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
								<?php $form->error($model, 'dpDrverLcnsePass'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Driver's <br />Marital Status:</td>
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
                            <td width="200">Driver's Gender:</td>
                            <td><?php 
								
                            	echo $form->radioButtonList($model, 'dpGender',
			                    array(  1 => 'Male',
			                            2 => 'Female'),
			                    array( 'separator' => "")); // choose your own separator </td>

		                    ?>
		                    <?php $form->error($model, 'dpGender'); ?>
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
	                                					array('options' => array('0'=>array('selected'=>true)))
	                                					);
	                               
									echo $form->error($model,'dpNationality'); 

								?>
								<?php $form->error($model, 'dpNationality'); ?>
                    		</td>
                        </tr>
                        <tr>
                            <td width="200">Driver's Wage:</td>
                            <td><?php echo $form->textField($model,'dpWage',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'dpWage'); ?>
							</td>
                        </tr>
                        <tr>
                            <td width="200">Driver's<br />Remarks:</td>
                            <td><?php echo $form->textArea($model, 'dpRemarks', array('maxlength' => 300, 'rows' => 6, 'cols' => 23)); ?>
                            	<?php $form->error($model, 'dpRemarks'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Ref:</td>
                            <td><?php echo $form->textField($model,'dpRef',array('size'=>30,'maxlength'=>100)); ?>
								<?php echo $form->error($model,'dpRef'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Month:</td>
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












//Grid

<?php
			      $this->widget('ext.jqgrid.JqGrid', array(
			       	id'=>'driverParticular',
                    
                    
                    

			       'options' => array(  'url'=>'create?q=1',
			       						'datatype' =>"json",
                                     	'colNames'=>array('ID','Name','IC No','OCC','Date of Birth','License Pass Date','Marital Status','Gender','Relationship','Nationality',
                                     		'Wage','Remarks','Referrence','Month'),

			        
								       
								       
								       'colModel' => array( array('name'=>'dp_id','index'=>'dp_id'),
                                                       		array('name'=>'dp_Name','index'=>'dp_Name','width'=>90),
                                                       		array('name'=>'dp_icno','index'=>'dp_icno','width'=>100),
                                                       		array('name'=>'dp_occ','index'=>'dp_occ','width'=>90),
                                                       		array('name'=>'dp_dateBirth','index'=>'dp_dateBirth','width'=>90),
                                                       		array('name'=>'dp_licPassDate','index'=>'dp_licPassDate','width'=>90),
                                                       		array('name'=>'dp_maritalStatus','index'=>'dp_maritalStatus','width'=>90),
                                                       		array('name'=>'dp_gender','index'=>'dp_gender','width'=>90),
                                                       		array('name'=>'dp_relationship','index'=>'dp_relationship','width'=>90),
                                                       		array('name'=>'dp_nationality','index'=>'dp_nationality','width'=>90),
                                                       		array('name'=>'dp_wage','index'=>'dp_wage','width'=>90),
                                                       		array('name'=>'dp_remarks','index'=>'dp_remarks','width'=>90),
                                                       		array('name'=>'dp_ref','index'=>'dp_ref','width'=>90),
                                                       		array('name'=>'dp_month','index'=>'dp_month','width'=>90),
								       			 	), 

			        					//'rowNum' => 5, 
			        					'rowList' => array(5,10,20),
								        'sortname' => 'id',  
								       	'pager' => '#pcustbut', 
								       	
								       	'viewrecords' => true, 
								       	'sortorder' => "desc", 

								       	'height' => '100px', 
								       	'width' => '200px',
								       	'caption' => 'Driver Particulars',

			        				)

			   ));
 
   
			
				//Yii::app()->clientScript->registerScript('cancelCreateInductionTemplate', $js, CClientScript::POS_READY);
			?>










<script type="text/javascript">
    	$(function () {
			$("#driverParticular").jqGrid({ 
	        	
	        	url:'create?q=1',
				datatype:"json",
				colNames:['ID','Name','IC No','OCC','Date of Birth','License Pass Date','Marital Status','Gender','Relationship','Nationality','Wage','Remarks','Referrence','Month'],
				colModel:[{name:'dp_id',index:'dp_id'},
				       		{name:'dp_Name',index:'dp_Name',width:90},
				       		{name:'dp_icno',index:'dp_icno',width:100},
				       		{name:'dp_occ',index:'dp_occ',width:90},
				       		{name:'dp_dateBirth',index:'dp_dateBirth',width:90},
				       		{name:'dp_licPassDate',index:'dp_licPassDate',width:90},
				       		{name:'dp_maritalStatus',index:'dp_maritalStatus',width:90},
				       		{name:'dp_gender',index:'dp_gender',width:90},
				       		{name:'dp_relationship',index:'dp_relationship',width:90},
				       		{name:'dp_nationality',index:'dp_nationality',width:90},
				       		{name:'dp_wage',index:'dp_wage',width:90},
				       		{name:'dp_remarks',index:'dp_remarks',width:90},
				       		{name:'dp_ref',index:'dp_ref',width:90},
				       		{name:'dp_month',index:'dp_month',width:90},
					 	], 
				rowNum:5, 
				rowList:[5,10,20],
				sortname:'id',  
				pager:'#pcustbut', 
				viewrecords:true, 
				sortorder:"desc", 
				caption:'Driver Particulars',


	        }),
    	});

    </script>







    $(function () {
			jQuery("#driverParticular").jqGrid({ 
	        	url:'create?q=1',
				datatype:"json",
				colNames:['ID','Name','IC No','OCC','Date of Birth','License Pass Date','Marital Status','Gender','Relationship','Nationality','Wage','Remarks','Referrence','Month'],
				colModel:[ {name:'dp_id',index:'dp_id'},
				       		{name:'dp_Name',index:'dp_Name',width:90},
				       		{name:'dp_icno',index:'dp_icno',width:100},
				       		{name:'dp_occ',index:'dp_occ',width:90},
				       		{name:'dp_dateBirth',index:'dp_dateBirth',width:90},
				       		{name:'dp_licPassDate',index:'dp_licPassDate',width:90},
				       		{name:'dp_maritalStatus',index:'dp_maritalStatus',width:90},
				       		{name:'dp_gender',index:'dp_gender',width:90},
				       		{name:'dp_relationship',index:'dp_relationship',width:90},
				       		{name:'dp_nationality',index:'dp_nationality',width:90},
				       		{name:'dp_wage',index:'dp_wage',width:90},
				       		{name:'dp_remarks',index:'dp_remarks',width:90},
				       		{name:'dp_ref',index:'dp_ref',width:90},
				       		{name:'dp_month',index:'dp_month',width:90},
					 	],
				pager: '#pager2',  
				rowNum:5, 
				rowList:[5,10,20],
				sortname:'id',  
				pager:'#pcustbut', 
				viewrecords:true, 
				sortorder:"desc", 
				caption:'Driver Particulars'	


	        }),

	jQuery("#driverParticular").jqGrid('navGrid','#pager2',{ edit:true, add:true, del:true});
	});























