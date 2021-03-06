<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var itzen\mailer\models\EmailQueue $model
 */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
    'modelClass' => 'Email Queue',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Email Queues'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="email-queue-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
