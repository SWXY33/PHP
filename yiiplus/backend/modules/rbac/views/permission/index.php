<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel rbac\models\searchs\AuthItem */

$context = $this->context;
$labels = $context->labels();
$this->title = Yii::t('rbac', $labels['Items']);
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('content-header') ?>
<?= $this->title . ' ' . Html::a(Yii::t('yii', '新权限'), ['create'], ['class' => 'btn btn-primary btn-flat btn-xs']) ?>
<?php $this->endBlock() ?>
<div class="wrapper wrapper-content">
    <div class="ibox-content">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a(Yii::t('rbac', 'Create ' . $labels['Item']), ['create'], ['class' => 'btn btn-sm btn-info']) ?>
        </p>
        <?php
        Pjax::begin([
            'enablePushState' => false,
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'name',
                    'label' => Yii::t('rbac', 'Name'),
                ],
                [
                    'attribute' => 'description',
                    'label' => Yii::t('rbac', 'Description'),
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => '操作',
                    'options' => ['width' => '100px;'],
                    'template' => '{view} {update} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a('<i class="fa fa-edit">查看</i>', $url, [
                                'title' => Yii::t('app', 'view'),
                                'class' => 'del btn btn-primary btn-xs',
                            ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::a('<i class="fa fa-unlock-alt">更新</i>', $url, [
                                'title' => Yii::t('app', 'update'),
                                'class' => 'del btn btn-success btn-xs',
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            $options = [
                                'title' => Yii::t('yii', 'Delete'),
                                'aria-label' => Yii::t('yii', 'Delete'),
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                'data-method' => 'post',
                                'data-pjax' => '0',
                                'class' => 'del btn btn-default btn-xs',
                            ];
                            return Html::a('<i class="fa fa-close">删除</i>', $url, $options);
                        }
                    ],
                ],
            ],
        ]);
        Pjax::end();
        ?>
    </div>
</div>
