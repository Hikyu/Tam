<?php /* Smarty version Smarty-3.1.16, created on 2015-10-07 10:20:02
         compiled from "tpl\application\contral.html" */ ?>
<?php /*%%SmartyHeaderCode:51635614c31567eb42-53770824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c70e3fb60259c8c17695ee2078ec7f1753e3986' => 
    array (
      0 => 'tpl\\application\\contral.html',
      1 => 1444205999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51635614c31567eb42-53770824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5614c315701e75_57864744',
  'variables' => 
  array (
    'appinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5614c315701e75_57864744')) {function content_5614c315701e75_57864744($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>监控列表</title>
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


  </style>
  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
    
    .a {
      background-color: #00CD66;
      width: 100px;
      height: 100px;
      float: left;
      margin: 10px;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
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
            <li class="active"><a href="index.php?controller=app&method=contral"><i class="icon-align-justify"></i> 监控列表</a></li>
            <li><a href="index.php?controller=app&method=index"><i class="icon-pencil"></i> 报警规则设定</a></li>
            <li><a href="index.php?controller=app&method=alertmsg"><i class="icon-eye-open"></i> 报警信息查看</a></li>
            <li><a href="index.php?controller=app&method=console"><i class="icon-fullscreen"></i> 实时信息浏览</a></li>
            <li><a href="index.php?controller=app&method=profile"><i class="icon-user"></i> 管理员信息</a></li>
            <hr/>
            <div align="center">
              <a class="btn btn-block  btn-danger" align="center" href="index.php?controller=admin&method=logout">退出</a>
            </div>
          </ul>
        </div>
      </div>

      <div class="span10">

        <div class="row-fluid show-grid">
          <a href="#" data-toggle="tooltip" title="扫描日志,日志关键字支持正则表达式">
            <div id="rizhi"class="a" onclick="getmsg()"><strong>日志监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="监控进程状态，是否存活">
            <div class="a"><strong>进程监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="通过监控进程数量，在进程数少于阈值时报警">
            <div class="a"><strong>进程数量</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="通过扫描夜维作业产生的日志来判断夜维作业是否执行成功">
            <div class="a"><strong>夜维监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="ping命令监控">
            <div class="a"><strong>ping</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="1、监控指定队列深度，超过阈值报警
2、监控整个队列管理器中所有队列
3、所监控的队列发生堵报是，产生报警">
            <div class="a"><strong>mq队列深度</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="监控内存使用率，超过阈值报警">
            <div class="a"><strong>内存</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="1、监控单个进程的cpu使用率，超过阈值报警
2、监控多个进程的cpu使用率，总使用率超过阈值报警">
            <div class="a"><strong>进程cpu使用率超额监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="监控cpu使用率，超过阈值报警">
            <div class="a"><strong>cpu监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="扫描日志中某个固定关键字，单位时间内出现频率异常（大于或小于某个次数），则产生报警">
            <div class="a"><strong>关键字出现频率异常监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="扫描文件（夹），固定时间内文件没有更新，则产生报警">
            <div class="a"><strong>文件更新频率异常监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="发生以下情况时，可产生报警：
Redis服务停止、慢日志达到最大值、内存达到指定最大内存百分比、CPU达到指定百分比、TPS超过阈值时">
            <div class="a"><strong>redis监控</strong></div>
          </a>
          <a href="#" data-toggle="tooltip" title="1、监控单个进程的内存使用率，超过阈值报警
2、监控多个进程的内存使用率，总使用率超过阈值报警">
            <div class="a"><strong>进程内存使用率超额监控</strong></div>
          </a>


        </div>

        <div class="row-fluid show-grid" ">       
            
        </div>
        </br>
        
      </div>
    
  </div>
    
    
    <!--/row-->
    
    <script>
      window.onload=function(){
      //  getmsg();
     };
      function getmsg(){
           document.getElementById('rizhi').style.backgroundColor='#ff0000';
            // var xmlhttp;
            // if (window.XMLHttpRequest)
            //   {
            //     xmlhttp=new XMLHttpRequest();
            //   }
            // else
            //   {
            //     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP ");
            //   }
            // xmlhttp.onreadystatechange=function()
            //   {
                
            //       if (xmlhttp.readyState==4 && xmlhttp.status==200)
            //       {
            //             var str='{"data ":'+xmlhttp.responseText+'}'
            //             var obj = eval ("( " + str + ") ")
            //             document.getElementById('rizhi').style.backgroundColor='#ff0000';
            //             // document.getElementById("username ").value=obj.data.username;
            //             // document.getElementById("phone ").value=obj.data.phone;
            //             // document.getElementById('password').value=obj.data.password;
            //             // document.getElementById('age').value=obj.data.age; 
            //             // document.getElementById('id').value=obj.data.id; 
            //             // document.getElementById('sex').value=obj.data.sex; 
            //       }                     
            //   }
            // xmlhttp.open("POST ","index.php?controller=app&method=getmsg ",true);
            // xmlhttp.send();           
        
      }
      function save(){
           var username= document.getElementById("username ").value;
           var phone= document.getElementById("phone ").value;
           var password= document.getElementById('password').value;
           var age= document.getElementById('age').value;
          
           $.ajax({
                    cache: false,
                    type: "POST ",
                    url:"index.php?controller=app&method=updateUser ",
                    data:{"username ":username,"phone ":phone,"age ":age,"password ":password},          
                    async: false,
                    error: function(request) {
                        alert("更新失败 ");
                    },
                    success: function(data) {
                      // alert(JSON.stringify(data));
                      alert("更新成功 ");                      
                    }
                });
      }
    </script>
    
    <hr>

    

  </div>
  <!--/.fluid-container-->

  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->



</body>

</html><?php }} ?>
