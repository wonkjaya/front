<?php
class Front extends CI_controller{

 function __construct(){
	parent::__construct();
	$this->load->model('front_mdl');
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
 
 function body($filename='',$data){
	$this->header($data);
	$this->load->view($filename,$data);
	$this->footer($data); 
 }
 
 function home(){
	$data['title']='Home';
	$this->body('home',$data);
 }




}







?>
