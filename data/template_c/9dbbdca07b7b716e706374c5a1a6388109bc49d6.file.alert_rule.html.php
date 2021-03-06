<?php /* Smarty version Smarty-3.1.16, created on 2015-10-07 08:58:36
         compiled from "tpl\application\alert_rule.html" */ ?>
<?php /*%%SmartyHeaderCode:1080956133700e54494-96098840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dbbdca07b7b716e706374c5a1a6388109bc49d6' => 
    array (
      0 => 'tpl\\application\\alert_rule.html',
      1 => 1444201043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080956133700e54494-96098840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56133701459e93_68226542',
  'variables' => 
  array (
    'appinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56133701459e93_68226542')) {function content_56133701459e93_68226542($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>报警规则设定</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->

  <link href="libs/ORG/css/bootstrap.min.css" rel="stylesheet">
  <link href="libs/ORG/css/bootstrap-switch.css" rel="stylesheet">
  <link href="libs/ORG/css/bootstrap-table.css" rel="stylesheet">
  <link rel="stylesheet" href="libs/ORG/css/jquery.cxcalendar.css">

  <!--<script type="text/javascript" src="libs/ORG/js/jquery.js"></script>-->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script type="text/javascript" src="libs/ORG/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="libs/ORG/js/bootstrap-switch.js"></script>
  <script type="text/javascript" src="libs/ORG/js/bootstrap-table.js"></script>
  <script src="libs/ORG/js/jquery.cxcalendar.js"></script>
  
  
  <!--<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>-->

  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
    
    .sidebar-nav {
      padding: 9px 0;
    }
    
    @media (max-width: 980px) {
      /* Enable use of floated navbar text */
      .navbar-text.pull-right {
        float: none;
        padding-left: 5px;
        padding-right: 5px;
      }
    }
  </style>
  <link href="libs/ORG/css/bootstrap-responsive.css" rel="stylesheet">

</head>

<body  style="overflow:hidden">
  <script>
    window.onload=function(){
         getRule();
         get_contact_table();
     };
  </script>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">TAM</a>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2">
        <div class="well sidebar-nav">
          <ul class="nav nav-list">
            <li>
              <h4>应用名称:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appinfo']->value['appname'])===null||$tmp==='' ? '' : $tmp);?>
</h4>
              <p>应用级别:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appinfo']->value['applevel'])===null||$tmp==='' ? '' : $tmp);?>
</p>
              <p>应用信息:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appinfo']->value['appmsg'])===null||$tmp==='' ? '' : $tmp);?>
</p>
            </li>
            <li class="nav-header">选择操作</li>
            <li ><a href="index.php?controller=app&method=contral"><i class="icon-align-justify"></i> 监控列表</a></li>
            <li class="active"><a href="#"><i class="icon-pencil"></i> 报警规则设定</a></li>
            <li><a href="index.php?controller=app&method=alertmsg"><i class="icon-eye-open"></i> 报警信息查看</a></li>
            <li><a href="index.php?controller=app&method=console"><i class="icon-fullscreen"></i> 实时信息浏览</a></li>
            <li><a href="index.php?controller=app&method=profile"><i class="icon-user"></i> 管理员信息</a></li>
            <hr/>
            <div align="center">
              <a class="btn btn-block  btn-danger" align="center" href="index.php?controller=admin&method=logout">退出</a>
            </div>
          </ul>
        </div>
        <!--/.well -->
      </div>
      <!--/span-->
      <div class="span10">
        <h4>报警规则</h4>
        <p>通过报警规则定制是对TAM接收到的关于应用的事件，通过配置的规则进行分析，并生成报警的机制.</p>
        <div class="bs-docs-example">
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">关键字报警机制</a></li>
            <li class=""><a href="#profile" data-toggle="tab">报警开关</a></li>
            <li class=""><a href="#contact" data-toggle="tab">联系人列表</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <?php echo $_smarty_tpl->getSubTemplate ('application/make_rule.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('application/switch_rule.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('application/contact_rule.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        </div>
      </div>
      <!--/span-->
    </div>
    <!--/row-->
    <script>
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
       if($(e.target).text()=='关键字报警机制' ){
          getRule();
       }
       if($(e.target).text()=='报警开关' ){
          switchRule();
       }
      })
    </script>
    <hr>

    <footer>
      <p>&copy; cauc 2015</p>
    </footer>

  </div>
  <!--/.fluid-container-->

  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->



</body>

</html><?php }} ?>
