<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }
    public function about()
    {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }
}