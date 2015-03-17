<?php
class Front extends CI_controller{

 function __construct(){
	parent::__construct();
	$this->load->model('front_mdl','m');
	$this->load->helper(array('metas','url','html'));
 }
 
 function index(){
	$this->home();
 }
 
 function header($data){
	$this->load->view('header',$data);
 }
 
 function footer($data){
	$this->load->view('footer',$data);
 }
 
 function metas($data=array()){
	foreach($data as $m){
		
	}
 }
 
 function body($filename='',$data){
	$this->header($data);
	$this->load->view($filename,$data);
	$this->footer($data); 
 }
 
 function home(){
	$id=1;		//khusus HOME , ID = 1;
	$data['active_page']='home';
	$data['content']=$this->m->get_content($id);
	$data['metadatas']=$this->m->metas($id);
	$this->body('home',$data);
 }
 
 function shop_list(){
	$id=2;		//khusus SHOP , ID = 2;
	$data['active_page']='list';
	$data['content']=$this->m->get_content($id);
	$data['metadatas']=$this->m->metas($id);
	$this->body('shop_list',$data);
 }
 
 function artikel_list(){
	$id=3;		//khusus BLOG , ID = 3;
	$data['active_page']='blog';
	$data['content']=$this->m->get_content($id);
	$data['metadatas']=$this->m->metas($id);
	$this->body('blog',$data);
 }
 
 function help(){
	$id=4;		//khusus HELP , ID = 4;
	$data['active_page']='help';
	$data['content']=$this->m->get_content($id);
	$data['metadatas']=$this->m->metas($id);
	$this->body('help',$data);
 }
 
 function signup(){
	$this->load->library('session');
	if($_POST){
		$this->process('signup');
		exit;
	}
	$this->load->helper('form');
	$captcha=array('siapa nama orang tuamu?','rohman');
	$data['captcha']=$captcha[0];
	$this->session->set_flashdata('cpt',$captcha);
	$id=5;		//khusus SIGNUP , ID = 5;
	$data['session']=$this->session->flashdata('cpt');
	$data['active_page']='home';
	$data['content']=$this->m->get_content($id);
	$data['metadatas']=$this->m->metas($id);
	$this->body('signup',$data);
 }
 
 function process($type=''){
	if($type=='signup'){
		$process=$this->m->process();
	}
	if($process == 1){
		redirect('front/success');
	}else{
		echo 'terjadi kesalahan! harap periksa kembali dan refresh halaman.';
	}
	exit;
 }
 
 function login_member(){
 	if($_POST){
 		$this->load->library('encrypt');
 		$response=$this->m->login_member();
 		if($response == 1){
 		
 		}
 	}
 	$id=6;		//khusus SIGIN , ID = 5;
 	$data['metadatas']=$this->m->metas($id);
 	$this->load->view('login_member',$data);
 }




}







?>
