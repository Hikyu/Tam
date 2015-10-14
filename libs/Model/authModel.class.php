<?php
	/**
	 **auth模型
	 **验证用户信息
	**/
	class authModel{
		private $auth = "";
		public function _construct(){
			if(isset($_SESSION['auth'])&&(!empty($_SESSION['auth']))){
				$this->auth = $SESSION['auth'];
			}
		}
		public function loginsubmit(){
			if(empty($_POST['username'])||empty($_POST['password'])){
				return false;
			}
			$username = addslashes($_POST['username']);
			$password = addslashes($_POST['password']);
			if($this->auth = $this->checkuser($username,$password)){
				$_SESSION['auth'] = $this->auth;
				if($this->auth['role']==1){
					return 1;
				}else if($this->auth['role']==2){
					return 2;
				}else {
					return 0;
				}								
			}else{
				return -1;
			}
		}
		public function getauth(){
			return $this->auth;
		}
		public function logout(){
			unset($_SESSION['auth']);
			$this->auth="";
		}	
		function checkuser($username, $password){
			$adminobj = M('admin');
			$auth = $adminobj -> findOne_by_username($username);
			if((!empty($auth))&&$auth['password']==$password){
				return $auth;
			}else{
				return false;
			}
		}

	}
?>