<?php /* Smarty version Smarty-3.1.16, created on 2015-10-06 06:22:47
         compiled from "tpl\application\contact_rule.html" */ ?>
<?php /*%%SmartyHeaderCode:2410856133701797364-11108605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d4792f9e2d9157417fed6701c21dce267de121e' => 
    array (
      0 => 'tpl\\application\\contact_rule.html',
      1 => 1444105364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2410856133701797364-11108605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561337018035d4_45189751',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561337018035d4_45189751')) {function content_561337018035d4_45189751($_smarty_tpl) {?><div style="overflow-y:hidden" class="tab-pane fade" id="contact">


  <!--<a data-toggle="modal" class="btn btn-primary" href="#addcontact" type="button">新增</a>-->



  <div id="addcontact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3 align="center">联系人</h3>
    </div>
    <div align="center" class="modal-body">
      <form id="form_addcontact">
        <div class="input-prepend">
          <span class="add-on">工号</span>
          <input id="job" class="span4" name="jobnumber" autocomplete="off" type="text">
        </div>
        <br/>
        <div class="input-prepend">
          <span class="add-on">姓名</span>
          <input id="name" class="span4" name="name" autocomplete="off" type="text">
        </div>
        <br/>
        <div class="input-prepend">
          <span class="add-on">手机</span>
          <input id="phone" class="span4" name="phone" autocomplete="off" type="text">
        </div>
        <br/>
        <div class="input-prepend">
          <span class="add-on">邮箱</span>
          <input id="email" class="span4" name="email" autocomplete="off" type="text">
        </div>
        <div class="input-prepend">
          <input id="id" name="id" autocomplete="off" type="text" style="display:none;">
        </div>
        <input id="res" name="res" type="reset" style="display:none;" />
      </form>
    </div>

    <div class="modal-footer">
      <button class="btn" data-dismiss="modal">关闭</button>

      <button class="btn btn-primary" onclick="addContact()" data-dismiss="modal">保存</button>
    </div>
  </div>

  
  <script>
    function addContact(){
       // alert($('#form_addcontact').serialize());
       var job= document.getElementById("job").value;
       var name= document.getElementById('name').value;
       var phone= document.getElementById('phone').value;
       var email= document.getElementById('email').value;
      
       if(job==''||name==''||phone==''||email==''){
          alert("请将信息填写完整!");
          return;
       }
       if(checkIfJobnumberExist(job)){
          alert("该工号联系人已存在!");
       }else{
          $.ajax({
                    cache: false,
                    type: "POST",
                    url:"index.php?controller=app&method=contactadd",
                    data:$('#form_addcontact').serialize(),// 你的formid
                    async: false,
                    error: function(request) {
                        alert("失败:"+request);
                    },
                    success: function(data) {
                      alert("成功",get_contact_table());                                            
                    }
                });
        }
        function checkIfJobnumberExist(str){
             var s3 = document.getElementById("mintab"); //获取表格  
                var cells = document.getElementById("mintab").rows.item(1).cells.length;                                                    
                for(var i=0;i<s3.rows.length;i++){         //获取工号  
                if(cells>1){                         
                      if( str==s3.rows[i].cells[1].innerHTML){    
                             return true;         
                      }   
                      }                          
            } 
            return false;
        }
         $("input[name='res']").click();      
    }
  </script>
  <script>
    function operateFormatter(value, row, index) {
       
        return [
            '<a class="edit ml10" href="javascript:void(0)" title="Edit">',
                '<i  class="icon-edit"></i>',
            '</a>',
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
                '<i  class="icon-remove"></i>',
            '</a>',
          
        ].join('');
    }

    window.operateEvents = {
        
        'click .edit': function (e, value, row, index) {
          
            $('#addcontact').modal('show')     
            document.getElementById('job').value=row.jobnumber;
            document.getElementById('name').value=row.name;
            document.getElementById('phone').value=row.phone;
            document.getElementById('email').value=row.email;
            document.getElementById('id').value=row.id;
        },
        'click .remove': function (e, value, row, index) {
           
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
                      get_contact_table();                  
                  }
                  
              }
              xmlhttp.open("GET","index.php?controller=app&method=contactdel&id="+row.id,true);
              xmlhttp.send();
              }
    };
  </script>
  <script>
    $('#addcontact').on('hide', function(){
         $("input[name='res']").click();   
    });
    function get_contact_table(){
       
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
                 
                 $('#mintab').bootstrapTable('destroy');
                 $('#mintab').bootstrapTable({
                    striped: true,
                    pagination: true,
                    pageSize: 8,
                    pageList: [10, 25, 50, 100, 200],
                    search: true,
                    showColumns: true,                 
                    minimumCountColumns: 2,
                    clickToSelect: true,
                      columns: [{
                        field: 'id',
                        title: 'ID',
                        align: 'center'
                      }, {
                        field: 'jobnumber',
                        title: '员工工号',
                        align: 'center'
                      }, {
                        field: 'name',
                        title: '姓名',
                        align: 'center'
                      },{
                        field: 'phone',
                        title: '电话',
                        align: 'center'
                      },{
                        field: 'email',
                        title: 'E-mail',
                        align: 'center'
                      }, {
                        field: 'operate',
                        title: '操作',
                        align: 'center',
                        valign: 'middle',
                        clickToSelect: false,
                        formatter: operateFormatter,
                        events: operateEvents
                      }],
                      data: obj.data
                    });
            }

            
        }
      xmlhttp.open("POST","index.php?controller=app&method=discontact",true);
      xmlhttp.send();
     // var t=setTimeout("get_contact_table()",2000)
    }
  </script>
  
  <div id="contact_table"></div>
  <div id="contact-toolbar">
    <a data-toggle="modal" class="btn btn-primary" href="#addcontact" type="button">新增</a>
  </div>
  <table id="mintab" class="table table-bordered table-hover" data-cache="false" data-toolbar="#contact-toolbar" data-show-toggle="true"
  data-height="299">
  </table>
</div><?php }} ?>
