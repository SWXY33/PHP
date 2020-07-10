<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model rbac\models\Menu */

$this->title = Yii::t('rbac', 'Create Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content">
    <div class="ibox-content menu-create">
        <h1><?= Html::encode($this->title) ?></h1>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
    </div>
</div>
