<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use rbac\components\RouteRule;
use rbac\AutocompleteAsset;
use yii\helpers\Json;

/* @var $this yii\web\View */
/* @var $model rbac\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
$context = $this->context;
$labels = $context->labels();
$rules = Yii::$app->getAuthManager()->getRules();
unset($rules[RouteRule::RULE_NAME]);
$source = Json::htmlEncode(array_keys($rules));

$js = <<<JS
    $('#rule_name').autocomplete({
        source: $source,
    });
JS;
AutocompleteAsset::register($this);
$this->registerJs($js);
?>
<div class="auth-item-form">
    <?php $form = ActiveForm::begin(['id' => 'item-form']); ?>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'ruleName')->textInput(['id' => 'rule_name']) ?>

            <?= $form->field($model, 'data')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="form-group">
        <?php
        echo Html::submitButton($model->isNewRecord ? Yii::t('rbac', 'Create') : Yii::t('rbac', 'Update'), [
            'class' => $model->isNewRecord ? 'btn btn-sm btn-success' : 'btn btn-sm btn-primary',
            'name' => 'submit-button'])
        ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

