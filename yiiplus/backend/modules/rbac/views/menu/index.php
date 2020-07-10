<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel rbac\models\searchs\Menu */

$this->title = Yii::t('rbac', 'Menus');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="wrapper wrapper-content">
    <div class="ibox-content">
        <div class="menu-index">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                <?= Html::a('新菜单', ['create'], ['class' => 'btn btn-sm btn-info']) ?>
            </p>
            <?php
                Pjax::begin([
                    'enablePushState' => false,
                ]);
            ?>
            <?= \backend\widgets\grid\TreeGrid::widget([
                'dataProvider' => $dataProvider,
                'keyColumnName' => 'id',
                'parentColumnName' => 'parent',
                'parentRootValue' => null, //first parentId value
                'pluginOptions' => [
                    'initialState' => 'collapse',
                ],
                'columns' => [
                    'name',
                    'route',
                    [
                        'attribute' => 'icon',
                        'value' => function($model) {
                            return Html::icon($model->icon);
                        },
                        'format' => 'raw'
                    ],
                    [
                        'class' => 'backend\widgets\grid\PositionColumn',
                        'attribute' => 'order'
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'header' => '操作',
                        'options' => ['width' => '100px;'],
                        'template' => '{create} {view} {update} {delete}',
                        'buttons' => [
                            'create' => function($url, $model) {
                                return Html::a(Html::icon('plus'), ['create', 'id' => $model->id], ['class' => 'btn btn-default btn-xs']);
                            },
                            'view' => function ($url, $model) {
                                return Html::a('<i class="fa fa-edit">查看</i>', $url, [
                                    'title' => Yii::t('yii', 'view'),
                                    'class' => 'del btn btn-primary btn-xs',
                                ]);
                            },
                            'update' => function ($url, $model) {
                                return Html::a('<i class="fa fa-unlock-alt">更新</i>', $url, [
                                    'title' => Yii::t('yii', 'update'),
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
                                return Html::a('<i class="fa fa-close">删除</i>', $url,$options);
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
