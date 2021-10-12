<?php
class Autoload{
    public function dirList(){
       return ['components','models', 'controllers'];
    }

    public function findFiles($dir){
        $files = scandir(ROOT.'/'.$dir);
        unset($files[0], $files[1]);
        return $files;
    }

    public function init(){
        $dirs = $this->dirList();
        if(is_array($dirs)) {
            foreach ($dirs as $dir) {
                $files = $this->findFiles($dir);
                if(is_array($files)){
                    foreach ($files as $file){
                        if($file==='Autoload.php'){
                            continue;
                        }
                        else {
                            require ROOT . '/' . $dir . '/' . $file;
                        }
                    }
                }
            }
        }
        else{
            echo 'dir not found';
        }
    }
}
?>