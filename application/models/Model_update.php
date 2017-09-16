<?php class Model_update extends CI_Model{

function up_about($val,$id){
$this->db->where('id_about',$id);
$query=$this->db->update('about',$val);
return $query;
}

function up_nav($val,$id){
$this->db->where('id_nav',$id);
$query=$this->db->update('navigasi',$val);
return $query;
}

function up_tgl($val,$id){
$this->db->where('id_wpml2',$id);
$query=$this->db->update('wpml2',$val);
return $query;
}

function up_pro($val,$usr){
$this->db->where('username',$usr);
$query=$this->db->update('user',$val);
return $query;
}

function up_calon($val,$id){
$this->db->where('id_calon',$id);
$query=$this->db->update('calon',$val);
return $query;
}

function reset_pemilu(){
$uery=$this->db->query('truncate table statistik');
return $query;
}

function res_stat($val2){
$query=$this->db->update('stapml',$val2);
return $query;
}

function up_imgc($val,$nim){
$this->db->where('nim_ketua',$nim);
$query=$this->db->update('calon',$val);
return $query;
}

function up_mhs($val,$nim){
$this->db->where('nim',$nim);
$query=$this->db->update('mahasiswa',$val);
return $query;
}

}