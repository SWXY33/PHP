<?php

use rbac\AdminAsset;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model rbac\models\AuthItem */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="wrapper wrapper-content">

        <div class="ibox-content">
            <div class="auth-item-view">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a(Yii::t('rbac', 'Update'), ['update', 'id' => $model->name], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?php
                    echo Html::a(Yii::t('rbac', 'Delete'), ['delete', 'id' => $model->name], [
                        'class' => 'btn btn-sm btn-danger',
                        'data-confirm' => Yii::t('rbac', 'Are you sure to delete this item?'),
                        'data-method' => 'post',
                    ]);
                    ?>
                    <?= Html::a(Yii::t('rbac', 'Create'), ['create'], ['class' => 'btn btn-sm btn-success']) ?>
                </p>

                <?php
                echo DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'name',
                        'description:ntext',
                        'ruleName',
                        'data:ntext',
                    ],
                    'template' => '<tr><th style="width:25%">{label}</th><td>{value}</td></tr>'
                ]);
                ?>
                <div class="row">
                    <div class="col-lg-5">
                        <input placeholder="<?= Yii::t('rbac', 'Search for avaliable') ?>" class="form-control search" id="search-avaliable"><br>
                        <select class="form-control list" id="list-avaliable" multiple size="20" style="width: 100%">
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <br><br>
                        <a href="#" id="btn-add" class="btn btn-success btn-assign" data-target="avaliable">&gt;&gt;</a>
                        <br><br>
                        <a href="#" id="btn-remove" class="btn btn-danger btn-assign" data-target="assigned">&lt;&lt;</a>
                    </div>
                    <div class="col-lg-5">
                        <input  placeholder=" <?= Yii::t('rbac', 'Search for assigned') ?>" class="form-control search" id="search-assigned"><br>
                        <select class="form-control list" id="list-assigned" multiple size="20" style="width: 100%">
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
AdminAsset::register($this);
$properties = Json::htmlEncode([
        'roleName' => $model->name,
        'assignUrl' => Url::to(['assign']),
        'searchUrl' => Url::to(['search']),
    ]);
$js = <<<JS
yii.admin.initProperties({$properties});

$('#search-avaliable').keydown(function () {
    yii.admin.searchRole('avaliable');
});
$('#search-assigned').keydown(function () {
    yii.admin.searchRole('assigned');
});
$('#btn-add').click(function () {
    yii.admin.addChild('assign');
    return false;
});
$('#btn-remove').click(function () {
    yii.admin.addChild('remove');
    return false;
});

yii.admin.searchRole('avaliable', true);
yii.admin.searchRole('assigned', true);
JS;
$this->registerJs($js);
