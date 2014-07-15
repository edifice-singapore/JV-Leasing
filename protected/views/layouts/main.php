<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
<!-- 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
 -->	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<!-- 	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
 -->	
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<?php
	if(!Yii::app()->user->isGuest){ 
?>
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/dropdown.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reveal.css">	
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.reveal.js"></script>
		<script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/js/dropdown.js'></script> 
<?php	
	}
?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php if(!Yii::app()->user->isGuest){?>
			
				<div class="header_wrapper">
					<div class="header">
			        	<a href="index.html"><div class="logo"></div></a><!--End of .logo-->
			            <div class="logout"><?php $this->widget('zii.widgets.CMenu',array(
													'activeCssClass'=>'active',
			  										'activateParents'=>true,
			  										'items' => array(
			  													array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
																),
													)); ?>
			  			</div>
			            <div class="navigation">
			                <div id="header">
			                    <ul>
			                        <li><a href="settings.html">Settings</a></ul>
			                        </li>
			                    </ul>
			                </div><!--End of .header-->
			                <div id="header" style="right: 175px;">
			                    <ul>
			                        <li><a href="salesreport.html">Sales Report</a></li>
			                    </ul>
			                </div><!--End of .header-->
			                <div id="header" style="right: 315px;">
			                    <ul>
			                        <li><a href="insurance.html">Insurance</a></li>
			                    </ul>
			                </div><!--End of .header-->
			                <div id="header" style="right: 440px;">
			                    <ul>
			                        <li><a href="#">Brokers</a>
			                            <ul style="display:none">
			                                <li><a href="brokersreport.html">Broker's Report</a></li>
			                                <li><a href="#" class="big-link" data-reveal-id="addnewbroker" data-animation="none">Add New broker</a></li>
			                                <li><a href="viewallbrokers.html">View all brokers</a></li>
			                            </ul>
			                        </li>
			                    </ul>
			                </div><!--End of .header-->
			                <div id="header" style="right: 555px;">
			                    <ul>
			                        <li><a href="#" class="active">Clients</a>
			                            <ul style="display:none">
			                                <li><a href="index">Renewal</a></li>
			                                <li><a href="create" class="active">Add New client</a></li>
			                                <li><a href="viewallclients.html">View all clients</a></li>
			                            </ul>
			                        </li>
			                    </ul>
			                </div><!--End of .header-->
			            	<!--<ul class="nav">
			                	<a href="#"><li>Clients</li></a>
			                	<a href="#"><li>Brokers</li></a>
			                	<a href="#"><li>Insurance</li></a>
			                	<a href="#"><li>Sales Report</li></a>
			                	<a href="#"><li>Settings</li></a>
			                </ul>--><!--End of .nav-->
			            </div><!--End of .navigation-->
			                    
			        </div><!--End of .header-->
					<div class="leftbg"></div><!--End of .leftbg-->
					<div class="rightbg"></div><!--End of .rightbg-->
			    </div><!--End of .header_wrapper-->

<?php } ?>

	<div>&nbsp;</div>
	
	
	<?php echo $content; ?>
	


	<div class="clear"></div>

	<div class="footer_wrapper">
		<div id="footer">
				<div style="width:1080px; margin:0 auto;">
	            	401 Havelock Rd, #02-21A, Miramar Hotel, Singapore 169631&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 6887 3113     Fax: 6887 3003
	            	<div style="float:right">Copyright 漏 <?php echo date('Y'); ?> JV's Leasing  <a href="http://www.edifice.com.sg">Powered by Edifice</a></div>
	            </div>
			
		</div><!-- footer -->
	</div>



</body>
</html>
