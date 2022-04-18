<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var array $books */
/* @var array $model */
/* @var array $valid */

$this->title = 'Books filter';
$this->params['breadcrumbs'][] = $this->title;


?>
<h1 >Поиск по названию</h1>
<div class="form-area">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-12">
            <?= $form->field($model, 'name')->label('Введите слово')?>
        </div>
        <div class="col-lg-12">
            <?= Html::submitButton('Найти', ['class' => 'btn btn-outline-success btn-sm btn-block'])?>
        </div>
        <?php $form = ActiveForm::end() ?>

    </div>
    <div class="row">
        <?php if ($valid): ?>
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
        <?php endif; ?>
    </div>
</div>
