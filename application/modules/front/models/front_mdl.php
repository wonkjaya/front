<?php
class Front_mdl extends CI_Model{

  function get_content($id){ 	//khusus untuk table pages
  	$table='pages';
  	$param=array('ID'=>$id);
	return $this->get($table,$param,true);
  }
  
  function post($var=''){
  	if($var !== '') return $this->input->post($var);
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
  	$person_name=$this->post('name');
	$address=$this->post('address');
	$country=$this->post('country');
	$postal_code=$this->post('postal_code');
	$subdomain=$this->post('subdomain');
	$username=$this->post('username');
	$password=$this->post('password');
	$confirm=$this->post('confirm');
	$captcha=$this->post('captcha');
	$answr=$this->session->flashdata('cpt')[1];
	if($password==$confirm and $captcha==$answr){
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
  
  function login_member(){
  	$username=$this->post('userkios');
  	$password=$this->post('passkios');
  	$res=$this->auth($username,$password);
  	return $res;
  }
  
  function auth($username,$password){
  	$data=$this->get_data_from_user($username);
  	foreach($data->result() as $r){
  		$pass=$this->encrypt->decode($r->password);
  		$state=$r->status;
	  	if($state == 0){
	  		return 0;			// email belum diverifikasi
	  	}elseif($state == 1){
	  		if($pass == $password){
	  			return $username;	//berhasil masuk
	  		}else{
	  			return 404;		// username atau password salah!
	  		}
	  	}elseif($state == 2){
	  		return 2;			//akun terbanned
	  	}
  	}
  	exit;
  }
 


}
?>
