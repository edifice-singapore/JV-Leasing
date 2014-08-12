<div class="wrapper">
    	<div class="clear"></div>
    	<div style="float: left; overflow:hidden;">
            <h3>Client <span style="color:#254078">List</span></h3>
            <br />
            <div id="list_container">Loading...</div>
        </div>
    	<div class="search">
        	<table cellpadding="0" cellspacing="0">
           		<tr>
                	<th><h5 style="font-size: 20px;">Search <span style="color:#254078">Client</span></h5></th>
                </tr>
           		<tr>
                	<td>
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td>Name:</td>
                                <td><input id="search_name"  name="search_name" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>IC/Passport No:.</td>
                                <td><input id="search_icPassportNo"  name="search_icPassportNo" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Work Permit No.:</td>
                                <td><input id="search_workPermitNo"  name="search_workPermitNo" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Policy No.:</td>
                                <td><input id="search_policyNo"  name="search_policyNo" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td>Vehicle No.:</td>
                                <td><input id="search_vehicleNo"  name="search_vehicleNo" type="text" class="textfield" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="" onclick="return searchBroker()"><div class="btn"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/btn_search.png" /></div></a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div><!-- .wrapper -->   

    <script type="text/javascript">


var clientlist = null;

function searchBroker () {
    $('#list_container').html('Searching...');
    clientlist.refresh();
    return false;
}

$(function(){
    clientlist = ajaxPagination({
        id: 'list-client',
        action: 'index.php/client/AjaxList',
        container:'#list_container',
        data: function(){
            return $('input','#seach-form').serialize()
        }
    });
});
</script>