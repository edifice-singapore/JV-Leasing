<?php
/* @var $this BrokersController */
/* @var $model Brokers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'brokers_id'); ?>
		<?php echo $form->textField($model,'brokers_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brokers_name'); ?>
		<?php echo $form->textField($model,'brokers_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brokers_contact'); ?>
		<?php echo $form->textField($model,'brokers_contact',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brokers_email'); ?>
		<?php echo $form->textField($model,'brokers_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brokers_address'); ?>
		<?php echo $form->textField($model,'brokers_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brokers_commission'); ?>
		<?php echo $form->textField($model,'brokers_commission'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->