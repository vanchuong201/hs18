<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\adminCD\models\Warehousing */

$this->title = 'Create Warehousing';
$this->params['breadcrumbs'][] = ['label' => 'Warehousings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehousing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
