<table cellpadding="0" cellspacing="0" class="grey_border_table" style="width:700px">
    <tr>
        <th width="" class="alignleft">No.</th>
        <th width="" class="alignleft">Name</th>
        <th width="">Contact No.</th>
        <th width="">Email</th>
    </tr>
    <?php foreach ($brokers as $id => $broker) { ?>
    <tr>
        <td class="alignleft"><?php echo $id + 1 + ($page->rowsperpage * ($page->currentpage - 1))  ?>.</td>
<<<<<<< HEAD
        <td class="alignleft"><a href="" class="big-link" data-reveal-id="edit-broker" data-brokers_id="<?php echo $broker->brokers_id  ?>" data-animation="none"><?php echo $broker->brokers_name  ?></a></td>
=======
        <td class="alignleft"><a href="#" class="big-link" data-reveal-id="edit-broker" data-brokers_id="<?php echo $broker->brokers_id  ?>" data-animation="none"><?php echo $broker->brokers_name  ?></a></td>
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
        <td><?php echo $broker->brokers_contact  ?></td>
        <td><?php echo $broker->brokers_email  ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="4">
<<<<<<< HEAD
=======

>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
            <?php $this->widget('PaginationWidget', array('page'=>$page)) ?>

        </td>
    </tr>
</table>