<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('emailModel');
    }
    public function index()
    {
        $this->load->view('partials/header');
        $this->load->view('index');
        $this->load->view('partials/support');
        $this->load->view('partials/footer');
    }
    public function about()
    {
        $page_details['title'] = "About Us";
        $this->load->view('partials/header');
        $this->load->view('partials/breadcrums',$page_details);
        $this->load->view('about');
        $this->load->view('partials/support');
        $this->load->view('partials/footer');
    }
    public function services()
    {
        $page_details['title'] = "Our Services";
        $this->load->view('partials/header');
        $this->load->view('partials/breadcrums',$page_details);
        $this->load->view('services');
        $this->load->view('partials/support');
        $this->load->view('partials/footer');
    }
    public function career()
    {
        $page_details['title'] = "Career";
        $this->load->view('partials/header');
        $this->load->view('partials/breadcrums',$page_details);
        $this->load->view('career');
        $this->load->view('partials/support');
        $this->load->view('partials/footer');
    }
    public function contact()
    {
        $page_details['title'] = "Contact Us";
        $this->load->view('partials/header');
        $this->load->view('partials/breadcrums',$page_details);
        $this->load->view('contact');
        $this->load->view('partials/footer');
    }
    // public function portfolio()
    // {
    //     $page_details['title'] = "Portfolio";
    //     $this->load->view('partials/header');
    //     $this->load->view('partials/breadcrums',$page_details);
    //     $this->load->view('portfolio');
    //     $this->load->view('partials/support');
    //     $this->load->view('partials/footer');
    // }
    public function uploadcv()
    {
        $this->emailModel->send_smtp_mail($_POST['message'],'Cv',$_POST['email'],$_POST['name'],);
        $this->load->view('partials/success');
    }
    public function sendmail()
    {
        $this->emailModel->send_smtp_mail($_POST['message'],$_POST['subject'],$_POST['email'],$_POST['name'],);
        $this->load->view('partials/success');
    }
    public function notfound()
    {
        $this->load->view('partials/header');
        $this->load->view('404');
        $this->load->view('partials/support');
        $this->load->view('partials/footer');
    }
}
?>