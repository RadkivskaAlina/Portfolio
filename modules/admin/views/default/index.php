<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Tables</h2>
                <ol>
                    <li class="btn ">
                        <?=Html::a('works', Url::to('admin/work'))?>
                    </li>
                    <li class="btn ">
                        <?=Html::a('user', Url::to('admin/user'))?>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2>Mail</h2>
                <?=ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' =>[
                        'tag' => 'div',
                        'class' => 'works_wrapper',
                    ],
                    'itemView' => '/mail/_item',
                    'layout' => "\n{items}\n{pager}",
                    ]);
                ?>
            </div>
        </div>

    </div>
</div>