<?php
use yii\helpers\Html;

/* @var $books \app\models\Book[]|array|\yii\db\ActiveRecord[] */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 >Книги</h1>
<div class="row">
    <div class="col-lg-7">
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Автор</th>
                <th scope="col">Жанр</th>
                <th scope="col">Название</th>
                <th scope="col">Год</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <th><?= Html::encode($book->id) ?></th>
                    <td><?= Html::encode($book->author->Name) ?></td>
                    <td><?= Html::encode($book->genre->Name) ?></td>
                    <td><?= Html::encode($book->Name) ?></td>
                    <td><?= Html::encode($book->Year) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
