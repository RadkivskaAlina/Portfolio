<?php
class AdminPageController
{
    public function actionIndex()
    {
        $page = new Page();
        $pageList = $page->getPageList();
        print_r($pageList);
    }
}

?>