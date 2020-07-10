<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Z+后台管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="middle-box text-left loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">Z+</h1>

        </div>
        <h3>欢迎使用 Z+</h3>


    <div class="row">
        <div class="">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('用户名') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('密码') ?>

                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'rememberMe')->checkbox(['class'=>'i-checks'])->label('记住我') ?>
                    </div>
                    <div class="col-md-6">
                        <?= Html::submitButton(Yii::t('common','Login'), ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="">Copyright &copy; 2012-2016 <a href="http://1000xun.findz.cn/" target="_blank">Findz.cn</a>
        </div>
    </div>
</div>
<?=Html::jsFile('@web/js/plugins/iCheck/icheck.min.js')?>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

