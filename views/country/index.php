<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this \yii\web\View */
/* @var $countries \app\models\Country[]|array|\yii\db\ActiveRecord[] */
/* @var $pagination \yii\data\Pagination */
?>

    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->code} ({$country->name})") ?>
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>