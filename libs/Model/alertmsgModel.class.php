<?php
	class alertmsgModel{

		public $_table = 'alertmsg';

		function findAll_orderby_dateline(){
			$sql = 'select * from '.$this->_table.' order by dateline desc';
			return DB::findAll($sql);
		}

		function findOne_by_id($id){
			$sql = 'select * from '.$this->_table.' where id='.$id;
			return DB::findOne($sql);
		}

		function del_by_id($id){
			return DB::del($this->_table, 'id='.$id);
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}
        function findAll($appname){
			$sql = 'select * from '.$this->_table.' where appid="'.$appname.'"';
			return DB::findAll($sql);
		}
		function insert($data){
			return DB::insert($this->_table, $data);
		}

		function update($data, $id){
			return DB::update($this->_table, $data, 'id='.$id);
		}
		
	}
?>