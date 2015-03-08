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
 


}
?>