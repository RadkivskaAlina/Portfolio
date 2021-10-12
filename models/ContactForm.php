<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $email;
    public $title;
    public $body;
    public $verifyCode;


    public function rules()
    {
        return [
            [['email', 'title', 'body'], 'required', 'message'=>"*Обов'язкове поле"],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'email' => 'Електронна адреса',
            'title' => 'Заголовок',
            'body' => 'Повідомлення',
        ];
    }

    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo($this->email)
                ->setSubject($this->title)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
