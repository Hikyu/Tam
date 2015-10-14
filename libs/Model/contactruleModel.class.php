<?php
class contactruleModel{

		public $_table = 'contactrule';

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
		function update($data, $id){
			return DB::update($this->_table, $data, 'id='.$id);
		}
		
		function findContactRuleByRuleid($ruleid){
			$sql = 'select * from '.$this->_table.' where ruleid='.$ruleid;
			return DB::findAll($sql);
		}
		//删除所有ruleid为参数值的contactrule
		function delContactruleByRuleid($ruleid){	
			$contactrules=array();	
			$contactrules=$this->findContactRuleByRuleid($ruleid);
			for($i=0;$i<count($contactrules);$i++){
				$this->del_by_id($contactrules[$i][id]);
			}
		}
		function findContactRuleByJobnumber($jobnumber){
			$sql = 'select * from '.$this->_table.' where contactjobnumber='.$jobnumber;
			return DB::findAll($sql);
		}
		//删除所有contactjobnumber为参数值的contactrule
		function delContactruleByJobnumber($jobnumber){	
			$contactrules=array();	
			$contactrules=$this->findContactRuleByJobnumber($jobnumber);
			for($i=0;$i<count($contactrules);$i++){
				$this->del_by_id($contactrules[$i][id]);
			}
		}
		
	}
?>