<?php class Admin extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('date');
$this->load->database();
$this->load->library('session');
$this->load->library('pagination');
$this->load->model('Model_admin');
$this->load->helper('url');
header('Acces-Control-Allow-Origin: *');
}

function index(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$this->load->view('admin/index',$data);
}else{
redirect('Admin/login');
}
}

function pemilu(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
$data['pass']=$this->session->userdata('password');
if($data['level']=='Admin'){
$dt['dt']=$this->Model_admin->sel_tgl();
$row=$dt['dt']->row_array();
$data['tgl']=$row['tgl'];
$data['jam1']=$row['jam_mulai'];
$data['jam2']=$row['jam_akir'];
$data['tgl']=$row['tgl'];

$data['stat']=$row['stat'];
$this->load->view('admin/pemilu',$data);
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
if($data['level']=='Admin'){
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

$this->load->view('admin/laporan',$data);
}else{
redirect('Admin/login');
}
}

function statistik($lem=0){
$lem=$this->input->post('lem');
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$data['data']=$this->Model_admin->sel_report($lem);
$this->load->view('admin/statistik',$data);
}else{
redirect('Admin/login');
}
}


function about(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$dt['dt']=$this->Model_admin->sel_about();
$row=$dt['dt']->row_array();
$data['id_about']=$row['id_about'];
$data['ket']=$row['ket'];
$this->load->view('admin/about',$data);
}else{
redirect('Admin/login');
}

}

function list_mhs(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$data['data']=$this->Model_admin->sel_mhs();
$this->load->view('admin/data_mhs',$data);
}else{
redirect('Admin/login');
}}

function add_mhs(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$this->load->view('admin/add_mhs',$data);
}else{
redirect('Admin/login');
}
}



function list_calon(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$data['data']=$this->Model_admin->sel_calon();
$this->load->view('admin/data_calon',$data);
}else{
redirect('Admin/login');
}
}



function add_calon(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$this->load->view('admin/add_calon',$data);
}else{
redirect('Admin/login');
}
}

function del_mhs($nim){
$this->Model_admin->del_mhs($nim);
redirect('Admin/list_mhs');
}

function del_calon($id){
$dt['dt']=$this->Model_admin->sel_calon2($id);
$row=$dt['dt']->row_array();
$fotok=$row['foto_ketua'];
$fotowk=$row['foto_wakil'];
$this->Model_admin->del_calon($id);
$this->del_foto($fotok,$fotowk);

}

function del_foto($name,$name2){
unlink('asset/img/calon/ketua/'.$name);
unlink('asset/img/calon/wakil/'.$name);
redirect('Admin/list_calon');
}


function profile(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
if($data['level']=='Admin'){
$dt['dt']=$this->Model_admin->sel_pro($data['username']);
$row=$dt['dt']->row_array();
$data['nama']=$row['nama'];
$data['email']=$row['email'];
$data['posisi']=$row['posisi'];

$this->load->view('admin/profile',$data);
}else{
redirect('Admin/login');
}
}

function navigasi(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$dt['dt']=$this->Model_admin->sel_nav();
$row=$dt['dt']->row_array();
$data['id']=$row['id_nav'];
$data['navigasi']=$row['navigasi'];
$this->load->view('admin/navigasi',$data);
}else{
redirect('Admin/login');
}

}

function add_user(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$this->load->view('admin/add_user',$data);
}else{
redirect('Admin/login');
}
}

function data_user(){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$data['data']=$this->Model_admin->sel_user($data['username']);
$this->load->view('admin/data_user',$data);
}else{
redirect('Admin/login');
}
}

function del_user($id){
$this->Model_admin->del_user($id);
redirect('Admin/data_user');
}

function login(){
$data['level']=$this->session->userdata('level');
if($data['level'] =='Admin' ){
$this->load->view('admin/index');
}elseif($data['level'] =='Bawaslu' ){
redirect('bws/index');
}else{
$this->load->view('login');
}
}

function logout(){
$this->session->unset_userdata('level');
$this->session->unset_userdata('username');
$this->session->unset_userdata('password');
redirect('Admin/login');
}

function det_calon($id){
$data['level']=$this->session->userdata('level');
$data['username']=$this->session->userdata('username');
if($data['level']=='Admin'){
$dt['dt']=$this->Model_admin->sel_calon2($id);
$row=$dt['dt']->row_array();
$data['nimk']=$row['nim_ketua'];
$data['nimwk']=$row['nim_wakil'];
$data['namak']=$row['nama_ketua'];
$data['namawk']=$row['nama_wakil'];
$data['lembaga']=$row['lembaga'];
$data['nomor']=$row['nomor'];
$data['id_calon']=$row['id_calon'];
$data['fotok']=$row['foto_ketua'];
$data['fotowk']=$row['foto_wakil'];
$data['visi']=$row['visi_misi'];
$data['bio_ketua']=$row['bio_ketua'];
$data['bio_wakil']=$row['bio_wakil'];
$data['prod_ketua']=$row['prod_ketua'];
$data['prod_wakil']=$row['prod_wakil'];
$data['fak_ketua']=$row['fak_ketua'];
$data['fak_wakil']=$row['fak_wakil'];
$this->load->view('admin/up_calon',$data);
}else{
redirect('Admin/login');
}

}

function up_fk($id,$foto=0){
$data['username']=$this->session->userdata('username');
$data['id_calon']=$id;
$data['foto']=$foto;
$data['kon']=1;
$this->load->view('admin/up_ftc',$data);
}

function up_fwk($id,$foto=0){
$data['username']=$this->session->userdata('username');
$data['foto']=$foto;
$data['id_calon']=$id;
$data['kon']=2;
$this->load->view('admin/up_ftc',$data);
}

function det_mhs($nim){
$data['username']=$this->session->userdata('username');
$dt['dt']=$this->Model_admin->det_mhs($nim);
$row=$dt['dt']->row_array();
$data['nim']=$row['nim'];
$data['nama']=$row['nama'];
$data['jenkel']=$row['jenkel'];
$data['tgl_lahir']=$row['tgl_lahir'];
$data['fakultas']=$row['fakultas'];
$data['prodi']=$row['prodi'];
$data['status']=$row['status'];
$data['tahun_msk']=$row['tahun_msk'];
$this->load->view('admin/up_mhs',$data);
}

function coba2(){
$lem="Dpm";
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
$this->load->view('user/coba',$data);

}


}