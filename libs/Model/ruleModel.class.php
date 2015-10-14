<?php
class ruleModel{

		public $_table = 'rule';

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
		
		function findAll($appid){
			$sql = 'select * from '.$this->_table.' where appid="'.$appid.'"';
			return DB::findAll($sql);
		}
		function update($data, $id){
			return DB::update($this->_table, $data, 'id='.$id);
		}
		//使所有规则失效
		function unValidAll($appid){
			$rules=$this->findAll($appid);
			for($i=0;$i<count($rules);++$i){
				$data = array(
					'valid'=>'false',									
				);
				$this->update($data,$rules[$i][id]);
			}
		}
		//使某些规则生效
		function validRules($rules){
			for($i=0;$i<count($rules);++$i){
				$data = array(
					'valid'=>'true',									
				);
				$this->update($data,$rules[$i][id]);
			}
		}
		//是某些规则失效
		function unvalidRules($rules){
			for($i=0;$i<count($rules);++$i){
				$data = array(
					'valid'=>'false',									
				);
				$this->update($data,$rules[$i][id]);
			}
		}
	}
?>