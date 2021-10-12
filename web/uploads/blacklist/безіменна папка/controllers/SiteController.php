<?php

class SiteController extends BaseRender
{
    public function actionIndex()
    {
        $this->title = 'Главная';

        $page = new Page();
        $phoneList = $page->getPhones();

        return $this->render('site/index', [
            'phoneList' => $phoneList
        ]);

    }

    public function actionAbout()
    {
        $this->title = 'Про нас';
        return $this->render('site/about');
    }

    public function actionLang($lang)
    {
        $this->title = 'Главная';
        setcookie('lang', $lang);
        $URL='/';
        header ("Location: $URL");
    }

    public function actionCheckPhone($phone)
    {
        echo $phone;
        return true;
    }

}

?>