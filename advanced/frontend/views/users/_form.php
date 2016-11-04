<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'user_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frozen_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_points')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rank_points')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_time')->textInput() ?>

    <?= $form->field($model, 'last_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_count')->textInput() ?>

    <?= $form->field($model, 'user_rank')->textInput() ?>

    <?= $form->field($model, 'is_special')->textInput() ?>

    <?= $form->field($model, 'ec_salt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'flag')->textInput() ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_validated')->textInput() ?>

    <?= $form->field($model, 'credit_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwd_question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwd_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
