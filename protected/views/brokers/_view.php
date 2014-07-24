<?php
/* @var $this BrokersController */
/* @var $data Brokers */
?>

				<script type="text/javascript">
					count++;
				</script>
                <tr style="line-height: 5%; text-align: center;">
                    <td class="alignleft"><script type="text/javascript"> document.write(count); </script></td>
                    <td class="alignleft" onClick="brokersRecordDetail();">
                    	<p style="cursor:pointer; line-height: 5%"><?php echo CHtml::encode($data->brokers_name); ?></p>
                    </td>
                    <td><?php echo CHtml::encode($data->brokers_contact); ?></td>
                    <td><?php echo CHtml::encode($data->brokers_email); ?></td>
                </tr>
                
            

	

</div>