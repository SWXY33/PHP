<?php
use yii\helpers\Html;

/*
 * @var yii\web\View $this
 * @var rbac\models\AuthItem $model
 */
$this->title = Yii::t('rbac', 'Update Role').': '.$model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = Yii::t('rbac', 'Update');
?>
<div class="wrapper wrapper-content">

    <div class="ibox-content">
        <div class="auth-item-update">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php
            echo $this->render('_form', [
                'model' => $model,
            ]);
            ?>
        </div>
    </div>
</div>
