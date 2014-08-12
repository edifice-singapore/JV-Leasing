
<div id="<?php echo $action ?>-broker" class="reveal-modal">
<div style="background-color: #eeeeee; margin-top: 3px;padding: 10px 20px;">

<?php if( $action == 'add' ){ ?>
<h5>Add  <span style="color:#254078">New Broker</span></h5>
<?php }else{ ?>
<h5>Edit  <span style="color:#254078">Broker</span></h5>
<?php } ?>

</div>
<div style="width: 450px;margin: 30px auto 50px;">

<?php
$form  =  $this->beginWidget('CActiveForm', array(
        'id'=> $action.'-broker-form'
    ));
?>
    <table cellpadding="0" cellspacing="0" style="font-size:15px;">
    <tr>
        <td width="200px">Name:</td>
        <td>
                <?php echo $form->textField($model,'name', array('class'=>'textfield','data-label'=>'Name','data-rules'=>'required')) ?>

                </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>% of Commission:</td>
        <td>
                <?php echo $form->textField($model,'commission', array('class'=>'textfield','data-label'=>'Commission','data-rules'=>'required')) ?>
 </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>Mailing Address:</td>
        <td>
    <?php echo $form->textArea($model,'address', array('class'=>'textfield','data-label'=>'Address','data-rules'=>'required')) ?>

        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>Contact No.:</td>
        <td>

    <?php echo $form->textField($model,'contact', array('class'=>'textfield','data-label'=>'Contact','data-rules'=>'required')) ?>

    </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>

    <?php echo $form->textField($model,'email', array('class'=>'textfield','data-label'=>'Email','data-rules'=>'required')) ?>

    </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">

    <?php if( $action == 'add' ){ ?>
    <a href="#" onclick="return createBroker()"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_add2.png" /></div></a>
    <?php }else{ ?>
    <a href="#" onclick="return updateBroker(<?php echo $broker_id ?>)"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_update.png" /></div></a>
    <?php } ?>

            <a href="#" class="big-link close-reveal-modal" style="position: relative; top: 0; right: 0"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_cnl.png" /></div></a>
        </td>
    </tr>
</table>

<?php $this->endWidget() ?>

</div>
<a class="close-reveal-modal">&#215;</a>
</div>

