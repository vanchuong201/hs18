<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\modules\adminCD\models\Product;
use webvimark\modules\UserManagement\models\User;
/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo '<label class="control-label">Tên sản phẩm</label>';
    echo Select2::widget([
        'name' => 'select_product',
        'data' => ArrayHelper::map(Product::findAll(['status'=>Product::STATUS_ACTIVE]), 'id', 'name'),
        'language' => 'vi',
        'options' => ['placeholder' => 'Chọn 1 sản phẩm ...'],
        'pluginOptions' => [
//            'templateResult' => new JsExpression('format'),
//            'templateSelection' => new JsExpression('format'),
//            'escapeMarkup' => $escape,
            'allowClear' => true
        ],
    ]);
    ?>


    <?php echo $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ship_cost')->textInput() ?>

    <?= $form->field($model, 'pay_type')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'other_costs')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seller')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
