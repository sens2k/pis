<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;


$this->title = 'Добавление автора';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?=Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col-lg-4">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'name')->label('Имя')?>
            <?= $form->field($model, 'surname')->label('Фамилия')?>
            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-outline-dark btn-sm'])?>
            </div>
        <?php $form = ActiveForm::end(); ?>

    </div>
</div>
