<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Genre;
use Yii;

Class GenreController extends Controller
{
    public function actionIndex()
    {
        $genres = Genre::find()->orderBy('id')->all();
        return $this->render('index', ['genres' => $genres ]);
    }
}

