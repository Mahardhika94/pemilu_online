<?php class Up_admin extends CI_Controller
{
function __construct(){
parent::__construct();
$this->load->helper('date');
$this->load->database();
$this->load->library('session');
$this->load->library('pagination');
$this->load->model('Model_update');
$this->load->helper('url');
header('Acces-Control-Allow-Origin: *');
}

function up_about($id){
$about=$this->input->post('about');
$val=array('ket'=>$about);
$this->Model_update->up_about($val,$id);
redirect('Admin/about');
}

function up_nav($id){
$nav=$this->input->post('navigasi');
$val=array('navigasi'=>$nav);
$this->Model_update->up_nav($val,$id);
redirect('Admin/navigasi');
}

function up_tgl(){
$id='1';
$tgl=$this->input->post('tgl');
$jam1=$this->input->post('jam1');
$jam2=$this->input->post('jam2');
$val=array('tgl'=>$tgl,'jam_mulai'=>$jam1,'jam_akir'=>$jam2,'stat'=>'yes');
$this->Model_update->up_tgl($val,$id);
redirect('Admin/pemilu');
}

function up_pro(){
$usd=$this->session->userdata('username');
$username=$this->input->post('username');
$nama=$this->input->post('nama');
$email=$this->input->post('email');
$pass=$this->input->post('pass');
$jabatan=$this->input->post('jbt');
$pass2=md5($pass);
$level="Admin";
$val=array('username'=>$username,'nama'=>$nama,'email'=>$email,'password'=>$pass2,'posisi'=>$jabatan,'level'=>$level);
$this->Model_update->up_pro($val,$usd);
$this->session->set_userdata('username',$username);
$this->session->set_userdata('password',$pass);
redirect('Admin/profile');
}

function up_user(){
$usd=$this->session->userdata('username');
$username=$this->input->post('username');
$nama=$this->input->post('nama');
$email=$this->input->post('email');
$pass=$this->input->post('pass');
$jabatan=$this->input->post('jbt');
$pass2=md5($pass);
$val=array('username'=>$username,'nama'=>$nama,'email'=>$email,'password'=>$pass2,'posisi'=>$jabatan);
$this->Model_update->up_pro($val,$usd);
$this->session->set_userdata('username',$username);
$this->session->set_userdata('password',$pass);
redirect('Admin/profile');
}

function up_calon($id){
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
$this->Model_update->up_calon($val,$id);
redirect('Admin/list_calon');
}

function up_imgc($id,$img){
$config['upload_path'] = './asset/img/calon/';
	 $config['allowed_types']  = 'gif|jpg|png';
	 $config['max_size']  = 250;
	 $config['max_width'] = 1024;
	 $config['max_height'] = 768;
  $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view ('errors/err_foto');
						}
                else
                {
				 
                        					
						$foto=$this->upload->data('file_name'); 
						
						
						$val=array('foto'=>$foto);
						$this->Model_update->up_calon($val,$id);
						unlink('asset/img/calon/'.$img);
						
                     redirect('Admin/list_calon');
					   
                }

}

function up_fk(){
    $nimk=$this->input->post('nimk');
	$nimwk=$this->input->post('nimwk');
	$data['nimk']=$nimk;
	$data['nimwk']=$nimwk;
	$data['username']=$this->session->userdata('username');
	$config['upload_path'] = './asset/img/calon/ketua';
	$config['allowed_types']  = 'gif|jpg|png';
	$config['max_size']  = 250;
	$config['max_width'] = 1024;
	$config['max_height'] = 768;
    $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view ('err_ad/err_foto');
						}
                else
                {
				 
                        					
						$foto=$this->upload->data('file_name'); 
						
						
						$val=array('foto_ketua'=>$foto);
						$this->Model_update->up_imgc($val,$nimk);
						
                     $this->load->view('admin/add_fwk',$data);
					   
                }

}


function up_fwk(){
    $nimk=$this->input->post('nimk');
	$nimwk=$this->input->post('nimwk');
	$data['nimk']=$nimk;
	$data['nimwk']=$nimwk;
	$config['upload_path'] = './asset/img/calon/wakil';
	$config['allowed_types']  = 'gif|jpg|png';
	$config['max_size']  = 250;
	$config['max_width'] = 1024;
	$config['max_height'] = 768;
    $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view ('err_ad/err_foto');
						}
                else
                {
				 
                        					
						$foto=$this->upload->data('file_name'); 
						
						
						$val=array('foto_wakil'=>$foto);
						$this->Model_update->up_imgc($val,$nimk);
						
                     redirect('Admin/list_calon');
					   
                }

}


function up_imk($id,$foto){
     $config['upload_path'] = './asset/img/calon/ketua/';
	 $config['allowed_types']  = 'gif|jpg|png';
	 $config['max_size']  = 250;
	 $config['max_width'] = 1024;
	 $config['max_height'] = 768;
     $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view ('errors/err_foto');
						}
                else
                {
				 
                        					
						$foto1=$this->upload->data('file_name'); 
						
						
						$val=array('foto_ketua'=>$foto1);
						$this->Model_update->up_calon($val,$id);
						unlink('asset/img/calon/ketua/'.$foto);
						
                     redirect('Admin/list_calon');
					   
                }
}


function up_imwk($id,$foto){
     $config['upload_path'] = './asset/img/calon/wakil/';
	 $config['allowed_types']  = 'gif|jpg|png';
	 $config['max_size']  = 250;
	 $config['max_width'] = 1024;
	 $config['max_height'] = 768;
     $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view ('errors/err_foto');
						}
                else
                {
				 
                        					
						$foto1=$this->upload->data('file_name'); 
						
						
						$val=array('foto_wakil'=>$foto1);
						$this->Model_update->up_calon($val,$id);
						unlink('asset/img/calon/wakil/'.$foto);
						
                     redirect('Admin/list_calon');
					   
                }
}
						
function reset(){
$id='1';
$tgl="2017-01-01";
$val=array('tgl'=>$tgl,'stat'=>'no');
$jam1="00:00:00";
$jam2="00:00:00";
$val=array('tgl'=>$tgl,'jam_mulai'=>$jam1,'jam_akir'=>$jam2,'stat'=>'no');
$val2=array('bem'=>'1','dpm'=>'1','bm_univ'=>'1','hima'=>'1');
$this->Model_update->up_tgl($val,$id);
$this->Model_update->reset_pemilu();
$this->Model_update->res_stat($val2);
redirect("Admin/pemilu");
}


function up_mhs($nim2){
$nim=$this->input->post('nim');
$nama=$this->input->post('nama');
$jenkel=$this->input->post('jenkel');
$tgl=$this->input->post('tgl');
$fak=$this->input->post('fak');
$prodi=$this->input->post('prodi');
$status=$this->input->post('status');
$thm=$this->input->post('thm');

$pass=md5($nim);
$val=array('nim'=>$nim,'nama'=>$nama,'jenkel'=>$jenkel,'tgl_lahir'=>$tgl,'fakultas'=>$fak,'prodi'=>$prodi,
			'status'=>$status,'tahun_msk'=>$thm);
$this->Model_update->up_mhs($val,$nim2);
redirect('Admin/list_mhs');

}

}