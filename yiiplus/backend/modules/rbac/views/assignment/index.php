<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel rbac\models\searchs\Assignment */

$this->title = Yii::t('rbac', 'Assignments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content">
    <div class="ibox-content">
        <div class="assignment-index">
            <h1><?= Html::encode($this->title) ?></h1>
             <?php
                    Pjax::begin();
                    echo GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'class' => 'yii\grid\DataColumn',
                                'attribute' => $usernameField,
                                'label' => '用户名',
                            ],
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => '操作',
                                'options' => ['width' => '100px;'],
                                'template' => '{view}',
                                'buttons' => [
                                    'view' => function ($url, $model) {
                                        return Html::a('<i class="fa fa-edit">分配</i>', $url, [
                                            'title' => Yii::t('app', 'view'),
                                            'class' => 'del btn btn-primary btn-xs',
                                        ]);
                                    }
                                ],
                            ],
                        ],
                    ]);
                    Pjax::end();
               ?>
        </div>
    </div>
</div>