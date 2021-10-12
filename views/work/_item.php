<?php
use yii\helpers\Html;
use yii\helpers\Url;
use Victor78\ZippyExt\Zippy;

$zippy = Zippy::load();
$urlname = explode('.', $model->url);
if($model->url !== null){
    $zipArchive = Yii::$app->zipper->open(Yii::$app->basePath.'/web/uploads/'.$model->url, 'zip');
    $zipArchive->extract(Yii::$app->basePath.'/web/uploads/');
}
?>

<div class="works_item">
    <div class="work_image">
        <img src="<?php Yii::$app->request->baseUrl?>/web/uploads/<?=$model->image?>" alt="" class="work_image_img">
    </div>
    <div class="default_btn">
        <span>{</span>
            <a href="<?php Yii::$app->request->baseUrl?>/web/uploads/<?=$urlname[0]?>/index.html" target="_blank">
                <?=$model->title?>
            </a>
        <span>}</span>
    </div>
</div>
