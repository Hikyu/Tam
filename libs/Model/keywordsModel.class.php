<?php
class keywordsModel{

		public $_table = 'keywords';

		function findOne_by_id($id){
			$sql = 'select * from '.$this->_table.' where id="'.$id.'"';
			return DB::findOne($sql);
		}

		function del_by_id($id){
			return DB::del($this->_table, 'id='.$id);
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}

		function insert($data){
			return DB::insert($this->_table, $data);
		}
		
		function findAll(){
			$sql = 'select * from '.$this->_table;
			return DB::findAll($sql);
		}
	}
?>