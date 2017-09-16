<?php class Ins_data extends CI_Controller
{
function __construct(){
parent::__construct();
$this->load->helper('date');
$this->load->database();
$this->load->library('session');
$this->load->library('pagination');
$this->load->model('Model_ins');
$this->load->helper('url');
header('Acces-Control-Allow-Origin: *');
}

function add_user(){
$username=$this->input->post('username');
$pass=$this->input->post('password');
$level=$this->input->post('level');
$newpass=md5($pass);
$cek=$this->Model_ins->cek();
$row=count($cek);
if($level =='Admin' and $row>4){
$this->load->view('admin/err_ad/err_us');
}else{
$val=array('username'=>$username,'password'=>$newpass,'level'=>$level);
$this->Model_ins->add_user($val);
redirect('Admin/data_user');
}
}

function add_mhs(){

$nim=$this->input->post('nim');
$nama=$this->input->post('nama');
$jenkel=$this->input->post('jenkel');
$tgl=$this->input->post('tgl');
$fak=$this->input->post('fak');
$prodi=$this->input->post('prodi');
$status=$this->input->post('status');
$thm=$this->input->post('thm');
$st_pass='1';
$st_pm='1';
$pass=md5($nim);
$dt=$this->Model_ins->sel_mhs2($nim);
$row=count($dt);
if($row>0){
$this->load->view('admin/err_ad/err_upmhs');
}else{
$val=array('nim'=>$nim,'nama'=>$nama,'jenkel'=>$jenkel,'tgl_lahir'=>$tgl,'fakultas'=>$fak,'prodi'=>$prodi,
			'status'=>$status,'tahun_msk'=>$thm,'password'=>$pass,'stat_pass'=>$st_pass,'std_pm'=>$st_pm);
$val2=array('nim'=>$nim,'bem'=>'1','dpm'=>'1','bm_univ'=>'1','hima'=>'1');
$this->Model_ins->add_mhs($val);
$this->Model_ins->add_stat($val2);
redirect('Admin/list_mhs');
}			
}


function add_calon(){
$nimk=$this->input->post('nimk');
$nimwk=$this->input->post('nimwk');
$namak=$this->input->post('namak');
$namawk=$this->input->post('namawk');
$lembaga=$this->input->post('lembaga');
$nomor=$this->input->post('nomor');
$fak_k=$this->input->post('fak_k');
$fak_wk=$this->input->post('fak_wk');
$prodi_k=$this->input->post('prodi_k');
$prodi_wk=$this->input->post('prodi_wk');
$bio_k=$this->input->post('biok');
$bio_wk=$this->input->post('biowk');
$visi=$this->input->post('visi');
$val=array('nim_ketua'=>$nimk,'nim_wakil'=>$nimwk,'nama_ketua'=>$namak,'nama_wakil'=>$namawk,'lembaga'=>$lembaga,'nomor'=>$nomor,'fak_ketua'=>$fak_k,
			'fak_wakil'=>$fak_wk,'prod_ketua'=>$prodi_k,'prod_wakil'=>$prodi_wk,'bio_ketua'=>$bio_k,'bio_wakil'=>$bio_wk,'visi_misi'=>$visi);
						$this->Model_ins->add_calon($val);
$data['nimk']=$nimk;
$data['nimwk']=$nimwk;		
$data['username']=$this->session->userdata('username');
				
                     $this->load->view('admin/add_fk',$data);




}

function del_foto(){
unlink('asset/img/calon/ggg.JPG');


}



}