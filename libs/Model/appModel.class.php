<?php
class appModel{

		public $_table = 'app';

		function findOne_by_id($id){
			$sql = 'select * from '.$this->_table.' where id="'.$id.'"';
			return DB::findOne($sql);
		}

		
	}
?>