<?php /* Smarty version Smarty-3.1.16, created on 2015-10-07 08:58:43
         compiled from "tpl\application\console.html" */ ?>
<?php /*%%SmartyHeaderCode:1253356133755736985-10811707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b64430d9079d0318b7984797d7679d5813b25e9' => 
    array (
      0 => 'tpl\\application\\console.html',
      1 => 1444201056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253356133755736985-10811707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5613375580f7a4_09242724',
  'variables' => 
  array (
    'appinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613375580f7a4_09242724')) {function content_5613375580f7a4_09242724($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>实时信息浏览</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="libs/ORG/css/bootstrap.css" rel="stylesheet">
  <link href="libs/ORG/css/bootstrap-switch.css" rel="stylesheet">
  <link href="libs/ORG/css/bootstrap-table.css" rel="stylesheet">
  <script type="text/javascript" src="libs/ORG/js/jquery.js"></script>
  <script type="text/javascript" src="libs/ORG/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="libs/ORG/js/bootstrap-switch.js"></script>
  <script type="text/javascript" src="libs/ORG/js/bootstrap-table.js"></script>


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

<body body style="overflow:hidden">

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
            <li><a href="index.php?controller=app&method=index"><i class="icon-pencil"></i> 报警规则设定</a></li>
            <li><a href="index.php?controller=app&method=alertmsg"><i class="icon-eye-open"></i> 报警信息查看</a></li>
            <li class="active"><a href="#"><i class="icon-fullscreen"></i> 实时信息浏览</a></li>
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
        <h4>事件信息</h4>
        <p>报警信息实时反映从服务器抓取的出错信息.</p>
        <div id="alertmsg-toolbar">        
        </div>       
        <table id="alert_table" class="table table-bordered table-hover" data-cache="false" data-toolbar="#alertmsg-toolbar" data-height="499">
         
        </table>       
        </form>
        
        <script>
          var t;
           window.onload=function(){
              getAlertMsg();
              // iID=setInterval(getAlertMsg, 2000);
           };
           function stopGetMsg(){
              // clearInterval(iID);
           //   clearTimeout(t);
           }
           function levelFormatter(value) {
        // 16777215 == ffffff in decimal
              var level1 = '#7FFFD4';
              var level2 = '#4EEE94';
              var level3 = '#6495ED';
              var level4 = '#FFD700';
              var level5 = '#FF8247';
              if(value=='1'){
                return '<div  style="background: ' + level1 + '">' +                     
                        value +
                        '</div>';
              }
              if(value=='2'){
                return '<div  style="background: ' + level2 + '">' +                     
                        value +
                        '</div>';
              }
              if(value=='3'){
                return '<div  style="background: ' + level3 + '">' +                     
                        value +
                        '</div>';
              }
              if(value=='4'){
                return '<div  style="background: ' + level4 + '">' +                     
                        value +
                        '</div>';
              }
              if(value=='5'){
                return '<div  style="background: ' + level5 + '">' +                     
                        value +
                        '</div>';
              }
              
            }
            function getAlertMsg(){
                var xmlhttp;
                if (window.XMLHttpRequest)
                  {
                    xmlhttp=new XMLHttpRequest();
                  }
                else
                  {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                xmlhttp.onreadystatechange=function()
                  {
                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                      {
                        
                          var str='{"data":'+xmlhttp.responseText+'}'
                          var obj = eval ("(" + str + ")")
                           // alert(JSON.stringify(obj.data) );
                          $('#alert_table').bootstrapTable('destroy');
                          $('#alert_table').bootstrapTable({
                           
                              pagination: true,
                              pageSize: 8,
                              pageList: [10, 25, 50, 100, 200],                                                                
                              minimumCountColumns: 2,
                              clickToSelect: true,
                            
                                columns: [{
                                  field: 'state',
                                  checkbox: true
                                },{
                                  field: 'alert_id',
                                  title: '事件编号',
                                  align: 'center'
                                }, {
                                  field: 'appname',
                                  title: '应用名称',
                                  align: 'center'
                                },{
                                  field: 'effect_start',
                                  title: '开始时间',
                                  align: 'center'
                                },{
                                  field: 'effect_end',
                                  title: '结束时间',
                                  align: 'center'
                                },{
                                  field: 'alert_level',
                                  title: '事件级别',
                                  formatter:'levelFormatter',
                                  align: 'center'
                                },{
                                  field: 'keywords',
                                  title: '事件信息',
                                  align: 'center'
                                },{
                                  field: 'frequence',
                                  title: '事件次数',
                                  align: 'center'
                                },{
                                  field: 'dateline',
                                  title: '接收时间',
                                  align: 'center'
                                },
                                ],
                                data: obj.data
                              });
                              t=setTimeout("getAlertMsg()",2000)
                      }                     
                  }
                xmlhttp.open("POST","index.php?controller=app&method=getConsoleMsg",true);
                xmlhttp.send();      
            }
        </script>
        
      </div>
      <!--/span-->
    </div>
    <!--/row-->

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
