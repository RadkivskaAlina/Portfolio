<?php

$this->title = 'Про мене';

?>
<div class="site_wrapper">
    <div class="background_img">
        <img class="" src="<?=Yii::$app->request->baseUrl?>/images/back.png" alt="">
    </div>
    <div class="about_leading_text">
        <p class="section_lending_title">Аліна Радківська</p>
        <p class="section_lending_description wow animate__animated animate__fadeInLeft">Web-розробниця</p>
    </div>
    <div class="about_photo wow animate__animated animate__fadeInUp">
        <img src="<?=Yii::$app->request->baseUrl?>/images/avatar.png" alt="">
    </div>
    <div class="about_content wow animate__animated animate__fadeInUp">
        <div class="about_text">
            <p class="about_content_title">Трішки особистої інформації:</p>
            <p class="about_content_description">
                Повне ім'я: Аліна Радківська<br>
                Вік: 17 років<br>
                Адреса: м.Житомир, Україна<br>
                Контакти: <span class="default_btn"><span>{</span><a href="/web/site/contact/">Можна дізнатися тут</a><span>}</span></span><br>
            </p>
            <p class="about_content_title">Освіта:</p>
            <p class="about_content_description">
                На даний готуюсь до вступу в університет на факультет Інженерії програмного забезпечення.
                Завершила декілька курсів в установі <span class="default_btn"><span>{</span><a href="https://ithub.com.ua/">ITHub</a><span>}</span></span>. А саме:
                <ul class="about_content_list">
                    <li>Основи web-програмування Html & Css</li>
                    <li>Back-end програмування</li>
                    <li>Front-end програмування</li>
                    <li>Web design</li>
                </ul>
            </p>
            <p class="about_content_title">Професійні навички:</p>
            <p class="about_content_description">
                <ul class="about_content_list">
                    <li>Знання таких мов програмування як Php та JavaScript</li>
                    <li>Робота з фреймворком Yii2 basic</li>
                    <li>Знання Vue.js</li>
                    <li>Застосування Photoshop та Illustrator</li>
                    <li>Робота з Chart.js та HighCharts</li>
                </ul>
            </p>
            <p class="about_content_title">Знання мов:</p>
            <p class="about_content_description">
                <ul class="about_content_list">
                    <li>Володію українською</li>
                    <li>Вільно розмовляю російською</li>
                    <li>Знаю англійську на достатньому рівні</li>
                </ul>
            </p>
            <p class="about_content_title">Додаткова інформація:</p>
            <p class="about_content_description">
                Я швидко та охоче навчаюся чомусь новому. Завжди відповідально ставлюсь до роботи, ніколи не кидаю її на пів шляху.
                Люблю працювати в команді і радо приєднаюсь до хорошого колективу :)
            </p>
        </div>
        <div class="about_charts">
            <p class="about_content_title">Моя спеціалізація:</p>
            <div class="about_charts_item">
                <div class="about_charts_item_text">
                    <p class="about_charts_item_number">40%</p>
                    <p class="about_charts_item_name">Php</p>
                </div>
                <div id="php_line">
                    <span class="chart_line_back">
                        <span id="php_line_front"></span>
                    </span>
                </div>
            </div>
            <div class="about_charts_item">
                <div class="about_charts_item_text">
                    <p class="about_charts_item_number">50%</p>
                    <p class="about_charts_item_name">Js</p>
                </div>
                <div id="js_line">
                    <span class="chart_line_back">
                        <span id="js_line_front"></span>
                    </span>
                </div>
            </div>
            <div class="about_charts_item">
                <div class="about_charts_item_text">
                    <p class="about_charts_item_number">80%</p>
                    <p class="about_charts_item_name">Html Css</p>
                </div>
                <div id="html_line">
                    <span class="chart_line_back">
                        <span id="html_line_front"></span>
                    </span>
                </div>
            </div>
            <div class="about_charts_item">
                <div class="about_charts_item_text">
                    <p class="about_charts_item_number">30%</p>
                    <p class="about_charts_item_name">Design</p>
                </div>
                <div id="design_line">
                    <span class="chart_line_back">
                        <span id="design_line_front"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>