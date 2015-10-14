<?php
	
	class appManagerController {
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
		//	VIEW::assign(array('appinfo'=>$appinfo,'keywords'=>$key,'contact'=>$contact ));
			VIEW::display('appmanager/appmanager.html');
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
		
	}	

	
	
?>