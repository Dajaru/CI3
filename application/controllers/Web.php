<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{
function __construct(){ 
    parent::__construct(); 
    } 
    public function index(){  
    $data['judul'] = "halaman depan";
    $this->load->view('header',$data); 
    $this->load->view('content',$data);
    $this->load->view('footer',$data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('header', $data);
        $this->load->view('about', $data);
        $this->load->view('footer', $data);
    }
}

