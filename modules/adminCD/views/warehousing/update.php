<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\Warehousing */

$this->title = 'Update Warehousing: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Warehousings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warehousing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
