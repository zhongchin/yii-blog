<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\module\Front\Modules\User\models\AdminUser */

$this->title = 'Update Admin User: ' . ' ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Admin Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
