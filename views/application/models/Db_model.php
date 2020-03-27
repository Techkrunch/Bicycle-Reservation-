<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model{
	
	public function __construct(){
	
	}
	public function record_count($table_name) {
		$this->db->where('status_id_fk',1);   
		$this->db->from($table_name);
        return $this->db->count_all_results();
    }
	public function getAllSpecific($table_name, $data){
			$query = $this->db->get_where($table_name, $data);
			if($query->num_rows() > 0){
				foreach($query->result() as $rows){
					$data[] = $rows;
				}
				return $data;
			}
	}
	public function getAll($table_name, $limit){
		$query = $this->db->get($table_name, $limit);
		if($query->num_rows()>0){
			foreach($query->result() as $rows){
				$data[] = $rows;
			}
			return $data;
		}
	}
	function login_access($table_name, $data, $password)
	{
		$query = $this->db->get_where($table_name,$data);
		if ($query->num_rows() == 1)
		{
			$user_row = $query->row();
			if(password_verify($password,$user_row->password)){
				$data[] = $user_row;
				return $data;
			}
			else{
				return false;
			}
		}else{
			echo 'No user found';
		}
		
	} 
	public function dbInsert($table_name, $data){
		$insertData = $this->db->insert($table_name, $data);
		return $insertData;
	}
	public function dbInsertReturnID($table_name, $data){
		$insertData = $this->db->insert($table_name, $data);
		$last_id = $this->db->insert_id();
		return $last_id;
	}
	public function updateData($table_name, $data, $columns){
		//$this->db->where($column = $key);
		$result = $this->db->update($table_name, $data, $columns);
		return $result;
	}
	public function passSQL($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			$rows = $query->row();
			return $rows;
		}
	}
	public function passDeleteSQL($sql){
		$query = $this->db->query($sql);
		$afftectedRows = $this->db->affected_rows();
		 if ($afftectedRows > 1) {
			return true;
		}else{
			return false;
		}
	}
	public function passSQLAll($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}
	public function deleteData($table_name, $data){
		$result = $this->db->delete($table_name, $data);
		return $result;
	}
	public function id_exists($table_name, $data){
		$query = $this->db->get_where($table_name, $data);
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}
?>