<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="letter">
        <div class="letter_item">
            <label>№</label>
            <p><?=$model->id?></p>
        </div>
        <div class="letter_item">
            <label>Email</label>
            <a><?=$model->email?></a>
        </div>
        <div class="letter_item">
            <label>Title</label>
            <p><?=$model->title?></p>
        </div>
        <div class="letter_item">
            <label>Message</label>
            <p><?=$model->body?></p>
        </div>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
</div>
