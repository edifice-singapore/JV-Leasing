<?php
/* @var $this BrokersController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Brokers',
);

$this->menu=array(
	array('label'=>'Create Brokers', 'url'=>array('create')),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
*/
?>

 <script type="text/javascript">
    var count = 0;
   jQuery(document).ready(function(){
    	$("#brokers_record_details").hide();
    	brokersRecordDetail();
    });
    function brokersRecordDetail(){
	    jQuery("#views").dialog({
	    	modal: true
	    });

	}	

</script>

<div id="views" class="view">
	<div class="clear" style="height:15px"></div>
	<div class="wrapper">
    	<div class="clear"></div>
    	<div style="float: left; overflow:hidden;">
            <h3>Brokers <span style="color:#254078">List</span></h3>
            <br />
            <table cellpadding="0" cellspacing="0" class="grey_border_table" style="width:700px">
                <tr>
                    <th width="" class="alignleft">No.</th>
                    <th width="" class="alignleft">Name</th>
                    <th width="">Contact No.</th>
                    <th width="">Email</th>
                </tr>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</table>
        </div>
    	<div class="search">
        	<table cellpadding="0" cellspacing="0">
           		<tr>
                	<th><h5 style="font-size: 20px;">Search <span style="color:#254078">Broker</span></h5></th>
                </tr>
           		<tr>
                	<td>
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td>Name:</td>
                                <td><input name="" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Contact No.:</td>
                                <td><input name="" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input name="" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#"><div class="btn"><img src="images/btn_search.png" /></div></a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div><!-- .wrapper --> 

    <div id="brokers_record_details">
        <div style="background-color: #eeeeee; margin-top: 3px;padding: 10px 20px;"><h5>Broker's  <span style="color:#254078">Record Details</span></h5></div>
        <div style="width: 450px;margin: 30px auto 50px;">
        	<table cellpadding="0" cellspacing="0" style="font-size:15px;">
            <tr>
                <td width="200px">Name:</td>
                <td><input name="" type="text" class="textfield" placeholder="Johnathan" /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td>% of Commission:</td>
                <td><input name="" type="text" class="textfield" placeholder="20%" /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td>Mailing Address:</td>
                <td><textarea name="" cols="" rows="" class="textarea">Bedok North Ave 1 
Blk 137 #09-81 
Singapore (453762)</textarea></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td>Contact No.:</td>
                <td><input name="" type="text" class="textfield" placeholder="987456123" /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input name="" type="text" class="textfield" placeholder="jonathan@gmail.com" /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="#"><div class="btn"><img src="images/btn_update.png" /></div></a>
                    <a href="#" class="big-link close-reveal-modal" data-reveal-id="delete" data-animation="none" style="position: relative; top: 0; right: 0"><div class="btn"><img src="images/btn_del.png" /></div></a>
                </td>
            </tr>
        </table>
        </div>
        <a class="close-reveal-modal">&#215;</a>
    </div>



