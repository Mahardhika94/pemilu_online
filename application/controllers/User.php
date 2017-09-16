<?php class User extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('date');
$this->load->database();
$this->load->library('session');
$this->load->library('pagination');
$this->load->model('Model_user');
$this->load->helper('url');
header('Acces-Control-Allow-Origin: *');
}

function index(){
    $stat=$this->session->userdata('stat');
	if($stat == 'mhs'){
	$dt['dt']=$this->Model_user->sel_about();
	$row=$dt['dt']->row_array();
	$data['about']=$row['ket'];
	$this->load->view('user/home',$data);
	}else{
	$this->load->view('user/login');
	}

}

function jam(){
$dt['dt']=$this->Model_user->sel_jam();
$row=$dt['dt']->row_array();
$jam1=$row['jam_mulai'];
$jam2=$row['jam_akir'];
$awal=strtotime($jam1);
$akhir=strtotime($jam2);
$skr= strtotime(date("G:j:s "));

if($skr >= $awal and $skr <$akhir){
$hs= "sukses";
}else{
$hs= "failed";
}
return $hs;

} 


function ct(){
$tt=$this->jam();
echo $tt;
}
function login(){
	$stat=$this->session->userdata('stat');
	if($stat == 'mhs'){
	redirect('User/index');
	}else{
	$this->load->view('user/login');
	}
}


function pilihan2(){
    $stat=$this->session->userdata('stat');
	$nim=$this->session->userdata('nim');
	if($stat == 'mhs'){
	$dt['dt']=$this->Model_user->sel_statpml($nim);
	$row=$dt['dt']->row_array();
	$data['st_bem']=$row['bem'];
	$data['st_dpm']=$row['dpm'];
	$data['st_bmuniv']=$row['bm_univ'];
	$data['st_hima']=$row['hima'];

$dr=$this->options();
$data['bemf']=$dr['bemf'];
$data['hima']=$dr['hima'];
$this->load->view('user/sel_pem',$data);

	}else{
	$this->load->view('user/login');
	}
}


function pilihan1(){
    $jam=$this->jam();
	$dt['dt']=$this->Model_user->wpml();
	$row=$dt['dt']->row_array();
	$tgl=$row['tgl'];
	$stat=$row['stat'];
	$tgl2=date(20 .'y-m-d');
	if($stat == 'yes'){
	   $data['tgl']=$tgl;
		   if($tgl == $tgl2 and $jam == "sukses"){
		   redirect('User/pilihan2');
		   }else{
		   $dt['dt']=$this->Model_user->sel_jam();
$row=$dt['dt']->row_array();
$data['jam1']=$row['jam_mulai'];
$data['jam2']=$row['jam_akir'];
		   $this->load->view('user/err_user/err_pml2',$data);
		   }
	}else{
	$dt['dt']=$this->Model_user->sel_jam();
$row=$dt['dt']->row_array();
$data['jam1']=$row['jam_mulai'];
$data['jam2']=$row['jam_akir'];
		$this->load->view('user/err_user/err_pml',$data);
	}

}

function skr(){
$this->load->view('User/pilih');
}

function dd(){
$data=$this->options();

echo $data['hima'].' '. $data['bemf'];
}

function cc(){
$nim=$this->session->userdata('nim');
$fak=$this->session->userdata('fakultas');
$prodi=$this->session->userdata('prodi');
echo $nim .' '. $fak .' '.$prodi;
}


function nav(){
$dt['dt']=$this->Model_user->sel_nav();
$row=$dt['dt']->row_array();
$data['nav']=$row['navigasi'];
$this->load->view('user/nav',$data);
}

function options(){
$prodi=$this->session->userdata('prodi');
$fak=$this->session->userdata('fakultas');
if($fak =='FST'){
$dt['bemf']='Bem FST';
}elseif($fak =='FISE'){
$dt['bemf']='Bem FISE';
}elseif($fak =='FIKES'){
$dt['bemf']='Bem FIKES';
}

if($prodi=='Teknik Informatika'){
$dt['hima']="HIMATIKA";
}elseif($prodi=='Teknik Elektro'){
$dt['hima']="HMTE";
}elseif($prodi=='Sistem Informasi'){
$dt['hima']="HIMASI";
}elseif($prodi=='Manajemen Informatika'){
$dt['hima']="HIMAMIKA";
}elseif($prodi=='Keperawatan'){
$dt['hima']="HIMIKA";
}elseif($prodi=='NERS'){
$dt['hima']="HIMAMIKA";
}elseif($prodi=='Kebidanan'){
$dt['hima']="HIMABI";
}elseif($prodi=='Ilmu Gizi'){
$dt['hima']="HIMAGI";
}elseif($prodi=='Kesehatan Masyarakat'){
$dt['hima']="HMKM";
}elseif($prodi=='Bidan Pendidik'){
$dt['hima']="HIMABI";
}elseif($prodi=='Akuntansi'){
$dt['hima']="HIMAKU";
}elseif($prodi=='Sastra Inggris'){
$dt['hima']="HIMASING";
}elseif($prodi=='Hubungan Internasional'){
$dt['hima']="HIMAHI";
}elseif($prodi=='Ilmu Komunikasi'){
$dt['hima']="HIMAKOM";
}elseif($prodi=='Fisioterapi'){
$dt['hima']="HIMASI";
}

return $dt;
}

function sel_bemu(){
    $stat=$this->session->userdata('stat');
    if($stat == 'mhs'){
    $data['data']=$this->Model_user->sel_bemu();
	$data['ket']="Badan Eksekutif Mahasiswa";
	$this->load->view('user/pilih',$data);
	}else{
	$this->load->view('user/login');
	}


}

function sel_bemf(){
    
    $stat=$this->session->userdata('stat');
    if($stat == 'mhs'){
	$row=$this->options();
    $bemf=$row['bemf'];
	$data['ket']=$row['bemf'];
    $data['data']=$this->Model_user->sel_bemf($bemf);
	$this->load->view('user/pilih',$data);
	}else{
	$this->load->view('user/login');
	}

}

function sel_dpm(){
$stat=$this->session->userdata('stat');
    if($stat == 'mhs'){
	$data['ket']="Dewan Perwakilan Mahasiswa ";
    $data['data']=$this->Model_user->sel_dpm();
	$this->load->view('user/pilih',$data);
	}else{
	$this->load->view('user/login');
	}
}

function sel_hima(){
    $stat=$this->session->userdata('stat');
    if($stat == 'mhs'){
	$row=$this->options();
    $hima=$row['hima'];
	$data['ket']=$row['hima'];
    $data['data']=$this->Model_user->sel_hima($hima);
	$this->load->view('user/pilih',$data);
	}else{
	$this->load->view('user/login');
	}
}


function vote($lembaga,$nomor,$ketua,$wakil){
	$nim=$this->session->userdata('nim');
	$lembaga2=str_replace('%20',' ',$lembaga);
	$ketua2=str_replace('%20',' ',$ketua);
	$wakil2=str_replace('%20',' ',$wakil);
	$val=array('nama_ketua'=>$ketua2,'nama_wakil'=>$wakil2,'lembaga'=>$lembaga2,'nourut'=>$nomor);
	if($lembaga2 == 'Bem Universitas'){
	$val2=array('bem'=>'2');
	}elseif($lembaga2 =='Dpm'){
	$val2=array('dpm'=>'2');
	}elseif($lembaga2 =='Bem Fikes' or $lembaga2 =='Bem FST' or $lembaga2=='Bem Fise'){
	$val2=array('bm_univ'=>'2');
	}else{
	$val2=array('hima'=>'2');
	}

	$this->Model_user->vote($val);
	$this->Model_user->up_stat($val2,$nim);
	redirect('User/pilihan1');
}


function up_pass(){
	$nim=$this->input->post('nim');
	$tgl=$this->input->post('tgl');
	$fak=$this->input->post('fak');
	$prod=$this->input->post('prodi');
	$pass=$this->input->post('pass');
	$dr['dr']=$this->Model_user->sel_mhs2($nim,$tgl,$fak,$prod);
	$row=count($dr['dr']);
	if($row>0){
	$this->Model_user->up_pass($nim,$pass);
	   $this->load->view('user/err_user/suc_pass');
	}else{
	  $this->load->view('user/err_user/fail_pass');
	}
}


function logout(){
$this->session->unset_userdata('nim');
$this->session->unset_userdata('stat');
redirect('User/login');
}

function sendMail1() {
       $dt['dt']=$this->Model_user->sel_admin();
       $row=$dt['dt']->row_array();
	   $email=$row['email'];
	   $nama=$this->input->post('nama');
	   $pesan=$this->input->post('pesan');
	   $mail=$this->input->post('email');
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "dboyscos@gmail.com";
        $config['smtp_pass'] = "087863509";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['validation'] = TRUE;
         $config['smtp_timeout'] = '7';
        $config['newline'] = "\r\n";

        
        
        $ci->email->initialize($config);
 
        $ci->email->from('dboyscos@gmail.com', 'E-Vote');
        $list = array($email);
        $ci->email->to($list);
        $ci->email->subject('Pesan User E-Voting ');
        $ci->email->message($pesan.'</br>from '. $nama .' email : '. $mail);
        if ($this->email->send()) {
            $this->load->view('user/err_user/suc_mail');
        } else {
           $this->load->view('user/err_user/err_mail');
        }


	    
    }
	
	
	function stat2(){
    $stat=$this->session->userdata('stat');
	$nim=$this->session->userdata('nim');
	if($stat == 'mhs'){
	$dt['dt']=$this->Model_user->sel_statpml($nim);
	$row=$dt['dt']->row_array();
	$data['st_bem']=$row['bem'];
	$data['st_dpm']=$row['dpm'];
	$data['st_bmuniv']=$row['bm_univ'];
	$data['st_hima']=$row['hima'];

$dr=$this->options();
$data['bemf']=$dr['bemf'];
$data['hima']=$dr['hima'];
$this->load->view('user/sel_stat',$data);

	}else{
	$this->load->view('user/login');
	}
}


function stat1(){
	$dt['dt']=$this->Model_user->wpml();
	$row=$dt['dt']->row_array();
	$tgl=strtotime($row['tgl']);
	$stat=$row['stat'];
	$tgl2=strtotime(date(20 .'y-m-d'));
	if($stat == 'yes'){
	   $data['tgl']=$row['tgl'];
		   if($tgl2 > $tgl ){
		   redirect('User/stat2');
		   }else{
		   $this->load->view('user/err_user/err_stat',$data);
		   }
	}else{
		$this->load->view('user/err_user/err_pml');
	}

}

function ttd(){
$tgl2=strtotime(date(20 .'y-m-d'));
$tgl=strtotime('2017-08-15');
echo $tgl2. ' '. $tgl;
if($tgl2 > $tgl){
echo "sukses";
}
}

function sel_stat($lem2){
$lem=str_replace('%20',' ',$lem2);
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

function coba2(){
$lem="Dpm";
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
$this->load->view('user/coba',$data);

}


function ff(){
$r=5;
echo eval('return $'. 'r' . ';');
}

function sel_ket($nim){
$dt['dt']=$this->Model_user->cal_ket($nim);
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
$this->load->view('user/pro_k',$data);
}


function sel_wk($nim){
$dt['dt']=$this->Model_user->cal_wk($nim);
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
$this->load->view('user/pro_w',$data);


}

function sendMail() {
    $nama=$this->input->post('nama');
	$pesan=$this->input->post('pesan');
	$mail=$this->input->post('email');   
    $val=array('nama'=>$nama,'email'=>$mail,'pesan'=>$pesan);
	$this->Model_user->kirim_pesan($val);
	$this->Model_user->allert();
	$this->load->view('user/err_user/sucmsg');
	    
    }

}