<?php class Login extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
	$this->load->helper('date');
	$this->load->database();
	//$this->load->model('Model_admin');
	$this->load->model('Model_login');
	$this->load->model('Model_user');
	//$this->load->model('Model_ins');
	//$this->load->model('Model_sel');
}

function login($level){
$name=$this->input->post('username');
$pass=$this->input->post('password');
$pass2=md5($pass);
$data=$this->Model_login->login($name,$pass2,$level);
$row=count($data);
if($row>0){
$this->session->set_userdata('level',$level);
$this->session->set_userdata('username',$name);
$this->session->set_userdata('password',$pass);
if($level =='Admin'){
redirect('Admin/index');
}elseif($level =='Bawaslu'){
redirect('Bws/index');
}
}else{
$this->load->view('errors/err_log');

}

}


function login2(){
//redirect('Bws/index');
$name=$this->input->post('username');
$pass=$this->input->post('password');
$level='Bawaslu';
$pass2=md5($pass);
$data=$this->Model_login->login($name,$pass2,$level);
$row=count($data);
if($row>0){
$this->session->set_userdata('level',$level);
$this->session->set_userdata('username',$name);
$this->session->set_userdata('password',$pass);

redirect('Bws/index');

}else{
$this->load->view('errors/err_log');

}} 
function logout(){
$this->session->unset_userdata('level');
$this->session->unset_userdata('username');
$this->session->unset_userdata('password');
redirect('Admin/login');
}



function login_user(){
	$nim=$this->input->post('nim');
	$pass=$this->input->post('pass');
	$pass=md5($pass);
	$data=$this->Model_user->login($nim,$pass);
	$row=count($data);
	if($row>0){
	$this->load->view('user/up_pass');
	}else{
	  $dt=$this->Model_user->login2($nim,$pass);
	  $row1=count($dt);
		  if($row1>0){
			  $dat['dat']=$this->Model_user->sel_user($nim);
			  $row2=$dat['dat']->row_array();
			  $this->session->set_userdata('prodi',$row2['prodi']);
			  $this->session->set_userdata('fakultas',$row2['fakultas']);
			  $this->session->set_userdata('nim',$nim);
			  $this->session->set_userdata('stat','mhs');
			  redirect('User/index');
		  }else{
			  $this->load->view('user/err_user/err_log');
		  
		  }

	}

}

}

