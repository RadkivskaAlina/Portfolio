<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Work;
use app\models\WorkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImageUpload;
use app\models\FolderUpload;
use app\models\UploadForm;
use yii\web\UploadedFile;

class WorkController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new WorkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Work();

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->url = UploadedFile::getInstance($model, 'url');
            if(!empty($model->image)){
                $model->image->saveAs('uploads/'.$model->image->baseName .'.'.$model->image->extension);
            }
            if(!empty($model->url)){
                $model->url->saveAs('uploads/'.$model->url->baseName .'.'.$model->url->extension);
            }
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = new ImageUpload;
        $urlModel = new FolderUpload;
        $work = $this->findModel($id);

        if($work->load(Yii::$app->request->post()))
        {
                $file = UploadedFile::getInstance($work, 'image');
                $folder = UploadedFile::getInstance($work, 'url');

                if(
                    $work->saveImage($model->uploadFile($file, $work->image)) &&
                    $work->saveFolder($urlModel->uploadFile($folder,  $work->url)))
                {
                    return $this->redirect(['view', 'id'=>$work->id]);
                }
        }

        return $this->render('update', [
            'model' => $work,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Work::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
