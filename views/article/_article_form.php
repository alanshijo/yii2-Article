<?php

/** @var $model \app\models\Article */

use \yii\helpers\Html;
?>
<div>
    <a href="<?=\yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]); ?>">
        <h3 class="my-3"><?= Html::encode($model->title); ?></h3>
    </a>
    <div>
        <?= \yii\helpers\StringHelper::truncateWords(Html::encode($model->body), 75)?>
        <a class="text-decoration-none" href="<?=\yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]); ?>">see more</a>
    </div>

    <div class="d-flex flex-row-reverse text-muted">
        <p><b><?= Html::encode(ucwords($model->createdBy->username)); ?></b>, <?= Yii::$app->formatter->asRelativeTime(Html::encode($model->created_at)); ?></p>
    </div>
    <hr/>
</div>
