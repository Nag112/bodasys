<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class EmailModel extends CI_Model
{
    public function send_smtp_mail($msg=NULL, $sub=NULL, $from=NULL, $name=NULL) {
		//Load email library
		$this->load->library('email');

		//SMTP & mail configuration
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'nagacharan.nitg@gmail.com',
			'smtp_pass' => 'Nagacharan@1',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$htmlContent = $msg;

		$this->email->to("info@bodasystems.com");
        // $this->email->to("raju11297@gmail.com");
		$this->email->from($from, $name);
		$this->email->subject($sub);
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
	}
}