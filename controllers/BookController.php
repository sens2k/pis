<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Book;
use app\models\BookFilterForm;
use Yii;

Class BookController extends Controller
{
    public function actionIndex()
    {
        $books = Book::find()->orderBy('id')->with('author', 'genre')->all();
        return $this->render('index', ['books' => $books ]);
    }

    public function actionFilter()
    {
        $books = Book::find()->orderBy('id')->with('author', 'genre')->where('year < 2000')->all();
        return $this->render('filter', ['books' => $books ]);
    }

    public function actionName()
    {
        $model = new BookFilterForm();
        $valid = $model->load(Yii::$app->request->post()) && ($model->validate());
        $books = Book::find()->with('author', 'genre')->where(['like', 'name', '%' . $model->name . '%', false])->all();
        return $this->render('name', ['books' => $books, 'valid' => $valid, 'model' => $model ]);
    }
}
