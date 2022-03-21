<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Author;
use app\models\AuthorAddForm;
use app\models\AuthorDeleteForm;
use Yii;
class AuthorController extends Controller
{
    public function actionIndex()
    {
        $authors = Author::find()->orderBy('id')->all();
        return $this->render('index', ['authors' => $authors]);
    }

    public function actionAdd()
    {
        $model = new AuthorAddForm();
        $valid = $model->load(Yii::$app->request->post()) && ($model->validate());
        if($valid)
        {
            $author = new Author();
            $author->Name = $model->name;
            $author->Surname = $model->surname;
            if ($author->save()) {
                Yii::$app->session->setFlash('success', 'Автор добавлен');
                return $this->redirect(['index']);
            }
        }
        return $this->render('add', ['model' => $model]);
    }


    public function actionDelete()
    {
        $model = new AuthorDeleteForm();
        if ($model->load(Yii::$app->request->get())) {
            $author = Author::findOne($model->id);
            if ($author->delete()) {
                Yii::$app->session->setFlash('success', 'Автор удален');
                return $this->goBack(Yii::$app->request->referrer);
            }
        }
    }

}