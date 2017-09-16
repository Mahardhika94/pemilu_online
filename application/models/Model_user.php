<?php class Model_user extends CI_Model
{ 

function login($nim,$pass){
$stat='1';
$this->db->where('nim',$nim);
$this->db->where('password',$pass);
$this->db->where('stat_pass','1');
$query=$this->db->get('mahasiswa');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}

}

function login2($nim,$pass){
$this->db->where('nim',$nim);
$this->db->where('password',$pass);
$query=$this->db->get('mahasiswa');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}

}

function sel_user($nim){
$this->db->where('nim',$nim);
$query=$this->db->get('mahasiswa');
return $query;

}

function sel_jam(){
$query=$this->db->get('wpml2');
return $query;

}


function wpml(){
$this->db->where('stat','yes');
$query=$this->db->get('wpml2');
return $query;
}

function stts(){
$this->db->where('ket','yes');
$query=$this->db->get('stts');
return $query;
}

function sel_about(){
$query=$this->db->get('about');
return $query;
}

function sel_nav(){
$query=$this->db->get('navigasi');
return $query;
}

function sel_statpml($nim){
$this->db->where('nim',$nim);
$query=$this->db->get('stapml');
if($query->num_rows()>0){
return $query;
}else{
return array();
}
}

function sel_bemu(){
$this->db->order_by('nomor','ASC');
$this->db->where('lembaga','Bem Universitas');
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function sel_dpm(){
$this->db->order_by('nomor','ASC');
$this->db->where('lembaga','Dpm');
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}

}

function sel_bemf($bemf){
$this->db->order_by('nomor','ASC');
$this->db->where('lembaga',$bemf);
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}

}

function sel_hima($hima){
$this->db->order_by('nomor','ASC');
$this->db->where('lembaga',$hima);
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}

}

function vote($val){
$query=$this->db->insert('statistik',$val);
return $query;
}

function up_stat($val,$nim){
$this->db->where('nim',$nim);
$query=$this->db->update('stapml',$val);
return $query;
}

function sel_mhs2($nim,$tgl,$fak,$prod){
$this->db->where('nim',$nim);
$this->db->where('tgl_lahir',$tgl);
$this->db->where('fakultas',$fak);
$this->db->where('prodi',$prod);

$query=$this->db->get('mahasiswa');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function up_pass($nim,$pass){
$pass2=md5($pass);
$val=array('password'=>$pass2,'stat_pass'=>'2');
$this->db->where('nim',$nim);
$query=$this->db->update('mahasiswa',$val);
return $query;


}

function sel_admin(){
$this->db->where('id_user','1');
$query=$this->db->get('user');
return $query;
}

function get_calon($lem){
$this->db->where('lembaga',$lem);

$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function get_calon2($no,$lem){
$this->db->where('nomor',$no);
$this->db->where('lembaga',$lem);

$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query;
}else{
return array();
}
}

function sel_report($no,$lem){
$query=$this->db->query('select *,count(nourut) as jumlah FROM statistik
						where nourut="'.$no.'" and lembaga="'.$lem.'";');
if($query->num_rows()>0){
return $query;
}else{
return array();
}

}


function cal_ket($nim){
$this->db->where('nim_ketua',$nim);
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query;
}else{
return array();
}

}

function cal_wk($nim){
$this->db->where('nim_wakil',$nim);
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query;
}else{
return array();
}

}

//***************cekkk**************//
function kirim_pesan($val){
$query=$this->db->insert('pesan',$val);
return $query;
}

function allert(){
$val=array('stat'=>'1');
$query=$this->db->insert('alert',$val);
return $query;
}
}