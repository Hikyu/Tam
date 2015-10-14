<?php
	
	class appController {
		public $auth;

		public function __construct(){
			session_start();
			if(!(isset($_SESSION['auth']))&&(Engine::$method!='login')){
				$this->showmessage('请登录后在操作！', 'index.php?controller=admin&method=login');
			}else{
				$this->auth = $_SESSION['auth'];
			}
		}
		
		function index(){
			
		    $appinfo=$this->getappinfo();		
			$key=$this->getkeywords();	
			$contact=$this->getcontact();
			
			VIEW::assign(array('appinfo'=>$appinfo,'keywords'=>$key,'contact'=>$contact ));
			VIEW::display('application/alert_rule.html');
		}
		// 获取app信息
		private function getappinfo(){
			if($this->auth['appid']!=NULL){	
				$appid = $this->auth['appid'];					
				$app = M('app');
						
				return $app->findOne_by_id($appid);
			}else{
				 showmessage('未发现任何应用信息！', 'index.php?controller=admin&method=login');	
			}
		}
		// 获取关键字列表
		function getkeywords(){
			$keywords=M('keywords');
			return $keywords->findAll();
		}
		// 添加规则 ajax
		function ruleadd(){
			extract($_POST);
			$id=daddslashes($id);
			$valid=	daddslashes($valid);
			$appid= $this->auth['appid'];
			$period= daddslashes($period);
			$frequency= daddslashes($frequency);
			$errorid= daddslashes($errorid);
			$last= daddslashes($last);
			$interval= daddslashes($interval);
			$keywords = daddslashes($keywords);
			$prompt= daddslashes($prompt);	
			$level= daddslashes($level);
			
			$ruleobj = M('rule');
			$data = array(
				'start'=>$start,
				'end'=>$end,
				'appid'=>$appid,
				'period'=>$period,
				'frequency'=>$frequency,
				'keywords'=>$keywords,		
				'errorid'=>$errorid,
				'last'=>$last,
				'interval'=>$interval,
				'level'=>$level,
				'prompt'=>$prompt,
				'valid'=>$valid,					
			);
			$contactruleobj = M('contactrule');
			if($id!=''){
				$ruleobj ->update($data, intval($id));
				//先将原来的contactrule删除
				
			    $contactruleobj->delContactruleByRuleid($id);
				for($i=0;$i<count($jobs);++$i){			
					//添加新的contactrule
					$contactjobnumber=$jobs[$i][jobnumber];
					$email=$jobs[$i][contactway][0];
					$phone=$jobs[$i][contactway][1];
					$msg=$jobs[$i][contactway][2];
					$da = array(
						'ruleid'=>$id,
						'contactjobnumber'=>$contactjobnumber,
						'email'=>$email,
						'phone'=>$phone,		
						'msg'=>$msg,										
					);
					$contactruleobj->insert($da);
				}			
			}else{
				$ruleid=$ruleobj ->insert($data);
				
				for($i=0;$i<count($jobs);++$i){
					$contactjobnumber=$jobs[$i][jobnumber];
					$email=$jobs[$i][contactway][0];
					$phone=$jobs[$i][contactway][1];
					$msg=$jobs[$i][contactway][2];
					$da = array(
						'ruleid'=>$ruleid,
						'contactjobnumber'=>$contactjobnumber,
						'email'=>$email,
						'phone'=>$phone,		
						'msg'=>$msg,										
					);
					$contactruleobj->insert($da);
				}					
			}
			
			
								
		}
		// 显示联系人信息 ajax
		public function discontact(){
			$contact=$this->getcontact();
			$contact=json_encode($contact);		
			echo $contact;
		}
		// 获取联系人信息
		function getcontact(){
			$contacts=M('contact');
			return $contacts->findAll($this->auth['appid']);
		}
		// 添加联系人 ajax
		function contactadd(){
			extract($_POST);	
		
			$jobnumber = daddslashes($jobnumber);
			$name = daddslashes($name);
			$phone = daddslashes($phone);
			$email = daddslashes($email);
			$id = daddslashes($id);
			$contactobj = M('contact');
			$data = array(
				'jobnumber'=>$jobnumber,
				'name'=>$name,
				'phone'=>$phone,
				'email'=>$email,
				'appid'=>$this->auth['appid']				
			);
			if($id!=''){
				$contactobj ->update($data, intval($id));
				
			}else{
				$contactobj ->insert($data);				
			}
			
		}
		// 删除联系人 ajax
		public function contactdel(){
			if($_GET['id']){
				$contactobj = M('contact');
				$jobnumber=$contactobj->findOne_by_id($_GET['id'])[jobnumber];
			    $contactobj->del_by_id($_GET['id']);
				//删除关联的contactrule
				$contactruleobj=M('contactrule');
				$contactruleobj->delContactruleByJobnumber($jobnumber);			
			}		
		}
		// 获取报警信息
		public function alertmsg(){
			
			$appinfo=$this->getappinfo();
			VIEW::assign(array('appinfo'=>$appinfo));
			VIEW::display('application/alert_msg.html');
		}
		//获取规则表
		public function getrule(){
			$ruleobj=M('rule');			
			$rules=json_encode($ruleobj->findAll($this->auth['appid']));		
			echo $rules;
		}
		// 删除规则 ajax
		public function ruledel(){
			if($_GET['id']){
				$contactobj = M('rule');
			    $contactobj->del_by_id($_GET['id']);
				//删除关联的contactrule
				$contactruleobj=M('contactrule');
				$contactruleobj->delContactruleByRuleid($_GET['id']);				
			}							
		}
		//获取报警联系人
		public function getcontactrule(){
			$contactruleobj=M('contactrule');		
			$contactrules=$contactruleobj->findContactRuleByRuleid($_POST['ruleid']);
			$contactobj=M('contact');
			$contacts=array();
			for($i=0;$i<count($contactrules);++$i){
				$contact=$contactobj->findContactByJobnumber($contactrules[$i][contactjobnumber]);
				$name=$contact['name'];
				$con=array();
				$con['contactruleid']=$contactrules[$i][id];
				$con['name']=$name;
				$con['contactjobnumber']=$contactrules[$i][contactjobnumber];
				$con['email']=$contactrules[$i][email];
				$con['msg']=$contactrules[$i][msg];
				$con['phone']=$contactrules[$i][phone];
				$contacts[$i]=$con;			
			}						  			
			echo json_encode($contacts);
		}
		public function changevalids(){
			extract($_POST);
			//先使所有规则失效，然后将选中的规则更新为有效

			$ruleobj=M('rule');
			$ruleobj->unValidAll($this->auth['appid']);
			
			$ruleobj->validRules($ifchanges);
		}	
		//使某些规则无效
		public function unvalid(){
			extract($_POST);
			$ruleobj=M('rule');
			$ruleobj->unvalidRules($unvalid);
		}
		//获取所有报警信息
		public function getAllAlertMsg(){
			$allalertmsgobj=M('alerthistroy');
			$allalertmsgs=$allalertmsgobj->findAll($this->auth['appid']);
			$ruleobj=M('rule');
			$msgs=array();
			for($i=0;$i<count($allalertmsgs);++$i){
				$rule=$ruleobj->findOne_by_id($allalertmsgs[$i][ruleid]);
				$dateline=$allalertmsgs[$i][dateline];
				$ifhandle=$allalertmsgs[$i][ifhandle];
				$msg=array();
				$msg['dateline']=$dateline;
				$msg['ifhandle']=$ifhandle;
				$msg['period']=$rule[period];
				$msg['frequency']=$rule[frequency];
				$msg['keywords']=$rule[keywords];
				$msg['errorid']=$rule[errorid];
				$msg['last']=$rule[last];
				$msg['interval']=$rule[interval];
				$msg['level']=$rule[level];
				$msg['start']=$rule[start];
				$msg['end']=$rule[end];
				$msgs[$i]=$msg;
			}
			echo json_encode($msgs);
		}
		//获取已处理信息
		public function getHandleAlertMsg(){
			$allalertmsgobj=M('alerthistroy');
			$allalertmsgs=$allalertmsgobj->findHandleMsg($this->auth['appid']);
			$ruleobj=M('rule');
			$msgs=array();
			for($i=0;$i<count($allalertmsgs);++$i){
				$rule=$ruleobj->findOne_by_id($allalertmsgs[$i][ruleid]);
				$dateline=$allalertmsgs[$i][dateline];
				$ifhandle=$allalertmsgs[$i][ifhandle];
				$msg=array();
				$msg['dateline']=$dateline;
				$msg['ifhandle']=$ifhandle;
				$msg['period']=$rule[period];
				$msg['frequency']=$rule[frequency];
				$msg['keywords']=$rule[keywords];
				$msg['errorid']=$rule[errorid];
				$msg['last']=$rule[last];
				$msg['interval']=$rule[interval];
				$msg['level']=$rule[level];
				$msg['start']=$rule[start];
				$msg['end']=$rule[end];
				$msgs[$i]=$msg;
			}
			echo json_encode($msgs);
		}
		//事件信息查看
		public function console(){
			$appinfo=$this->getappinfo();
			VIEW::assign(array('appinfo'=>$appinfo));
			VIEW::display('application/console.html');
		}
		//管理员信息
		public function profile(){
			$appinfo=$this->getappinfo();					
			VIEW::assign(array('appinfo'=>$appinfo));
			VIEW::display('application/profile.html');
			// showmessage($this->auth['username'],'application/profile.html');
		}
		//获取动态时间信息
		public function getConsoleMsg(){
			
			$alertmsgobj=M('alertmsg');
			$aletmsgs=$alertmsgobj->findAll($this->auth['appid']);
			echo json_encode($aletmsgs);
		}
		//更新用户信息
		public function updateUser(){
			extract($_POST);
			$userobj=M('user');
			$data = array(
				'username'=>$username,
				'phone'=>$phone,
				'password'=>$password,
				'age'=>$age,								
			);
			$userobj ->update($data, intval($this->auth['username']));
		}
		//获取用户信息
		public function getmsg(){
			$userobj=M('user');
			$user=$userobj->findOne_by_username($this->auth['username']);
			echo json_encode($user);
		}
		//监控功能列表
		public function contral(){
			$appinfo=$this->getappinfo();		
			
			VIEW::assign(array('appinfo'=>$appinfo));
			VIEW::display('application/contral.html');
		}
			
	}	

	
	
?>