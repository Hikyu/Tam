<?php /* Smarty version Smarty-3.1.16, created on 2015-10-07 08:58:43
         compiled from "tpl\application\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:2648156133b8abd5456-28412827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bccf4cbf516b6518b8fa3ea72593e52bee9504c0' => 
    array (
      0 => 'tpl\\application\\profile.html',
      1 => 1444201076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2648156133b8abd5456-28412827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56133b8acd5733_55813722',
  'variables' => 
  array (
    'appinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56133b8acd5733_55813722')) {function content_56133b8acd5733_55813722($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>管理员信息</title>
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
    #pro {
      text-align: center;
      border: 2px solid #a1a1a1;
      padding: 10px 40px;
      background: #dddddd;
      width: 350px;
      height: 500px;
      border-radius: 25px;
      -moz-border-radius: 25px;
      /* 老的 Firefox */
    }
    
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
            <li><a href="index.php?controller=app&method=console"><i class="icon-fullscreen"></i> 实时信息浏览</a></li>
            <li class="active"><a href="#"><i class="icon-user"></i> 管理员信息</a></li>
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
        <div class="row">
          <div id="pro" class="span4 offset3">
            <img src="libs/ORG/img/qq.png" width="128" height="128" />
            </br>
            </br>
            <span class="add-on">姓名</span>
            <input class="span6" disabled="disabled"" id="username"  type="text">
            </br>
            <span class="add-on">编号</span>
            <input class="span6" disabled="disabled" id="id"  type="text">
            </br>
            <span class="add-on">性别</span>
            <input class="span6" disabled="disabled" id="sex"  type="text">
            </br>
            <span class="add-on">年龄</span>
            <input class="span6" id="age" type="text">
            </br>
            <span class="add-on">应用</span>
            <input class="span6" disabled="disabled" value=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appinfo']->value['appname'])===null||$tmp==='' ? '' : $tmp);?>
 id="app"  type="text">
            </br>
            
            <span class="add-on">电话</span>
            <input class="span6" id="phone" type="text">
            </br>
            <span class="add-on">密码</span>
            <input class="span6" id="password" type="password">
            </br>
            <button type="button " class="btn btn-primary btn-normal" onclick=save()>保存</button>
          </div>
        </div>
      </div>
      <!--/span-->
    </div>
    <!--/row-->
    
    <script>
       window.onload=function(){
        getmsg();
     };
      function getmsg(){
      
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
                      
                        document.getElementById("username").value=obj.data.username;
                        document.getElementById("phone").value=obj.data.phone;
                        document.getElementById('password').value=obj.data.password;
                        document.getElementById('age').value=obj.data.age; 
                        document.getElementById('id').value=obj.data.id; 
                        document.getElementById('sex').value=obj.data.sex; 
                  }                     
              }
            xmlhttp.open("POST","index.php?controller=app&method=getmsg",true);
            xmlhttp.send();           
        
      }
      function save(){
           var username= document.getElementById("username").value;
           var phone= document.getElementById("phone").value;
           var password= document.getElementById('password').value;
           var age= document.getElementById('age').value;
          
           $.ajax({
                    cache: false,
                    type: "POST",
                    url:"index.php?controller=app&method=updateUser",
                    data:{"username":username,"phone":phone,"age":age,"password":password},          
                    async: false,
                    error: function(request) {
                        alert("更新失败");
                    },
                    success: function(data) {
                      // alert(JSON.stringify(data));
                      alert("更新成功");                      
                    }
                });
      }
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
