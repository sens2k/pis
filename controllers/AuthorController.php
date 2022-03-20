<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Author;
use Yii;
class AuthorController extends Controller
{
    public function actionIndex()
    {
        $authors = Author::find()->orderBy('id')->all();
        return $this->render('index', ['authors' => $authors]);
    }
}