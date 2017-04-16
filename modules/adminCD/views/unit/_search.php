<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\UnitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'ship') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'loss') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
