<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'name_admin',
            'quantity_left',
            'description:ntext',
            [
                'label' => 'Đơn vị tính',
                'attribute'=>'unitById.name',
            ],
            'cat_id',
            'status',
            'price',
            'price_saleoff',
            'created_at',
            'updated_at',
            'created_by',
        ],
    ]) ?>

    <?php
    echo Yii::$app->formatter->asCurrency('190000','VND', [],['text'=>'231231'])
    ?>
</div>
