<?php
class Front_mdl extends CI_Model{

  function get_content($id){ 	//khusus untuk table pages
  	$table='pages';
  	$param=array('ID'=>$id);
	return $this->get($table,$param,true);
  }
  
  function get_uid(){
  	return 1;
  }
  
  function get($table='',$param=array(),$is_single=false){
  	$this->db->where($param);
	$q=$this->db->get('metas');
	if($is_single==true) return $q->row();
	return $q->result();
  }
  
  function metas($id){
	$table='metas';
	$param=array('page_id'=>$id);
	return $this->get($table,$param);
  }
  
  function insert($table,$data,$id=false){
	$this->db->insert($table,$data);
	if($id == true)return $this->db->insert_id();
  }
  
  function process(){
  	$user_id=$this->get_uid();
  	$person_name=$this->input->post('name');
	$address=$this->input->post('address');
	$country=$this->input->post('country');
	$postal_code=$this->input->post('postal_code');
	$subdomain=$this->input->post('subdomain');
	$username=$this->input->post('username');
	$password=$this->input->post('password');
	$confirm=$this->input->post('confirm');
	$captcha=$this->input->post('captcha');
	if($password==$confirm){
		if(!empty($person_name) and !empty($address) and !empty($country) and !empty($postal_code) and !empty($subdomain)){
			$data=array('username'=>$username,'password'=>$password,'status'=>2,'user_verification'=>md5(date('sdgmsy')));
			$id=$this->insert('users',$data,true);
			$data=array('user_id'=>$user_id,'fullname'=>$person_name,'address'=>$address,'city'=>$country,
					'postalcode'=>$postal_code);
			$this->insert('member_account',$data,true);
			$data=array('user_id'=>$user_id,'store_url'=>$subdomain);
			$this->insert('store_list',$data);
			return 1;
		}else{
			return "Maaf Tidak Boleh Ada Yang kosong!";
		}
	}else{
		return "harus cocok";
	}
  }
 


}
?>
