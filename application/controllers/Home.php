<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('partials/header');
        $this->load->view('index');
        $this->load->view('portfolio');
        $this->load->view('partials/support');
        $this->load->view('partials/footer');
    }
    public function about()
    {
        $page_details['title'] = "About Us";
        $this->load->view('partials/header');
        $this->load->view('partials/breadcrums',$page_details);
        $this->load->view('about');
        $this->load->view('partials/footer');
    }
    public function services()
    {
        $page_details['title'] = "Services";
        $this->load->view('partials/header');
        $this->load->view('partials/breadcrums',$page_details);
        $this->load->view('partials/servicesList');
        $this->load->view('partials/footer');
    }
    public function career()
    {
        $this->load->view('partials/header');
        $this->load->view('career');
        $this->load->view('partials/footer');
    }
    public function contact()
    {
        $this->load->view('partials/header');
        $this->load->view('contact');
        $this->load->view('partials/footer');
    }
    public function portfolio()
    {
        $this->load->view('partials/header');
        $this->load->view('portfolio');
        $this->load->view('partials/footer');
    }
}
