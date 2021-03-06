<?php /* Smarty version Smarty-3.1.16, created on 2015-10-07 08:58:42
         compiled from "tpl\application\alert_msg.html" */ ?>
<?php /*%%SmartyHeaderCode:11914561337586c6fe1-60705158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '178a8778a578e16fe7092a07e27347312ab505d2' => 
    array (
      0 => 'tpl\\application\\alert_msg.html',
      1 => 1444201030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11914561337586c6fe1-60705158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561337587c6872_34309735',
  'variables' => 
  array (
    'appinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561337587c6872_34309735')) {function content_561337587c6872_34309735($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>报警规则设定</title>
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

<body body>

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
            <li class="active"><a href="#"><i class="icon-eye-open"></i> 报警信息查看</a></li>
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
        <h4>报警信息</h4>
        <p>报警信息实时反映从服务器抓取的出错信息.</p>
        <div id="allalert-toolbar">
          <form class="form-inline">
            <span class="label label-warning">所有报警</span> 过滤条件：事件级别
            <select class="input-small" id="alertlevel" name="level">
              <option>所有</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            &nbsp;&nbsp;&nbsp;关键字&nbsp;
            <input type="text" class="input-normal" autocomplete="off" id="key" name="key">
            <button type="button" class="btn btn-primary" onclick="searchalert()">确定</button>

        </div>
        <table id="alert" class="table table-bordered table-hover" data-cache="false" data-toolbar="#allalert-toolbar" data-show-toggle="true"
        data-height="250">
        </table>

        <div id="handlealert-toolbar">
          <span class="label label-warning">已处理报警</span>
        </div>
        <table id="alert1" class="table table-bordered table-hover" data-cache="false" data-toolbar="#handlealert-toolbar" data-show-toggle="true"
        data-height="250">
        </table>
        
        <script type="text/javascript">
          window.onload=function(){
            getAlertMsgTable(); 
            getHandleAlertMsgTable(); 
                  
      };
     
      
      //搜索
      function searchalert(){
        var level = document.getElementById("alertlevel").value; 
        var key = document.getElementById("key").value;   
        
         var rule=$('#alert').bootstrapTable('getData');
       
        
        if(key==''&&level=='所有'){
         return;
        }
        var ifuck=0;
        var newalert=new Array();
      
        for(var i=0;i<rule.length;++i){
           if(level=='所有'&&key!=''){ 
              if(key!=rule[i].keywords) {
                 continue;
              }                              
           } 
           if(level!='所有'&&key==''){
              if(level!=rule[i].level) {
                 continue;
              }  
           }
           if(level!='所有'&&key!=''){
              if(level!=rule[i].level||key!=rule[i].keywords) {
                 continue;
              } 
           }
            var obj=new Object();
             obj.dateline=rule[i].dateline;
             obj.ifhandle=rule[i].ifhandle;
             obj.start=rule[i].start;
             obj.end=rule[i].end;
             obj.level=rule[i].level;
             obj.period=rule[i].period;
             obj.frequency=rule[i].frequency;
             obj.keywords=rule[i].keywords;
             obj.errorid=rule[i].errorid;
              obj.last=rule[i].last;
             obj.interval=rule[i].interval;          
             newalert[ifuck]=obj;
             ifuck++;       
        }
        disalert(newalert);
      }
      function disalert(alerts){
          $('#alert').bootstrapTable('destroy');
                 $('#alert').bootstrapTable({
                    rowStyle:rowStyle,
                    striped: true,
                    pagination: true,
                    pageSize: 8,
                    pageList: [10, 25, 50, 100, 200],
                    search: true,
                    showColumns: true,                 
                    minimumCountColumns: 2,
                    clickToSelect: true,
                      columns: [{
                        field: 'dateline',
                        title: '报警时间',
                        align: 'center'
                      },{
                        field: 'ifhandle',
                        title: '是否处理',
                        align: 'center'
                      },{
                              field: 'start',
                              title: '开始时间',
                              align: 'center'
                            },{
                              field: 'end',
                              title: '结束时间',
                              align: 'center'
                            }, {
                              field: 'period',
                              title: '报警周期',
                              align: 'center'
                            }, {
                              field: 'frequency',
                              title: '错误次数',
                              align: 'center'
                            },{
                              field: 'keywords',
                              title: '报警关键字',
                              align: 'center'
                            },{
                              field: 'errorid',
                              title: '错误id',
                              align: 'center'
                            },{
                              field: 'last',
                              title: '持续时间',
                              align: 'center'
                             },{
                              field: 'interval',
                              title: '间隔时间',
                              align: 'center'
                             },{
                              field: 'level',
                              title: '报警级别',
                              formatter:'levelFormatter',
                              align: 'center'
                             }],
                      data: alerts
                    });
        }
      //设置表风格
        function rowStyle(row, index) {
            var classes = ['active', 'success', 'info', 'warning', 'danger'];   
            if (row.ifhandle=='true') {
                return {
                    classes: classes[2]
                };
            }else{
              return {
                    classes: classes[3]
                };
            }
            return {};
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
        //获取所有报警信息
    function getAlertMsgTable(){
       
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
                  $('#alert').bootstrapTable('destroy');
                 $('#alert').bootstrapTable({
                    rowStyle:rowStyle,
                    striped: true,
                    pagination: true,
                    pageSize: 8,
                    pageList: [10, 25, 50, 100, 200],
                    search: true,
                    showColumns: true,                 
                    minimumCountColumns: 2,
                    clickToSelect: true,
                      columns: [{
                        field: 'dateline',
                        title: '报警时间',
                        align: 'center'
                      },{
                        field: 'ifhandle',
                        title: '是否处理',
                        align: 'center'
                      },{
                              field: 'start',
                              title: '开始时间',
                              align: 'center'
                            },{
                              field: 'end',
                              title: '结束时间',
                              align: 'center'
                            }, {
                              field: 'period',
                              title: '报警周期',
                              align: 'center'
                            }, {
                              field: 'frequency',
                              title: '错误次数',
                              align: 'center'
                            },{
                              field: 'keywords',
                              title: '报警关键字',
                              align: 'center'
                            },{
                              field: 'errorid',
                              title: '错误id',
                              align: 'center'
                            },{
                              field: 'last',
                              title: '持续时间',
                              align: 'center'
                             },{
                              field: 'interval',
                              title: '间隔时间',
                              align: 'center'
                             },{
                              field: 'level',
                              title: '报警级别',
                              formatter:'levelFormatter',
                              align: 'center'
                             }],
                      data: obj.data
                    });
            }
        
            
        }
      xmlhttp.open("POST","index.php?controller=app&method=getAllAlertMsg",true);
      xmlhttp.send();
    
    }
    
    function getHandleAlertMsgTable(){
       
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
                
                 $('#alert1').bootstrapTable('destroy');
                 $('#alert1').bootstrapTable({
                    rowStyle:rowStyle,
                    striped: true,
                    pagination: true,
                    pageSize: 8,
                    pageList: [10, 25, 50, 100, 200],
                    search: true,
                    showColumns: true,                 
                    minimumCountColumns: 2,
                    clickToSelect: true,
                      columns: [{
                        field: 'dateline',
                        title: '报警时间',
                        align: 'center'
                      },{
                        field: 'ifhandle',
                        title: '是否处理',
                        align: 'center'
                      },{
                              field: 'start',
                              title: '开始时间',
                              align: 'center'
                            },{
                              field: 'end',
                              title: '结束时间',
                              align: 'center'
                            }, {
                              field: 'period',
                              title: '报警周期',
                              align: 'center'
                            }, {
                              field: 'frequency',
                              title: '错误次数',
                              align: 'center'
                            },{
                              field: 'keywords',
                              title: '报警关键字',
                              align: 'center'
                            },{
                              field: 'errorid',
                              title: '错误id',
                              align: 'center'
                            },{
                              field: 'last',
                              title: '持续时间',
                              align: 'center'
                             },{
                              field: 'interval',
                              title: '间隔时间',
                              align: 'center'
                             },{
                              field: 'level',
                              title: '报警级别',
                              formatter:'levelFormatter',
                              align: 'center'
                             }],
                      data: obj.data
                    });
            }
        
            
        }
      xmlhttp.open("POST","index.php?controller=app&method=getHandleAlertMsg",true);
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


</body>

</html><?php }} ?>
