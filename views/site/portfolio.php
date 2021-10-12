<?php

use yii\widgets\ListView;
$this->title = 'Портфоліо';

?>
<div class="site_wrapper">
    <div class="background_img">
        <img class="" src="<?=Yii::$app->request->baseUrl?>/images/back.png" alt="">
    </div>
    <div class="portfolio_leading_text">
        <p class="section_lending_title">Портфоліо</p>
        <p class="section_lending_description wow animate__animated animate__fadeInLeft">Тут зібрані усі мої найкращі проекти</p>
        <div>
            <p class="arrow_down">^</p>
            <p class="arrow_down">^</p>
        </div>
    </div>
    <div class="portfolio_grid wow animate__animated animate__fadeInUp">
        <?=ListView::widget([
            'dataProvider' => $dataProvider,
            'options' =>[
                'tag' => 'div',
                'class' => 'works_wrapper',
            ],
            'itemView' => '/work/_item',
            'layout' => "\n{items}\n{pager}",
            ]);
        ?>
    </div>
</div>