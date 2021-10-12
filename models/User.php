<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role'], 'integer'],
            [['name', 'password'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    public static function findIdentity($id)
    {
        return User::findOne($id);
    }
    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public static function findByUsername($username){
        echo $username;
        return User::find()->where(['name' => $username])->one();
    }

    public function validatePassword($password){
        if($this->password == $password){
            return true;
        } else {
            return false;
        }
    } 

    public function create(){
        return $this->save(false);
    }
}
