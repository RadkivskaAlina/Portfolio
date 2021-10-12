<?php
namespace app\models;

use Yii;
use yii\base\Model;
use app\models\FolderUpload;
use yii\web\UploadedFile;

class FolderUpload extends Model{
    public $url;

    public function rules(){
        return[
            [['url'], 'required'],
            [['url'], 'file', 'skipOnEmpty' => false, 'extensions' => 'zip', 'maxSize' => 1024 * 1024 * 20],
        ];
    }

    public function uploadFile($file, $currentFolder){
        $this->url  = $file;
        if($this->validate()){
            $this->deleteCurrentFolder($currentFolder);
        
            return $this->saveFolder();
        }
    }

    private function getFolder(){
        return Yii::getAlias('@app/web').'/uploads/';
    }

    private function generateFilename(){
        return $this->url->baseName.'.'.$this->url->extension;
    }

    public function deleteCurrentFolder($currentFolder){
        if($this->fileExists($currentFolder)){
            unlink($this->getFolder().$currentFolder);
        }
    }

    public function fileExists($currentFolder){
        if(!empty($currentFolder) && $currentFolder != null)
        {
            return file_exists($this->getFolder() . $currentFolder);
        }
    }

    public function saveFolder(){
        $filename = $this->generateFilename();
    
        $this->url->saveAs($this->getFolder().$filename);  

        return $filename;
    }
}
?>