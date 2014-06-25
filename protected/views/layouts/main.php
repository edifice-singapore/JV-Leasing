<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div>
			<div class="img"><img src="<?php echo Yii::app()->request->baseUrl.'/images/jvsleasing.png'?>" width="250" height="192" /></div>
		<div>&nbsp;</div>
	</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'activeCssClass'=>'active',
  			'activateParents'=>true,
			'items'=>array(
				array('label'=>'CLIENTS', 
						'url'=>array('/clients/index'),
						
						'linkOptions'=>array('id'=>'menuClients'),
						'itemOptions'=>array('id'=>'itemClients'),
						'items'=> array(
								array('label'=>'RENEWAL','url'=>array('site/client_renew')),
								array('label'=>'ADD NEW CLIENT','url'=>array('site/add_client'))
							),
						'visible'=>!Yii::app()->user->isGuest,	
					),
				
				array('label'=>'BROKERS', 'url'=>array('/site/brokers'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'INSURANCE', 'url'=>array('/site/insurance'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'SALES REPORT', 'url'=>array('/site/salesreport'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'SETTINGS', 'url'=>array('/site/settings'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,

		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by JV's Leasing.<br/>
		All Rights Reserved.<br/>
		<?php echo 'Powerd by: Edifice'; //Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
