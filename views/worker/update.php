<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Worker */

$this->title = 'Update Worker: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worker-update">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model,
        'adding' => $adding,
    ]) ?>

</div>
