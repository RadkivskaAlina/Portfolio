<?php

use yii\widgets\ListView;

$this->title = 'Головна';
?>
<div class="site_wrapper">
    <div class="background_img">
        <img class="" src="<?=Yii::$app->request->baseUrl?>/images/back.png" alt="">
    </div>
    <div class="section_lending">
        <div class="section_lending_text">
            <p class="section_lending_title">Hello World!</p>
            <p class="section_lending_description wow animate__animated animate__fadeInLeft">Web-розробка від Алівки :)</p>
        </div>
        <div>
            <p class="arrow_down">^</p>
            <p class="arrow_down">^</p>
        </div>
    </div>
    <div class="section_about wow animate__fadeInUp" data-wow-offset="600" data-wow-delay="2s" id="section">
        <p class="section_about_title ">Декілька слів про мене</p>
        <div class="section_about_content">
            <div class="section_about_content_text wow animate__animated animate__fadeInLeft">
                <p class="section_about_content_description">Вітаю вас на моєму сайті-портфоліо.</p>
                <p class="section_about_content_description">Мене звати Аліна Радківська. Я займаюся web-розробкою. Буду рада співпрацювати з вами!</p>
                <p class="section_about_content_description">Моя спеціалізація:</p>
                <div class="section_about_content_charts">
                    <div class="section_about_content_charts_item">
                        <p>Php</p>
                        <div id="php" style="width:150px; height:150px;"></div>
                    </div>
                    <div class="section_about_content_charts_item">
                        <p>Js</p>
                        <div id="js" style="width:150px; height:150px;"></div>
                    </div>
                    <div class="section_about_content_charts_item">
                        <p>Html css</p>
                        <div id="html" style="width:150px; height:150px;"></div>
                    </div>
                    <div class="section_about_content_charts_item">
                        <p>Design</p>
                        <div id="design" style="width:150px; height:150px;"></div>
                    </div>
                </div>
            </div>
            <div class="section_about_content_avatar wow animate__animated animate__fadeInRight">
                <img src="<?=Yii::$app->request->baseUrl?>/images/avatar.png" alt="">
                <div class="default_btn">
                    <span>{</span>
                    <a href="/web/site/about" class="default_btn">Дізнатись більше</a>
                    <span>}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section_works">
        <p class="section_about_title">Мої найновіші проекти</p>
        <?=ListView::widget([
                'dataProvider' => $dataProvider,
                'options' =>[
                    'tag' => 'div',
                    'class' => 'works_wrapper wow animate__animated animate__fadeInUp',
                ],
                'itemView' => '/work/_item',
                'layout' => "\n{items}\n{pager}",
            ]);
        ?>
        <div class="default_btn more">
            <span>{</span>
            <a href="/web/site/portfolio" class="default_btn">Дізнатись більше</a>
            <span>}</span>
        </div>
    </div>
</div>
