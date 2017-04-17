<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\adminCD\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
//        'layout' => "{items}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
            ],
            'name',
            'name_admin',
            [
                'label'=>"Danh mục",
                'attribute'=>'cat_id',
                'value'=>'cateById.name',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\modules\adminCD\models\Category::getAllCate(),'id','name')
            ],
            'quantity_left',
            'description:ntext',
            // 'status',
            // 'price',
            // 'price_saleoff',
            // 'created_at',
            // 'updated_at',
            // 'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
