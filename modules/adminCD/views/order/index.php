<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\adminCD\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Order', ['value'=>Url::to('order/create'), 'class' => 'btn btn-success','id'=>'create_order']) ?>
    </p>

    <?php
    Modal::begin([
        'header'=>'<h4>Tạo đơn hàng</h4>',
        'id'=>'create_order_modal',
        'size'=>'modal-lg',
    ]);
    echo "<div id='create_order_modal_content'></div>";
    Modal::end();
    ?>


<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'full_name',
            'phone',
            'facebook',
            // 'email:email',
            // 'city_id',
            // 'district_id',
            // 'address',
            // 'ship_cost',
            // 'pay_type',
            // 'status',
            // 'other_costs',
            // 'note:ntext',
            // 'seller',
            // 'created_by',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>

<?php
$script = <<< JS
// Here you right all your javascript stuff

JS;
$this->registerJs($script);
?>