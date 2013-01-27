<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array('Login');
?>
<div class="login-container less">
<?php
$form = $this->beginWidget('CActiveForm', array('id' => 'form-login',
  'enableClientValidation' => true, 'clientOptions' => array('validateOnSubmit' => true)));
?>    <div class="control-group">
    <div class="controls">
      <div>
		<?php echo $form->textField($model,'username',array('class'=>"login-input user-name",'placeholder'=>"Kullanıcı Adı")); ?>
		<?php echo $form->error($model,'username'); ?>
        </div>
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      <div>
		<?php echo $form->passwordField($model,'password',array('class'=>"login-input user-pass",'placeholder'=>"Şifre",'autocomplete'=>"off")); ?>		<?php echo $form->error($model,'password'); ?>
      </div>
    </div>
  </div>
  <div class="remember-me">
		<?php echo $form->checkBox($model,'rememberMe',array('class'=>"rem_me")); ?> Şifremi Hatırla
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<br/>
<div class="clearfix">
<?php echo CHtml::submitButton('Giriş',array('class'=>"btn btn-inverse login-btn")); ?>
  </div>
<?php $this->endWidget(); ?>
</div>
