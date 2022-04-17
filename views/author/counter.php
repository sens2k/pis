<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
/* @var  array $authors */


$this->title = 'Авторы и их книги';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?=Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col-lg-7">

        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Имя автора</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Книг написал</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($authors as $author): ?>
                <tr>
                    <td><?= $author->Name ?></td>
                    <td><?= $author->Surname ?></td>
                    <td><?= count($author->books)?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>