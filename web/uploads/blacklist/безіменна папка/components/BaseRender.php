<?php
class BaseRender
{
    public $title;

    public function render($file, $data = [])
    {
        $title = $this->title;
        if (count($data) >= 1) {
            foreach ($data as $key => $value) {
                 ${$key} = $value;
            }
        }

        include ROOT . '/views/frontend/common/header.php';
        include ROOT . '/views/frontend/' . $file . '.php';
        include ROOT . '/views/frontend/common/footer.php';
        return true;
    }
}

?>