<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model rbac\models\Menu */

$this->title = Yii::t('rbac', 'Update Menu').': '.' '.$model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('rbac', 'Update');
?>
<div class="wrapper wrapper-content">

    <div class="ibox-content  menu-update">
        <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    </div>
</div>
