<?php

use yii\helpers\Html;
use app\helpers\StatusHelper;
use yii\widgets\ActiveForm;
 
?>

<div class="work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList(StatusHelper::show()) ?>
    
    <?= $form->field($model, 'image')->fileInput()?>
    <?php if(!empty($model->image)): ?>
        <img src="<?=Yii::$app->request->baseUrl?>/uploads/<?=$model->image?>" alt="" style="height: 100px">
    <?php endif; ?>

    <?= $form->field($model, 'url')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
