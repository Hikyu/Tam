<?php
	$currentdir = dirname(__FILE__);
	include_once($currentdir.'/include.list.php');
	foreach($paths as $path){
		include_once($currentdir.'/'.$path);
	}
	class Engine{
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db(){
			DB::init('mysql', self::$config['dbconfig']);
		}
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewconfig']);
		}
		private static function init_controllor(){
			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
		}
		private static function init_method(){
			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
		}
		//在入口文件中检查是否已经登陆，只有登陆的用户才能进行其他操作
		private static function check_login(){
			session_start();
			if(!(isset($_SESSION['auth']))&&(self::$method!='login')){
				showmessage('请登录后在操作！', 'index.php?controller=admin&method=login');
			}else{
				C(self::$controller, self::$method);
			}
		}
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			self::check_login();
		}
	}
?>