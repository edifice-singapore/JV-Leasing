<body>
	
    
       
    
    
    <div class="footer_wrapper">
        <div class="footer">
            <div style="width:1080px; margin:0 auto;">
            	401 Havelock Rd, #02-21A, Miramar Hotel, Singapore 169631&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 6887 3113     Fax: 6887 3003
            	<div style="float:right">Copyright © 2013 JV's Leasing  <a href="http://www.edifice.com.sg">Powered by Edifice</a></div>
            </div>
        </div><!-- .footer -->   
    </div><!-- .footer_wrapper --> 
    
    <div id="delete" class="reveal-modal">
        <div style="background-color: #eeeeee; margin-top: 3px;padding: 10px 20px;"><h5><span style="color:#254078">Delete</span></h5></div>
        <div style="width: 450px;margin: 30px auto 50px;">
        	<table cellpadding="0" cellspacing="0" style="font-size:15px; text-align: center;">
            <tr>
                <td>Are you sure you want to delete this record?</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <a href="#"><img src="images/btn_yes.png" /></a>
                    <a href="#" class="close-reveal-modal" style="position: relative; top: 0; right: 0"><img src="images/btn_no.png" /></a>
                </td>
            </tr>
        </table>
        </div>
        <a class="close-reveal-modal">&#215;</a>
    </div>
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
</body>







<b><?php echo CHtml::encode($data->getAttributeLabel('brokers_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->brokers_id), array('view', 'id'=>$data->brokers_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('brokers_name')); ?>:</b>
    
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('brokers_contact')); ?>:</b>
    
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('brokers_email')); ?>:</b>
    
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('brokers_address')); ?>:</b>
    <?php echo CHtml::encode($data->brokers_address); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('brokers_commission')); ?>:</b>
    <?php echo CHtml::encode($data->brokers_commission); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
    <?php echo CHtml::encode($data->date); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    */ ?>