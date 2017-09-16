<?php class Model_admin extends CI_Model
{
function sel_pro($username){
$this->db->where('username',$username);
$query=$this->db->get('user');
if($query->num_rows()>0){
return $query;
}else{
return array();
}


}
function sel_about(){
$query=$this->db->get('about');
return $query;
}

function sel_nav(){
$query=$this->db->get('navigasi');
return $query;
}

function sel_mhs(){
$query=$this->db->get('mahasiswa');
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

function det_mhs($nim){
$this->db->where('nim',$nim);
$query=$this->db->get('mahasiswa');
if($query->num_rows()>0){
return $query;
}else{
return array();
}
}

function sel_calon(){
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function sel_calon2($id){
$this->db->where('id_calon',$id);
$query=$this->db->get('calon');
if($query->num_rows()>0){
return $query;
}else{
return array();
}
}

function sel_user($username){
$this->db->where('username !=',$username);
$query=$this->db->get('user');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function del_mhs($nim){
$this->db->where('nim',$nim);
$query=$this->db->delete('mahasiswa');
return $query;
}

function del_calon($id){
$this->db->where('id_calon',$id);
$query=$this->db->delete('calon');
return $query;
}

function del_user($id){
$this->db->where('id_user',$id);
$query=$this->db->delete('user');
return $query;
} 

function sel_tgl(){
$query=$this->db->get('wpml2');
return $query;
}


/*function sel_report($lem){
$query=$this->db->query('select *,count(statistik.nourut) as jumlah FROM statistik
						where lembaga="'.$lem.'";');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}

}*/


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
//copy***************//
function sel_pesan(){
$this->db->order_by('waktu','DESC');
$query=$this->db->get('pesan');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function sel_allert(){
$query=$this->db->get('alert');
return $query->result();
}

function del_allert(){
$this->db->where('stat','1');
$query=$this->db->delete('alert');
return $query;
}

function del_pesan($id){
$this->db->where('id_pesan',$id);
$query=$this->db->delete('pesan');
return $query;
}

}