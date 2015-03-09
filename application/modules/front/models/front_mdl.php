<?php
class Front_mdl extends CI_Model{
  function get_content($param=array()){ 	//khusus untuk table pages
	$this->db->where($param);
	$q=$this->db->get('pages');
	return $q->row();
  }
  
  function metas($param=array()){
	$this->db->where($param);
	$q=$this->db->get('metas');
	return $q->result();
  }
  
  function insert($table,$data,$id=false){
	$this->db->insert($table,$data);
	if($id == true)return $this->db->insert_id();
  }
 


}
?>