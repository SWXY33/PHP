<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model rbac\models\AuthItem */

$this->title = Yii::t('rbac', 'Create Permission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content">

    <div class="ibox-content">
        <div class="auth-item-create">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php echo $this->render('_form', [
                'model' => $model,
            ]); ?>

        </div>
    </div>
</div>