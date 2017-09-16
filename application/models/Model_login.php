<?php class Model_login extends CI_Model{

function login($username,$pass,$level){
$this->db->where('username',$username);
$this->db->where('password',$pass);
$this->db->where('level',$level);
$query=$this->db->get('user');
return $query->result();
}
}