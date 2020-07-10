<?php

use rbac\AdminAsset;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\YiiAsset;

/*
 * @var yii\web\View $this
 */
$this->title = Yii::t('rbac', 'Routes');
$this->params['breadcrumbs'][] = $this->title;

?>

    <div class="wrapper wrapper-content">

        <div class="ibox-content">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                <?= Html::a(Yii::t('rbac', 'Create Route'), ['create'], ['class' => 'btn btn-sm btn-info']) ?>
            </p>
            <div class="row">
                <div class="col-sm-5">
                    <div class="input-group">
                        <input class="form-control search" id="search-avaliable" data-target="avaliable"
                               placeholder="<?= Yii::t('rbac', 'Avaliable') ?>">
                        <span class="input-group-btn">
                            <?= Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['refresh'], [
                                'class' => 'btn btn-default',
                                'id' => 'btn-refresh'
                            ]) ?>
                        </span>
                    </div>
                    <select class="form-control list" id="list-avaliable" multiple size="20" style="width: 100%">
                    </select>
                </div>
                <div class="col-sm-1">
                    <br><br>
                    <?= Html::a('&gt;&gt;', ['assign'], [
                        'class' => 'btn btn-success btn-assign',
                        'data-target' => 'avaliable',
                        'title' => Yii::t('rbac', 'Assign'),
                        'id'=>"btn-add",
                    ]) ?>
                    <br><br>
                    <?= Html::a('&lt;&lt;', ['remove'], [
                        'class' => 'btn btn-danger btn-assign',
                        'data-target' => 'assigned',
                        'title' => Yii::t('rbac', 'Remove'),
                        'id'=>"btn-remove",
                    ]) ?>
                </div>
                <div class="col-sm-5">
                    <input id="search-assigned" class="form-control search" data-target="assigned"
                           placeholder="<?= Yii::t('rbac', 'Assigned') ?>">
                    <select class="form-control list" data-target="assigned" id="list-assigned" multiple size="20" style="width: 100%"></select>
                </div>
            </div>
        </div>
    </div>
<?php
AdminAsset::register($this);
$properties = Json::htmlEncode([
    'assignUrl' => Url::to(['assign']),
    'searchUrl' => Url::to(['search']),
]);
$js = <<<JS

yii.admin.initProperties({$properties});

$('#search-avaliable').keydown(function () {
    yii.admin.searchRoute('avaliable');
});
$('#search-assigned').keydown(function () {
    yii.admin.searchRoute('assigned');
});
$('#btn-add').click(function () {
     yii.admin.assignRoute('assign');
    return false;
});
$('#btn-remove').click(function () {
    yii.admin.assignRoute('remove');
    return false;
});
$('#btn-refresh').click(function () {
    yii.admin.searchRoute('avaliable',1);
    return false;
});

yii.admin.searchRoute('avaliable', 0, true);
yii.admin.searchRoute('assigned', 0, true);
JS;
$this->registerJs($js);
