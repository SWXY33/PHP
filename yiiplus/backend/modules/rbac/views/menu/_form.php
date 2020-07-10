<?php

use rbac\AutocompleteAsset;
use rbac\models\Menu;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model rbac\models\Menu */
/* @var $form yii\widgets\ActiveForm */

?>
    <div class="wrapper wrapper-content">
        <div class="ibox-content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>

                    <?= $form->field($model, 'parent')->dropDownList($model::getDropDownList(\common\helpers\Tree::build($model::find()->asArray()->all(), 'id', 'parent', 'children', null)), ['encode' => false, 'prompt' => '请选择']) ?>

                    <?= $form->field($model, 'route')->textInput(['id' => 'route']) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'icon')->widget(\backend\widgets\iconpicker\IconPickerWidget::className()) ?>

                    <?= $form->field($model, 'order')->input('number') ?>

                    <?= $form->field($model, 'data')->textarea(['rows' => 4]) ?>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('rbac', 'Create') : Yii::t('rbac', 'Update'), ['class' => $model->isNewRecord
                    ? 'btn btn-sm btn-primary' : 'btn btn-sm btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
<?php
AutocompleteAsset::register($this);

$options = Json::htmlEncode([
    'source' => Menu::getSavedRoutes(),
]);
$this->registerJs("$('#route').autocomplete($options);");
