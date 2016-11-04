<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'email:email',
            'user_name',
            'password',
            'question',
            // 'answer',
            // 'sex',
            // 'birthday',
            // 'user_money',
            // 'frozen_money',
            // 'pay_points',
            // 'rank_points',
            // 'reg_time',
            // 'last_login',
            // 'last_time',
            // 'last_ip',
            // 'visit_count',
            // 'user_rank',
            // 'is_special',
            // 'ec_salt',
            // 'salt',
            // 'parent_id',
            // 'flag',
            // 'alias',
            // 'msn',
            // 'qq',
            // 'office_phone',
            // 'home_phone',
            // 'mobile_phone',
            // 'is_validated',
            // 'credit_line',
            // 'passwd_question',
            // 'passwd_answer',
            // 'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
