<?php
use yii\helpers\Html;

/* @var $genres \app\models\Genre[]|array|\yii\db\ActiveRecord[] */

$this->title = 'Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 >Жанры</h1>
<div class="row">
    <div class="col-lg-7">
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($genres as $genre): ?>
                <tr>
                    <th><?= Html::encode($genre->id) ?></th>
                    <td><?= Html::encode($genre->Name) ?></td>
                    <td class="text-left"><?= Html::encode($genre->Description) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

