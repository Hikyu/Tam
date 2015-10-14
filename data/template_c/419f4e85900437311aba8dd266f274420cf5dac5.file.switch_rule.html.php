<?php /* Smarty version Smarty-3.1.16, created on 2015-10-06 04:50:41
         compiled from "tpl\application\switch_rule.html" */ ?>
<?php /*%%SmartyHeaderCode:12767561337016d92e2-61359470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419f4e85900437311aba8dd266f274420cf5dac5' => 
    array (
      0 => 'tpl\\application\\switch_rule.html',
      1 => 1444045316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12767561337016d92e2-61359470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561337016ffd67_44706540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561337016ffd67_44706540')) {function content_561337016ffd67_44706540($_smarty_tpl) {?><div class="tab-pane fade" id="profile">
  <form class="form-inline">
    关闭在
    <input class="span2" id="date_start" type="text" readonly> --
    <input class="span2" id="date_end" type="text" readonly>
    <script>
      $('#date_end').cxCalendar();
			$('#date_start').cxCalendar();
    </script>
    时间内的报警
    <button type="button" class="btn btn-danger" onclick=clearswitch()>清除</button>
    <button type="button" onclick=searchbydate() class="btn btn-info">搜索</button>
    <button type="button" class="btn btn-success" onclick=switchbydate()>关闭</button>
  </form>
  <table id="switch_rule" class="table table-bordered table-hover" data-cache="false" data-height="299"></table>
  
  <script>
    //清除日期
    function clearswitch(){
       document.getElementById("date_start").value='';
       document.getElementById("date_end").value=''; 
       switchRule();
    }
    // 获取规则表
         
          function switchRule(){
          //  clearMakeRule();
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
                      // alert(obj.data);
                      $('#switch_rule').bootstrapTable('destroy');
                      $('#switch_rule').bootstrapTable({
                          // striped: true,
                          rowStyle:rowStyle,
                          pagination: true,
                          pageSize: 8,
                          pageList: [10, 25, 50, 100, 200],                                                                
                          minimumCountColumns: 2,
                          clickToSelect: true,
                            columns: [{
                              field: 'state',
                              checkbox: true
                            },{
                              field: 'id',
                              title: 'ID',
                              align: 'center'
                            }, {
                              field: 'valid',
                              title: '是否生效',
                              align: 'center'
                            },{
                              field: 'start',
                              title: '开始时间',
                              align: 'center'
                            },{
                              field: 'end',
                              title: '结束时间',
                              align: 'center'
                            },{
                              field: 'level',
                              title: '报警级别',
                              formatter:'levelFormatter',
                              align: 'center'
                             }
                            ],
                            data: obj.data
                          });
                  }                     
              }
            xmlhttp.open("POST","index.php?controller=app&method=getrule",true);
            xmlhttp.send();                
        }
       
       
       //搜索时间段内的规则
       function searchbydate(){
        
          var start=document.getElementById("date_start").value;
          var end= document.getElementById("date_end").value; 
          // getRule();
         
          // alert(JSON.stringify(rules));
          var rule=$('#table_rule').bootstrapTable('getData');         
          var rules=new Array();
          var ifuck=0;
          for(var i=0;i<rule.length;++i){
             if(rule[i].start==''||rule[i].end==''){                     
                 continue;
             } 
             var obj=new Object();
             obj.id=rule[i].id;
             obj.valid=rule[i].valid;
             obj.start=rule[i].start;
             obj.end=rule[i].end;
             obj.level=rule[i].level;
             rules[ifuck]=obj;
             ifuck++;
             
          }
         
          if(start==''&&end==''){
             switchRule();
             return;
          }
          if(start!=''&&end!=''){
              var datestart=new Date(start);
              var dateend=new Date(end);
              if(dateend<=datestart){
                   alert("结束日期不能小于开始日期!");
                   return;
              }
              var rulesfuck=new Array();  
              var j=0;                           
              var length=rules.length;     
                
              for(var i=0;i<length;++i){               
                 var start1=new Date(rules[i].start);
                 var end1=new Date(rules[i].end);                                                                             
                 if(start1>=datestart&&end1<=dateend){
                    var objfuck=new Object();
                    objfuck.id=rules[i].id;               
                    objfuck.valid=rules[i].valid;
                    objfuck.start=rules[i].start;
                    objfuck.end=rules[i].end;
                    objfuck.level=rules[i].level;                  
                    rulesfuck[j]=objfuck;     
                    j++;                                  
                 } 
                                
              }
              searchresult(rulesfuck);
          }
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
       function searchresult(rules){
         
          $('#switch_rule').bootstrapTable('destroy');
          $('#switch_rule').bootstrapTable({
          rowStyle:rowStyle,
          pagination: true,
          pageSize: 8,
          pageList: [10, 25, 50, 100, 200],                                                                
          minimumCountColumns: 2,
          clickToSelect: true,
          columns: [{
          field: 'state',
          checkbox: true
          },{
           field: 'id',
           title: 'ID',
           align: 'center'
           }, {
           field: 'valid',
           title: '是否生效',
           align: 'center'
           },{
           field: 'start',
           title: '开始时间',
           align: 'center'
           },{
           field: 'end',
           title: '结束时间',
           align: 'center'
            },{
           field: 'level',
           title: '报警级别',
           formatter:'levelFormatter',
           align: 'center'
            }
            ],
            data: rules
           });
       }
       //关闭按钮点击事件
     function switchbydate(){
        var rules=$('#switch_rule').bootstrapTable('getSelections');
        $.ajax({
                    cache: false,
                    type: "POST",
                    url:"index.php?controller=app&method=unvalid",
                    data:{"unvalid":rules},// 规则数组                 
                    async: false,
                    error: function(request) {
                        alert("操作失败");
                    },
                    success: function(data) {
                       // alert(JSON.stringify(dswitchata));
                      alert("操作成功！", switchRule());                         
                                       
                    }
                });
     }
  </script>
  
</div><?php }} ?>
