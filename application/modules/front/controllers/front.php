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
	$data['content']=$this->m->get_content(array('ID'=>$id));
	$data['metadatas']=$this->m->metas(array('page_id'=>$id));
	$this->body('home',$data);
 }
 
 function shop_list(){
	$id=2;		//khusus SHOP , ID = 2;
	$data['active_page']='list';
	$data['content']=$this->m->get_content(array('ID'=>$id));
	$data['metadatas']=$this->m->metas(array('page_id'=>$id));
	$this->body('home',$data);
 }
 
 function artikel_list(){
	$id=3;		//khusus BLOG , ID = 3;
	$data['active_page']='blog';
	$data['content']=$this->m->get_content(array('ID'=>$id));
	$data['metadatas']=$this->m->metas(array('page_id'=>$id));
	$this->body('home',$data);
 }
 
 function help(){
	$id=4;		//khusus HELP , ID = 4;
	$data['active_page']='help';
	$data['content']=$this->m->get_content(array('ID'=>$id));
	$data['metadatas']=$this->m->metas(array('page_id'=>$id));
	$this->body('home',$data);
 }




}







?>
