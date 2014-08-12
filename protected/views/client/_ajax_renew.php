
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
            <?php 
                $count = 1;
                foreach ($client as $id => $clients) 
                { 
                    $color = $count % 2 ? 'bgred' : 'bgyel' ;
            ?>
                           
                	<tr class="<?php echo $color; ?>">
                    	<td class="alignleft"><?php echo $count; ?></td>
                    	<td class="alignleft"><a href="client_details.html"><?php echo $clients->name; ?></a></td>
                    	<td><?php echo $clients->mobile; ?></td>
                    	<td><?php echo $clients->carPlate; ?></td>
                    	<td>14-09-12</td>
                    	<td>Pending</td>
                    	<td>14-09-13</td>
                    	<td><a href="invoice.html"><div class="btn_sendinvoice"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/btn_sendinvoice.png" /></div></a></td>
                    	<td><a href="viewparticulars.html"><div class="btn_viewmore"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/btn_viewmore.png" /></div></a></td>
                    </tr>
        	<?php 
                 $count++; 
                } 
            ?>
        </table>
      
    
    
    

