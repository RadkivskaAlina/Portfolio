<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\Mail;
use app\models\MailSearch;
use yii\data\ActiveDataProvider;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $model = new MailSearch;
        $query = Mail::find()->orderBy('id DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false
        ]);

        return $this->render('index', [
            'model' => $model,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['../../web/admin']);
    }

    protected function findModel($id)
    {
        if (($model = Mail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
