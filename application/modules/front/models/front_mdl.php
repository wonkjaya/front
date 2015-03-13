<?php
class Front_mdl extends CI_Model{
  function get_content($param=array()){ 	//khusus untuk table pages
	$this->db->where($param);
	$q=$this->db->get('pages');
	return $q->row();
  }
  
  function get_uid(){
  	return 1;
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
