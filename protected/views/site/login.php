<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

//$this->pageTitle=Yii::app()->name . ' - Login';
/*$this->breadcrumbs=array(
	'Login',
);*/
?>



<div class="form">
<?php 
	$form= $this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="wrapper" style="padding-top: 0;">
        <div class="logo2"></div><!--End of .logo2-->
        <table cellpadding="0" cellspacing="0" class="login">
            <tr>
                <td>Username</td>
                <td colspan="2"><?php echo $form->textField($model,'username'); ?>
								<?php echo $form->error($model,'username'); ?>
				</td>
            </tr>
            <tr>
                <td>Password</td>
                <td colspan="2"><?php echo $form->passwordField($model,'password'); ?>
								<?php echo $form->error($model,'password'); ?>
			</td>
            </tr>

            <tr>
                <td>CAPTCHA</td>
                <td><img src="images/captcha.jpg" style="width: 100px;" /></td>
                <td><input name="" type="text" style="width:180px"/></td>
            </tr>
            <tr>
                <td><td></td>
                <td colspan="2">
                	<div class="row rememberMe">
						<?php echo $form->checkBox($model,'rememberMe'); ?>
						<?php echo $form->label($model,'rememberMe'); ?>
						<?php echo $form->error($model,'rememberMe'); ?>
					</div>

					<div class="row buttons">
						<?php echo CHtml::submitButton('Login'); ?>
					</div>
                	
                </td>
            </tr>
        </table>
    </div>




	

<?php $this->endWidget(); ?>
</div><!-- form -->
