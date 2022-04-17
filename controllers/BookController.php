<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Book;
use Yii;

Class BookController extends Controller
{
    public function actionIndex()
    {
        $books = Book::find()->orderBy('id')->with('author', 'genre')->all();
        return $this->render('index', ['books' => $books ]);
    }
}
