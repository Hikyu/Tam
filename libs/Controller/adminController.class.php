<?php
	class adminController{

		public $auth;

		public function __construct(){
			session_start();
			if(!(isset($_SESSION['auth']))&&(Engine::$method!='login')){
				$this->showmessage('请登录后在操作！', 'index.php?controller=admin&method=login');
			}else{
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
			}
		}

		// public function index(){
		// 	$newsobj = M('news');
		// 	$newsnum = $newsobj->count();
		// 	VIEW::assign(array('newsnum'=>$newsnum));
		// 	VIEW::display('admin/index.html');
		// }
		public function login(){
			if(!isset($_POST['submit'])){
				VIEW::display('admin/index.html');
			}else{
				$this->checklogin();
			}
		}

		public function logout(){
				$authobj = M('auth');
				$authobj->logout();
			    showmessage('退出成功！', 'index.php?controller=admin&method=login');
		}

		// public function newsadd(){
		// 	if(!isset($_POST['submit'])){
		// 		$data = $this->getnewsinfo();
		// 		VIEW::assign(array('data'=>$data));
		// 		VIEW::display('admin/newsadd.html');
		// 	}else{
		// 		$this->newssubmit();
		// 	}
		// }

		// public function newslist(){
		// 	$data = $this->getnewslist();
		// 	VIEW::assign(array('data'=>$data));
		// 	VIEW::display('admin/newslist.html');
		// }

		// public function newsdel(){
		// 	if($_GET['id']){
		// 		$this->delnews();
		// 		$this->showmessage('删除新闻成功！', 'admin.php?controller=admin&method=newslist');
		// 	}
		// }

		private function checklogin(){
			$authobj = M('auth');
			$auth = $authobj->loginsubmit();
			if($auth!=-1){	
				if($auth==1)	{
				 	showmessage('登录成功！', 'index.php?controller=appManager&method=index');	//超级管理员
				}else if($auth==2){
					showmessage('登录成功！', 'index.php?controller=app&method=index');	
				}else{
					showmessage('您尚无任何权限！请联系管理员', 'index.php?controller=admin&method=login');
				}			 		
			}else{
				 showmessage('登录失败！', 'index.php?controller=admin&method=login');			
			}	
		}

		// private function getnewsinfo(){
		// 	if(isset($_GET['id'])){
		// 		$id = intval($_GET['id']);
		// 		$newsobj = M('news');
		// 		return $newsobj->findOne_by_id($id);
		// 	}else{
		// 		return array();
		// 	}
		// }

		// private function getnewslist(){
		// 	$newsobj = M('news');
		// 	return $newsobj->findAll_orderby_dateline();
		// }

		// private function delnews(){
		// 	$newsobj = M('news');
		// 	return $newsobj->del_by_id($_GET['id']);
		// }

		// private function newssubmit(){
		// 	extract($_POST);				
		// 	if(empty($title)||empty($content)){
		// 		$this->showmessage('请把新闻标题、内容填写完整再提交！', 'admin.php?controller=admin&method=newsadd');
		// 	}
		// 	$title = daddslashes($title);
		// 	$content = daddslashes($content);
		// 	$author = daddslashes($author);
		// 	$from = daddslashes($from);
		// 	$newsobj = M('news');
		// 	$data = array(
		// 		'title'=>$title,
		// 		'content'=>$content,
		// 		'author'=>$author,
		// 		'from'=>$from,
		// 		'dateline'=>time()
		// 	);
		// 	if($_POST['id']!=''){
		// 		$newsobj ->update($data, intval($_POST['id']));
		// 		$this->showmessage('修改成功！', 'admin.php?controller=admin&method=newslist');
		// 	}else{
		// 		$newsobj ->insert($data);
		// 		$this->showmessage('添加成功！', 'admin.php?controller=admin&method=newslist');
		// 	}
		// }

		
	}
?>