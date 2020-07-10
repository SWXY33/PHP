<?php
use yii\helpers\Html;

/*
 * @var yii\web\View $this
 * @var rbac\models\AuthItem $model
 */

$this->title = Yii::t('rbac', 'Create Role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Roles'), 'url' => ['index']];
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
