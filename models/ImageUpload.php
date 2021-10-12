<?php
namespace app\models;

use Yii;
use yii\base\Model;
use app\models\ImageUpload;
use yii\web\UploadedFile;

class ImageUpload extends Model{
    public $image;

    public function rules(){
        return[
            [['image'], 'required'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, svg', 'maxSize' => 20*(1024*1024)],
        ];
    }

    public function uploadFile($file, $currentImage){
        $this->image  = $file;
        if($this->validate()){
            $this->deleteCurrentImage($currentImage);
        
            return $this->saveImage();
        }
    }

    private function getFolder(){
        return Yii::getAlias('@app/web').'/uploads/';
    }

    private function generateFilename(){
        return $this->image->baseName.'.'.$this->image->extension;
    }

    public function deleteCurrentImage($currentImage){
        if($this->fileExists($currentImage)){
            unlink($this->getFolder().$currentImage);
        }
    }

    public function fileExists($currentImage){
        if(!empty($currentImage) && $currentImage != null)
        {
            return file_exists($this->getFolder() . $currentImage);
        }
    }

    public function saveImage(){
        $filename = $this->generateFilename();
    
        $this->image->saveAs($this->getFolder().$filename);  

        return $filename;
    }
}
?>