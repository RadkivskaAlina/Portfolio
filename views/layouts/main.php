<?php


use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <header class="header"> 
        <div class="header_wrapper">
            <div class="header_hover_element"></div>
            <?php
            NavBar::begin([
                'options' => [
                    'class' => 'header_collapse',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'header_list'],
                'items' => [
                    ['label' => 'Головна', 'url' => ['/site/index']],
                    ['label' => 'Про мене', 'url' => ['/site/about']],
                    ['label' => 'Портфоліо', 'url' => ['/site/portfolio']],
                    ['label' => 'Контакти', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                        ['label'=>'']
                    ) : (
                        ['label' => 'Admin', 'url' => ['/admin']]
                    ),
                ],
            ]);
            NavBar::end();
            ?>
            <div class="footer">
                <p class="footer_text">©2020 created by Alivka. All rights reserved</p>
                <div class="footer_icons">
                    <a href="https://www.instagram.com/alivka._.girl/" target="_blank"><img src="<?=Yii::$app->request->baseUrl?>/images/instagram.svg" alt=""></a>
                    <a href="https://www.facebook.com/alina.radkivska/" target="_blank"><img src="<?=Yii::$app->request->baseUrl?>/images/facebook.svg" alt=""></a>
                    <a href="https://twitter.com/Alina39267946" target="_blank"><img src="<?=Yii::$app->request->baseUrl?>/images/twitter.svg" alt=""></a>
                    <a href="https://github.com/RadkivskaAlina" target="_blank"><img src="<?=Yii::$app->request->baseUrl?>/images/github.svg" alt=""></a>
                </div>
            </div>
        </div>
    </header>

    <div class="content_container">
            <div class="burger_element">
                <span></span>
                <span></span>
                <span></span>
            </div>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</body>
</html>
<?php $this->endPage() ?>
