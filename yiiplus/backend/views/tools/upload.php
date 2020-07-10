<?php

use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>
<h1>tools/upload</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<p>单文件上传：</p>
<p>
    <?= \yidashi\uploader\SingleWidget::widget([
        'name' => 'SingleWidget'
    ])?>
</p>

<p>多文件上传：</p>
<p>
    <?= \yidashi\uploader\MultipleWidget::widget([
        'name' => 'MultipleWidget'
    ])?>
</p>
<div class="upload-form">

    <?php $form = ActiveForm::begin(); ?>
        <p>或者在activeForm里使用</p>
            <h3>单传</h3>
        <p>

            <?= $form->field($model,'singleUpload')->widget('yidashi\uploader\SingleWidget'); ?>
        </p>
            <h3>多传</h3>
        <p>
            <?= $form->field($model,'multiUpload')->widget('yidashi\uploader\MultipleWidget'); ?>
        </p>
    <?php ActiveForm::end(); ?>
</div>
