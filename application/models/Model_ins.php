<?php class Model_ins extends CI_Model{



function add_user($val){
$query=$this->db->insert('user',$val);
return $query;
}

function add_mhs($val){
$query=$this->db->insert('mahasiswa',$val);
return $query;
}

function add_calon($val){
$query=$this->db->insert('calon',$val);
return $query;
}

function add_stat($val2){
$query=$this->db->insert('stapml',$val2);
return $query;
}

function cek(){
$lev='Admin';
$this->db->where('level',$lev);
$query=$this->db->get('user');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function sel_mhs2($nim){
$this->db->where('nim',$nim);
$query=$this->db->get('mahasiswa');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}
}