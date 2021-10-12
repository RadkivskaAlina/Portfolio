<?php

$this->title = 'Контакти';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="site_wrapper">
    <div class="background_img">
        <img class="" src="<?=Yii::$app->request->baseUrl?>/images/back.png" alt="">
    </div>
    <div class="about_leading_text">
        <p class="section_lending_title">Мої контакти</p>
        <p class="section_lending_description wow animate__animated animate__fadeInLeft">Є питання? З радістю відповім на них найближчим часом</p>
        <div>
            <p class="arrow_down">^</p>
            <p class="arrow_down">^</p>
        </div>
    </div>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="contact_success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

    <?php else: ?>
    <div class="contact_content">
        <div class="contact_information wow animate__animated animate__fadeInLeft">
            <div class="contact_information_item">
                <img src="<?=Yii::$app->request->baseUrl?>/images/mobile.svg" alt="">
                <div class="contact_information_item_text">
                    <p class="contact_information_item_title">Номер телефону:</p>
                    <a href="tel:+380931502896" class="contact_information_item_link">+38 (093) 150 28 96</a>
                </div>
            </div>
            <div class="contact_information_item">
                <img src="<?=Yii::$app->request->baseUrl?>/images/paper-plane.svg" alt="">
                <div class="contact_information_item_text">
                    <p class="contact_information_item_title">Електронна адреса:</p>
                    <a href="mailto:radkivskaalina@ukr.net" class="contact_information_item_link">radkivskaalina@ukr.net</a>
                </div>
            </div>
            <div class="contact_information_item">
                <img src="<?=Yii::$app->request->baseUrl?>/images/skype.svg" alt="">
                <div class="contact_information_item_text">
                    <p class="contact_information_item_title">Skype:</p>
                    <a href="skype:live:.cid.34ff0401af12d209?call" class="contact_information_item_link">Alina Radkivska</a>
                </div>
            </div>
        </div>
        <div class="contact_form wow animate__animated animate__fadeInRight">
            <?php $form = ActiveForm::begin(['id' => 'mail-form']); ?>
            <p class="contact_form_title">Можете написати листа прямо тут:</p>
                <label for="" class="default_input__label">
                    <p class="default_input__label__draft">Електронна адреса</p>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => 255, 'class' => 'default_input'])->label(false);  ?>

                </label>

                <label for="" class="default_input__label">

                    <p class="default_input__label__draft">Заголовок</p>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => 255, 'class' => 'default_input'])->label(false);  ?>

                </label>

                <label for="" class="default_input__label">

                    <p class="default_input__label__draft">Повідомлення</p>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6, 'class' => 'default_input message'])->label(false);  ?>

                </label>

                <div class="default_btn send">
                    <span>{</span>
                    <?= Html::submitButton('Надіслати', ['class' => 'default_btn']) ?>
                    <span>}</span>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php endif; ?>
</div>