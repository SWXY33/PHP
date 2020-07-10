<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/22/022
 * Time: 10:03
 */
use rbac\components\MenuHelper;
use yii\helpers\Html;
use yii\helpers\Url;

$menuGroups = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, function ($menu){
    return [
        'id' => $menu['id'],
        'name' => $menu['name'],
        'icon' => $menu['icon'],
    ];
});
//格式化数组
$newAllMenu=[];
if(!empty($allmenu)){
     $newAllMenu = [];
     foreach ($allmenu as $value) {
         $newAllMenu[$value['id']] = $value;
     }
}
?>
<?php $this->beginBlock('top-menu') ?>
<div>
        <button class="btn btn-default  btn-sm navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="caret"></span>
        </button>
</div>
<nav class="main-header navbar-collapse collapse navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <!--<nav class="navbar-collapse collapse" role="navigation" style="margin-bottom: 0">-->

    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn" href="#"><i class="fa fa-bars"></i> </a>
        <ul class="nav navbar-nav">
            <?php foreach ($menuGroups as $key => $menuGroup) : ?>
                <li <?php if ($key == 0) {echo 'class="active"';} ?>><a href="#menu-group-<?= $menuGroup['id'] ?> " data-toggle="tab" aria-expanded="true"><?= Html::icon($menuGroup['icon']) ?> <?= $menuGroup['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
        <!--<form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
            </div>
        </form>
        -->
    </div>



        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="http://www.51siyuan.cn" target="_blank" data-not-iframe="1"><i class="fa fa-home"></i></a></li>
                <li id="log-dropdown" class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            你有0条日志                        </li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                </ul>
                                <div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">

                                </div>
                                <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;">

                                </div>
                            </div>
                        </li>
                        <li class="log-footer">
                            <a href="##" title="错误日志" target="_blank">查看全部</a>                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo Url::to('@web/img/profile_small.jpg');?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo Url::to('@web/img/profile_small.jpg');?>" class="img-circle" alt="User Image">
                            <p>
                                <?= $user_info?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a class="btn btn-default btn-flat" href="/admin/user/default/reset-password?id=48" title="修改密码" target="_blank">修改密码</a>                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="<?=Url::toRoute('site/logout')?>" data-method="post">登出</a>                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="<?=Url::toRoute('site/logout')?>" data-method="post"><i class="fa  fa-sign-out"></i></a></li>
            </ul>
        </div>
    <!--
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown hidden-xs">
            <a class="right-sidebar-toggle" aria-expanded="false">
                <i class="fa fa-tasks"></i> 主题
            </a>
        </li>
    </ul>
    -->
</nav>
<?php $this->endBlock() ?>
<?php $this->beginBlock('sidebar-menu') ?>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i></div>
        <div class="sidebar-collapse" >
            <div class="tab-content">
                <?php foreach ($menuGroups as $key => $menuGroup): ?>
                     <ul id="menu-group-<?= $menuGroup['id'] ?>" class="nav side-menu tab-pane <?php if ($key == 0) {echo 'active';} ?>" >
                            <?php if(!empty($newAllMenu[$menuGroup['id']])):?>
                                    <?php
                                        $v0=$newAllMenu[$menuGroup['id']];
                                        if(array_key_exists('_child',$v0))
                                        {
                                            $v1=$v0['_child'];
                                        }
                                        else
                                        {
                                            $v1=$v0;
                                        }
                                        foreach($v0['_child'] as $v1):
                                    ?>
                                        <li class="active"><!--一级级菜单-->
                                            <?php if(array_key_exists('_child',$v1)): ?>
                                                <a data-toggle="tooltip" data-placement="right" title="<?= $v1['name']?>" href="#">
                                                    <?= Html::icon($v1['icon']) ?>
                                                    <span class="nav-label"><?= $v1['name']?></span>
                                                    <span class="fa arrow"></span>
                                                </a>
                                            <?php else:?>
                                                <a data-toggle="tooltip" data-placement="right" title="<?= $v1['name']?>" class="J_menuItem" href="<?= Url::toRoute($v1['route']);?>">
                                                    <?= Html::icon($v1['icon']) ?>
                                                    <span class="nav-label"><?= $v1['name']?></span>
                                                </a>
                                            <?php endif;?>
                                            <?php if(array_key_exists('_child',$v1)):?>
                                                <ul class="nav nav-second-level">
                                                    <?php  foreach($v1['_child'] as $v2):?>
                                                        <?php //$data2 = json_decode($v2['data'], true);?>
                                                        <?php if(array_key_exists('_child',$v2)):?>
                                                            <li  class="active"><!--二级菜单-->
                                                                <a data-toggle="tooltip" data-placement="right" title="<?= $v2['name']?>" href="#">
                                                                    <?php if($v2['icon']):?>
                                                                        <?= Html::icon($v2['icon']) ?>

                                                                    <?php endif;?>

                                                                    <span class="nav-label"><?= $v2['name']?></span>

                                                                    <span class="fa arrow"></span>
                                                                </a>
                                                                <?php if(!empty($v2['_child'])):?>
                                                                    <ul class="nav nav-third-level ">
                                                                        <?php  foreach($v2['_child'] as $v3):?>
                                                                            <li ><!--三级菜单-->
                                                                                <a data-toggle="tooltip" data-placement="right" title="<?= $v3['name']?>"  class="J_menuItem" href="<?= Url::toRoute($v3['route']);?>" data-index="0">
                                                                                    <?php if($v3['icon']):?>
                                                                                        <?= Html::icon($v3['icon']) ?>
                                                                                    <?php endif;?>
                                                                                    <span class="nav-label"><?= $v3['name']?></span>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach;?>
                                                                    </ul>
                                                                <?php  endif;?>
                                                            </li>
                                                        <?php else:?>
                                                            <li ><!--二级菜单-->
                                                                <a data-toggle="tooltip" data-placement="right" title="<?= $v2['name']?>" class="J_menuItem" href="<?= Url::toRoute($v2['route']);?>" data-index="0">
                                                                    <?php if($v2['icon']):?>
                                                                        <?= Html::icon($v2['icon']) ?>
                                                                    <?php endif;?>
                                                                    <span class="nav-label"><?= $v2['name']?></span>
                                                                </a>
                                                            </li>
                                                        <?php endif;?>
                                                    <?php endforeach;?>
                                                </ul>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                        </li>
                            <?php endif;?>

                        </ul>
                <?php endforeach;?>
            </div>
        </div>
    </nav>

<?php $this->endBlock() ?>
<?php $this->beginBlock('sidebar-menu-test') ?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i>
    </div>
    <div class="sidebar-collapse" >
        <ul class="nav side-menu">
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">主页</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="index_v1.html" data-index="0">主页示例一</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="index_v2.html">主页示例二</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="index_v3.html">主页示例三</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="index_v4.html">主页示例四</a>
                    </li>
                    <li>
                        <a href="index_v5.html" target="_blank">主页示例五</a>
                    </li>
                </ul>

            </li>
            <li>
                <a class="J_menuItem" href="layouts.html"><i class="fa fa-columns"></i> <span class="nav-label">布局</span></a>
            </li>
        </ul>
        <ul class="nav side-menu" id="side-menu2">
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">主页</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="index_v1.html" data-index="0">主页示例一</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="index_v2.html">主页示例二</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="index_v3.html">主页示例三</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="index_v4.html">主页示例四</a>
                    </li>
                    <li>
                        <a href="index_v5.html" target="_blank">主页示例五</a>
                    </li>
                </ul>

            </li>
            <li>
                <a class="J_menuItem" href="layouts.html"><i class="fa fa-columns"></i> <span class="nav-label">布局</span></a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa fa-bar-chart-o"></i>
                    <span class="nav-label">统计图表</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="graph_echarts.html">百度ECharts</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="graph_flot.html">Flot</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="graph_morris.html">Morris.js</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="graph_rickshaw.html">Rickshaw</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="graph_peity.html">Peity</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="graph_sparkline.html">Sparkline</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="graph_metrics.html">图表组合</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="mailbox.html">收件箱</a>
                    </li>
                    <li><a class="J_menuItem" href="mail_detail.html">查看邮件</a>
                    </li>
                    <li><a class="J_menuItem" href="mail_compose.html">写信</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="form_basic.html">基本表单</a>
                    </li>
                    <li><a class="J_menuItem" href="form_validate.html">表单验证</a>
                    </li>
                    <li><a class="J_menuItem" href="form_advanced.html">高级插件</a>
                    </li>
                    <li><a class="J_menuItem" href="form_wizard.html">表单向导</a>
                    </li>
                    <li>
                        <a href="#">文件上传 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="form_webuploader.html">百度WebUploader</a>
                            </li>
                            <li><a class="J_menuItem" href="form_file_upload.html">DropzoneJS</a>
                            </li>
                            <li><a class="J_menuItem" href="form_avatar.html">头像裁剪上传</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">编辑器 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="form_editors.html">富文本编辑器</a>
                            </li>
                            <li><a class="J_menuItem" href="form_simditor.html">simditor</a>
                            </li>
                            <li><a class="J_menuItem" href="form_markdown.html">MarkDown编辑器</a>
                            </li>
                            <li><a class="J_menuItem" href="code_editor.html">代码编辑器</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="suggest.html">搜索自动补全</a>
                    </li>
                    <li><a class="J_menuItem" href="layerdate.html">日期选择器layerDate</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="contacts.html">联系人</a>
                    </li>
                    <li><a class="J_menuItem" href="profile.html">个人资料</a>
                    </li>
                    <li>
                        <a href="#">项目管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="projects.html">项目</a>
                            </li>
                            <li><a class="J_menuItem" href="project_detail.html">项目详情</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="teams_board.html">团队管理</a>
                    </li>
                    <li><a class="J_menuItem" href="social_feed.html">信息流</a>
                    </li>
                    <li><a class="J_menuItem" href="clients.html">客户管理</a>
                    </li>
                    <li><a class="J_menuItem" href="file_manager.html">文件管理器</a>
                    </li>
                    <li><a class="J_menuItem" href="calendar.html">日历</a>
                    </li>
                    <li>
                        <a href="#">博客 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="blog.html">文章列表</a>
                            </li>
                            <li><a class="J_menuItem" href="article.html">文章详情</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="#">时间轴 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="timeline.html">时间轴</a>
                            </li>
                            <li><a class="J_menuItem" href="timeline_v2.html">时间轴v2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="pin_board.html">标签墙</a>
                    </li>
                    <li>
                        <a href="#">单据 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="invoice.html">单据</a>
                            </li>
                            <li><a class="J_menuItem" href="invoice_print.html">单据打印</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="search_results.html">搜索结果</a>
                    </li>
                    <li><a class="J_menuItem" href="forum_main.html">论坛</a>
                    </li>
                    <li>
                        <a href="#">即时通讯 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="chat_view.html">聊天窗口</a>
                            </li>
                            <li><a class="J_menuItem" href="webim.html">layIM</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">登录注册相关 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="login.html" target="_blank">登录页面</a>
                            </li>
                            <li><a href="login_v2.html" target="_blank">登录页面v2</a>
                            </li>
                            <li><a href="register.html" target="_blank">注册页面</a>
                            </li>
                            <li><a href="lockscreen.html" target="_blank">登录超时</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="404.html">404页面</a>
                    </li>
                    <li><a class="J_menuItem" href="500.html">500页面</a>
                    </li>
                    <li><a class="J_menuItem" href="empty_page.html">空白页</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="typography.html">排版</a>
                    </li>
                    <li>
                        <a href="#">字体图标 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a class="J_menuItem" href="fontawesome.html">Font Awesome</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="glyphicons.html">Glyphicon</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="iconfont.html">阿里巴巴矢量图标库</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">拖动排序 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="draggable_panels.html">拖动面板</a>
                            </li>
                            <li><a class="J_menuItem" href="agile_board.html">任务清单</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="buttons.html">按钮</a>
                    </li>
                    <li><a class="J_menuItem" href="tabs_panels.html">选项卡 &amp; 面板</a>
                    </li>
                    <li><a class="J_menuItem" href="notifications.html">通知 &amp; 提示</a>
                    </li>
                    <li><a class="J_menuItem" href="badges_labels.html">徽章，标签，进度条</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="grid_options.html">栅格</a>
                    </li>
                    <li><a class="J_menuItem" href="plyr.html">视频、音频</a>
                    </li>
                    <li>
                        <a href="#">弹框插件 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="layer.html">Web弹层组件layer</a>
                            </li>
                            <li><a class="J_menuItem" href="modal_window.html">模态窗口</a>
                            </li>
                            <li><a class="J_menuItem" href="sweetalert.html">SweetAlert</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">树形视图 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="jstree.html">jsTree</a>
                            </li>
                            <li><a class="J_menuItem" href="tree_view.html">Bootstrap Tree View</a>
                            </li>
                            <li><a class="J_menuItem" href="nestable_list.html">nestable</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="toastr_notifications.html">Toastr通知</a>
                    </li>
                    <li><a class="J_menuItem" href="diff.html">文本对比</a>
                    </li>
                    <li><a class="J_menuItem" href="spinners.html">加载动画</a>
                    </li>
                    <li><a class="J_menuItem" href="widgets.html">小部件</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="table_basic.html">基本表格</a>
                    </li>
                    <li><a class="J_menuItem" href="table_data_tables.html">DataTables</a>
                    </li>
                    <li><a class="J_menuItem" href="table_jqgrid.html">jqGrid</a>
                    </li>
                    <li><a class="J_menuItem" href="table_foo_table.html">Foo Tables</a>
                    </li>
                    <li><a class="J_menuItem" href="table_bootstrap.html">Bootstrap Table
                            <span class="label label-danger pull-right">推荐</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">相册</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="basic_gallery.html">基本图库</a>
                    </li>
                    <li><a class="J_menuItem" href="carousel.html">图片切换</a>
                    </li>
                    <li><a class="J_menuItem" href="blueimp.html">Blueimp相册</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="J_menuItem" href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="form_builder.html">表单构建器</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<?php $this->endBlock() ?>