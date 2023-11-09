<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">
        <small>
            Created at: <b><?= Yii::$app->formatter->asRelativeTime(Html::encode($model->created_at)); ?></b>
            by: <b><?= Html::encode(ucwords($model->createdBy->username)); ?></b>
        </small>
    </p>
    <?php if(!Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'slug' => $model->slug], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif; ?>
    <div style="text-align: justify;">
        <?= Html::encode($model->body); ?>
    </div>

</div>
