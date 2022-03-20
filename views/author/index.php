<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $authors \app\models\Author[]|array|\yii\db\ActiveRecord[] */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1 >Авторы</h1>
    <div class="row">
        <div class="col-lg-7">
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($authors as $author): ?>
                <tr>
                    <th><?= Html::encode("{$author->id}") ?></th>
                    <td><?= Html::encode("{$author->Name}") ?></td>
                    <td><?= Html::encode("{$author->Surname}") ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>