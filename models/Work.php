<?php

namespace app\models;

use Yii;

class Work extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'work';
    }

    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status'], 'integer'],
            [['title', 'image', 'url'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
            'image' => 'Image',
            'url' => 'Url',
        ];
    }    
    
    public static function findActive(){
        return self::find()->where(['status' => StatusHelper::$active]);
    }

    public function saveImage($filename){
        $this->image = $filename;
        return $this->save(false);
    }
    public function saveFolder($filename){
        $this->url = $filename;
        return $this->save(false);
    }
}
