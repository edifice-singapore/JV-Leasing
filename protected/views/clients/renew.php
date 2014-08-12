<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>

<div class="form">


<?php 
/*
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'clients-renew-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); 
*/

/*$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clients-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'nick',
		'address',
		'postalcode',
		'nric',
		
		'birthdate',
		'nationality',
		'res_tel',
		'ofc_tel',
		'mobile',
		'email',
		'company',
		'designation',
		'drvlicense_passdate',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
));
*/
?>


	<div class="clear" style="height:15px"></div>
    <div class="wrapper">
    	<div class="clear"></div>
    
    	<h3>Due for <span style="color:#254078">Renewal</span></h3>
        <br />
        <table cellpadding="0" cellspacing="0" width="100%" class="grey_border_table">
        	<tr>
            	<th width="30" class="alignleft">No.</th>
            	<th width="110" class="alignleft">Name</th>
            	<th width="130">Contact Number</th>
            	<th width="100">Vehicle No.</th>
            	<th width="130">Last Paid Premium</th>
            	<th width="100">Status</th>
            	<th width="100">Due Date </th>
            	<th width="140"></th>
            	<th width="140"></th>
            </tr>
        	<tr class="bgred">
            	<td class="alignleft">1.</td>
            	<td class="alignleft"><a href="client_details.html"><?php //echo $form->labelEx($model,'name'); ?></a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendinvoice.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr class="bgred">
            	<td class="alignleft">2.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr class="bgyel">
            	<td class="alignleft">3.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr class="bgyel">
            	<td class="alignleft">4.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr>
            	<td class="alignleft">5.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr>
            	<td class="alignleft">6.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr>
            	<td class="alignleft">7.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr>
            	<td class="alignleft">8.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr>
            	<td class="alignleft">9.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        	<tr>
            	<td class="alignleft">10.</td>
            	<td class="alignleft"><a href="client_details.html">Johnathan Tan</a></td>
            	<td>95087362</td>
            	<td>SJ-8972K</td>
            	<td>14-09-12</td>
            	<td>Pending</td>
            	<td>14-09-13</td>
            	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="images/btn_sendrem.png" /></div></a></td>
            	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="images/btn_viewmore.png" /></div></a></td>
            </tr>
        </table>
    </div><!-- .wrapper -->    
    
    
    

<?php //$this->endWidget(); ?>

</div><!-- form -->