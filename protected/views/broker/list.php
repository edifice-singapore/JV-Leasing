<div class="wrapper" id="broker-add-form">
    	<div class="clear"></div>
    	<div style="float: left; overflow:hidden;">
            <h3>Brokers <span style="color:#254078">List</span></h3>
            <br />
            <div id="list_container">Loading...</div>

        </div>
    	<div class="search">
        	<table cellpadding="0" cellspacing="0">
           		<tr>
                	<th><h5 style="font-size: 20px;">Search <span style="color:#254078">Broker</span></h5></th>
                </tr>
           		<tr>
                	<td>
                        <table cellpadding="0" cellspacing="0"  id="seach-form">
                            <tr>
                                <td>Name:</td>
                                <td><input id="search_name"  name="search_name" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Contact No.:</td>
                                <td><input id="search_contact" name="search_contact" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input id="search_email" name="search_email" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#" onclick="return searchBroker()"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_search.png" /></div></a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>

<script type="text/javascript">


var brokerlist = null;

function searchBroker () {
    $('#list_container').html('Searching...');
    brokerlist.refresh();
    return false;
}

$(function(){
    brokerlist = ajaxPagination({
        id: 'list-broker',
        action: 'index.php/broker/AjaxList',
        container:'#list_container',
        data: function(){
            return $('input','#seach-form').serialize()
        }
    });
});
</script>