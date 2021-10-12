<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $title
 * @property string|null $body
 */
class Mail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['email', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
