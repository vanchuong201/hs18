<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\adminCD\models\Product;
use app\modules\adminCD\models\Unit;
use app\modules\adminCD\models\Category;

/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\Product */
/* @var $form yii\widgets\ActiveForm */
/* @var $listAllCate */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_admin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'unit')->dropDownList(ArrayHelper::map(Unit::findAll('1'),'id', 'name'),['prompt'=>'Chọn đơn vị tính']) ?>

    <?= $form->field($model, 'cat_id')->dropDownList(ArrayHelper::map(Category::getAllCate(),'id','name'), ['prompt'=>'Chọn danh mục']) ?>

    <?= $form->field($model, 'status')->dropDownList(Product::getStatusList(),['options' => [Product::STATUS_ACTIVE => ['selected'=>true]]]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'price_saleoff')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
