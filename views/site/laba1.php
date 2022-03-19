<?php
/* @var $valid \app\controllers\SiteController */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Laba1';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="form-area">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'name')->label('Имя')?>
                <?= $form->field($model, 'email')->label('Почта')?>
                <?= $form->field($model, 'age')->label('Возвраст')?>
                <?= $form->field($model, 'date')->label('Дата посещения')->textInput(['type' => 'date']) ?>
                <?= $form->field($model, 'isRep')->radioList([1 => 'Да', 0 => 'Нет'])->label('Рекомендуете друзьям?') ?>
                <?= $form->field($model, 'review')->label('Отзыв')->textarea() ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary'])?>
                </div>
            <?php ActiveForm::end();?>
        </div>
        <?php if ($valid): ?>
            <div class="col-6">
                <p class="h4">Переданный отзыв</p>
                <table class="table table-striped">
                    <tr>
                        <th>Имя</th>
                        <th><?= Html::encode($model->name) ?></th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><?= Html::encode($model->email) ?></th>
                    </tr>
                    <tr>
                        <th>Возвраст</th>
                        <th><?= Html::encode($model->age) ?></th>
                    </tr>
                    <tr>
                        <th>Дата</th>
                        <th><?= Html::encode($model->date) ?></th>
                    </tr>
                    <tr>
                        <th>Рекомендует</th>
                        <th><?= Html::encode($model->isRep) ?></th>
                    </tr>
                    <tr>
                        <th>Обзор</th>
                        <th><?= Html::encode($model->review) ?></th>
                    </tr>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>