<?php class Bws extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('date');
$this->load->database();
$this->load->model('Model_admin');
$this->load->model('Model_user');
$this->load->library('session');
$this->load->library('pagination');
$this->load->helper('url');
header('Acces-Control-Allow-Origin: *');
}

function index(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
if($data['level']=='Bawaslu'){
$dt['dt']=$this->Model_admin->sel_pro($data['username']);
$row=$dt['dt']->row_array();
$data['nama']=$row['nama'];
$data['email']=$row['email'];
$data['posisi']=$row['posisi'];
$this->load->view('bawaslu/proser',$data);
}else{
redirect('Admin/login');
}

}

function report($lem=0){
$lem=$this->input->post('lem');
$data['lem']=$lem;
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
$data['pass']=$this->session->userdata('password');
if($data['level']=='Bawaslu'){
$dt=$this->Model_admin->get_calon($lem);
$jum=count($dt);
$data['jum']=$jum;
for($i=1; $i<= $jum; $i++){
$st=$this->Model_admin->sel_report($i,$lem);
$cl=$this->Model_admin->get_calon2($i,$lem);
$rw=$st->row_array();
$rl=$cl->row_array();
$data['nama_ketua'.$i]=$rl['nama_ketua'];
$data['nama_wakil'.$i]=$rl['nama_wakil'];
$data['nomor'.$i]=$rl['nomor'];
$data['lembaga'.$i]=$rl['lembaga'];
$data['jumlah'.$i]=$rw['jumlah'];
}

$this->load->view('bawaslu/laporan',$data);
}else{
redirect('Admin/login');
}
}

function statistik(){
$lem=$this->input->post('lem');
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Bawaslu'){

$this->load->view('bawaslu/statistik',$data);
}else{
redirect('Admin/login');
}

}


function coba($lem){
$data =$this->Model_admin->sel_report($lem);
foreach($data as  $row){
echo $row->nourut .' jumlah suara:'. $row->jumlah .'</br>';

}
}

function dd(){
$data['d']=1;
$data['f']=2;
$data['g']=3;
foreach($data as $row){
echo $row->d;
}
}

function sel_stat(){
$lem=$this->input->post('lem');
$data['lem']=$lem;
$dt=$this->Model_user->get_calon($lem);
$jum=count($dt);
$data['jum']=$jum;
for($i=1; $i<= $jum; $i++){
$st=$this->Model_user->sel_report($i,$lem);
$cl=$this->Model_user->get_calon2($i,$lem);
$rw=$st->row_array();
$rl=$cl->row_array();
$data['nama_ketua'.$i]=$rl['nama_ketua'];
$data['nama_wakil'.$i]=$rl['nama_wakil'];
$data['nomor'.$i]=$rl['nomor'];
$data['lembaga'.$i]=$rl['lembaga'];
$data['jumlah'.$i]=$rw['jumlah'];
}
$this->load->view('user/statistik',$data);

}


}