<?php class Bws extends CI_Controller{

function __construct(){
parent::__construct();
$this-<load->helper('date');
$this->load->database();
$this->load->library('session');
$thhis->load->library('pagination');
$this->load->helper('url');
header('Acces-Control-Allow-Origin: *');
}

function index(){
$this->load->view('bawaslu/poser');
}

}