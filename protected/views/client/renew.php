<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>

<div class="form">

<div class="clear" style="height:15px"></div>
    <div class="wrapper">
        <div class="clear"></div>
    
        <h3>Due for <span style="color:#254078">Renewal</span></h3>
        <br />
        <div id="list_container"> Loading.... </div>
    </div><!-- .wrapper -->    
    
    
 


</div><!-- form -->

 <script type="text/javascript">


var renewalList = null;

function searchBroker () {
    $('#list_container').html('Searching...');
    renewalList.refresh();
    return false;
}

$(function(){
    renewalList = ajaxPagination({
        id: 'list-client',
        action: 'index.php/client/AjaxRenew',
        container:'#list_container',
        data: function(){
            //return $('input','#seach-form').serialize()
        }
    });
});
</script>




	