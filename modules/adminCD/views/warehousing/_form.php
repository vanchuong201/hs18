<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\modules\adminCD\models\Product;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\Warehousing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warehousing-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'product_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Product::findAll(['status'=>Product::STATUS_ACTIVE]), 'id', 'name'),
        'language' => 'vi',
        'options' => ['placeholder' => 'Chọn 1 sản phẩm ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Tên sản phẩm'); ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'imported_at')->textInput() ?>

    <?= $form->field($model, 'imported_by')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
