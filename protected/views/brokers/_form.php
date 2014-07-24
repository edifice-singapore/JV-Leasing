<?php
/* @var $this BrokersController */
/* @var $model Brokers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brokers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<script type="text/javascript">
	
$(function(){
	$("#BrokersCreate").hide();
	$("#BrokersCreate").dialog({
		modal: true,
	});
});

</script>



<div class="clear" style="height:15px"></div>
    <div class="wrapper">
        <div class="clear"></div>
    
        <h3>Add <span style="color:#254078">New Broker</span></h3>
        <br />
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="600" style="padding: 10px 20px;">
                    <table cellpadding="0" cellspacing="0" style="width: 60%;" class="form">
                        <tr>
                            <td colspan="2">                        
					        	<table cellpadding="0" cellspacing="0" style="font-size:15px;">
						            <tr>
						                <td width="600" style="padding: 10px 20px;">Name:</td>
						                <td style="width:200px;">&nbsp;</td>
						                <td><?php echo $form->textField($model,'brokers_name',array('size'=>60,'maxlength'=>255)); ?>
											<?php echo $form->error($model,'brokers_name'); ?>
										</td>
						            </tr>
						            
						            <tr>
						                <td>% of Commission:</td>
						                <td>&nbsp;</td>
						                <td><?php echo $form->textField($model,'brokers_commission'); ?>
											<?php echo $form->error($model,'brokers_commission'); ?>
										</td>
						            </tr>
						            
						            <tr>
						                <td>Mailing Address:</td>
						                <td>&nbsp;</td>
						                <td><?php echo $form->textArea($model,'brokers_address', array('maxlength' => 300, 'rows' => 6, 'cols' => 23, 'class' => 'textarea')); ?>
						                 	
											<?php echo $form->error($model,'brokers_address'); ?>
										</td>
						            </tr>
						            
						            <tr>
						                <td>Contact No.:</td>
						                <td>&nbsp;</td>
						                <td><?php echo $form->textField($model,'brokers_contact',array('size'=>60,'maxlength'=>255)); ?>
											<?php echo $form->error($model,'brokers_contact'); ?>
										</td>
						            </tr>
						            
						            <tr>
						                <td>Email:</td>
						                <td >&nbsp;</td>
						                <td>
						                	<?php echo $form->textField($model,'brokers_email',array('size'=>60,'maxlength'=>255)); ?>
											<?php echo $form->error($model,'brokers_email'); ?>
						                </td>
						            </tr>
						            
						            <tr>
						                <td colspan="2">
						                	<div class="row buttons">
												<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
											</div>
						                    <a href="#">
						                    	<div class="btn">
						                    		<img src="images/btn_add2.png" />
						                    	</div>
						                    </a>
						                    <a href="#" style="position: relative; top: 0; right: 0"><div class="btn"><img src="images/btn_cnl.png" /></div></a>
						                </td>
						            </tr>
					        	</table>
					        </td>
					    </tr>
					</table>
				</td>
			</tr>
		</table>
   
<?php $this->endWidget(); ?>

</div><!-- form -->