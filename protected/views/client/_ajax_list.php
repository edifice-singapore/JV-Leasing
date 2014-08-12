<table cellpadding="0" cellspacing="0" class="grey_border_table" style="width:700px">
        <tr>
            <th width="" class="alignleft">No.</th>
            <th width="" class="alignleft">Name</th>
            <th width="">Vehicle No.</th>
            <th width="">Renewal Date</th>
            <th width="">Premium</th>
            <th width="">Excess</th>
            <th width="">Status</th>
        </tr>
        <?php foreach ($client as $id => $clients) { ?>
        <tr>
            <td class="alignleft"><?php echo $id+1+($page->rowsperpage * ($page->currentpage - 1)) ?>.</td>
            <td class="alignleft"><a href="" class="big-link" data-reveal-id="edit-client" data-brokers_id="<?php echo $clients->clients_id  ?>" data-animation="none"><?php echo $clients->name  ?></a></td>
            <td><?php echo $clients->carPlate ?></td>
            <td><?php echo date('Y-m-d',strtotime('+1 years',strtotime($clients->reg_date))); ?></td>
            <td><?php echo $clients->covGrossPrem; ?></td>
            <td><?php echo $clients->covExcess; ?></td>
            <td>Paid</td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">

                <?php $this->widget('PaginationWidget', array('page'=>$page)) ?>

            </td>
        </tr>
</table>