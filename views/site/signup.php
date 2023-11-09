<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Signup';
?>
<div class="site-login">

    <div class="row justify-content-center">
        <div class="col-lg-5">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to signup:</p>
            <?php $form = ActiveForm::begin([
                'id' => 'sign-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput() ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'confirm_password')->passwordInput()->label('Confirm Password') ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Sign up', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
