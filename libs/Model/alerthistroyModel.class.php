<?php
	class alerthistroyModel{

		public $_table = 'alerthistroy';

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
        function findAll($appid){
			$sql = 'select * from '.$this->_table.' where appid="'.$appid.'"';
			return DB::findAll($sql);
		}
		function insert($data){
			return DB::insert($this->_table, $data);
		}

		function update($data, $id){
			return DB::update($this->_table, $data, 'id='.$id);
		}
		function findHandleMsg($appid){
			$sql = 'select * from '.$this->_table.' where ifhandle="true" and appid="'.$appid.'"';
			return DB::findAll($sql);
		}
	}
?>