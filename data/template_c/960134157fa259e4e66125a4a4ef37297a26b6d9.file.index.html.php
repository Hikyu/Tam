<?php /* Smarty version Smarty-3.1.16, created on 2015-10-06 04:51:56
         compiled from "tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:56235613374ccfef49-43036962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1442024682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56235613374ccfef49-43036962',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5613374cd7da31_02170371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613374cd7da31_02170371')) {function content_5613374cd7da31_02170371($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN" manifest="cache.manifest">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TAM-登录</title>
</head>
<link rel="stylesheet" type="text/css" href="libs/ORG/css/bootstrap-responsive.min.css"/>
<link rel="stylesheet" type="text/css" href="libs/ORG/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="libs/ORG/css/common.css"/>
<script type="text/javascript" src="libs/ORG/js/jquery.js"></script>
<script type="text/javascript" src="libs/ORG/js/bootstrap.min.js"></script>
<body>
	
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="libs/ORG/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>进入航信官网.</h1>
              <p class="lead">中国民航信息集团</p>
              <a class="btn btn-large btn-primary" href="http://www.travelsky.net/">访问官网</a>
            </div>            
          </div>
        </div>
        <div class="item">
          <img src="libs/ORG/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>忘记密码.</h1>
              <p class="lead">发送邮件，更改密码</p>
              <a class="btn btn-large btn-primary" href="#">更改密码</a>
            </div>
          </div>
        </div>
    
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <div class="container-login">
       <form class="form-signin" method="post" action="index.php?controller=admin&method=login">
        <h2 class="form-signin-heading">请登录：</h2>
        <input type="text" name="username" class="input-block-level" placeholder="账户">
        <input type="password" name="password" class="input-block-level" placeholder="密码">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住我
        </label>
        <button class="btn btn-large btn-primary" name="submit" type="submit">开始登录</button>
      </form>
  </div> 
  <div class="text-center">
      <footer>
        <p>中国航信TAM系统</p>
      </footer>    
  </div>
  
</body>
</html>
<?php }} ?>
