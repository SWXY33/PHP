<?php

use rbac\AdminAsset;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model yii\web\IdentityInterface */
$userName = $model->{$usernameField};
if (!empty($fullnameField)) {
    $userName .= ' (' . ArrayHelper::getValue($model, $fullnameField) . ')';
}
$userName = Html::encode($userName);

$this->title = Yii::t('rbac', 'Assignments'). ' : ' . $userName;;
$this->params['breadcrumbs'][] = $this->title;
$animateIcon = ' <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i>';
?>
    <div class="wrapper wrapper-content">

        <div class="ibox-content">

            <div class="assignment-index">
                <h1><?= $this->title ?></h1>

                <div class="row">
                    <div class="col-lg-5">
                        <input id="search-avaliable" class="form-control search" data-target="avaliable"
                               placeholder="<?= Yii::t('rbac', 'Avaliable') ?>"
                        ><br>
                        <select id="list-avaliable" class="form-control list" data-target="avaliable" multiple size="20" style="width: 100%">
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <br><br>
                        <a href="#" id="btn-assign" class="btn btn-success btn-assign">&gt;&gt;</a><br>
                        <br><br>
                        <a href="#" id="btn-revoke" class="btn btn-danger btn-assign">&lt;&lt;</a>
                    </div>
                    <div class="col-lg-5">
                        <input id="search-assigned" placeholder="<?= Yii::t('rbac', 'Assigned') ?>" class="form-control search"><br>
                        <select id="list-assigned" class="form-control list" data-target="assigned" multiple size="20" style="width: 100%">
                        </select>
                    </div>
                </div>


            </div>
        </div>
    </div>
<?php
AdminAsset::register($this);
$properties = Json::htmlEncode([
        'userId' => $model->{$idField},
        'assignUrl' => Url::to(['assign']),
        'searchUrl' => Url::to(['search']),
    ]);
$js = <<<JS
yii.admin.initProperties({$properties});

$('#search-avaliable').keydown(function () {
    yii.admin.searchAssignmet('avaliable');
});
$('#search-assigned').keydown(function () {
    yii.admin.searchAssignmet('assigned');
});
$('#btn-assign').click(function () {
    yii.admin.assign('assign');
    return false;
});
$('#btn-revoke').click(function () {
    yii.admin.assign('revoke');
    return false;
});

yii.admin.searchAssignmet('avaliable', true);
yii.admin.searchAssignmet('assigned', true);
JS;
$this->registerJs($js);
