<?php

 class Addhometour extends CI_Controller
 {
 	function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->library('session');

		}
	public function changeToEng()
	{

		$this->session->set_userdata('mylang', 'english');
		$this->lang->load('home', $this->session->userdata('mylang'));
		$this->load->model('promotion');
		$prodata['promotion']=$this->promotion->findAll();
		$this->load->view('hometour',$prodata);
	}
  public function changeToBum()
  {

    $this->session->set_userdata('mylang', 'burma');
    $this->lang->load('home', $this->session->userdata('mylang'));
    $this->load->model('promotion');
    $prodata['promotion']=$this->promotion->findAll();
    $this->load->view('hometour',$prodata);
  }

	public function changeToTha()
	{

		$this->session->set_userdata('mylang', 'thai');
		$this->lang->load('home', $this->session->userdata('mylang'));
		$this->load->model('promotion');
		$prodata['promotion']=$this->promotion->findAll();
		$this->load->view('hometour',$prodata);
	}
 	function index()
 	{





                $this->load->view('langhome');


 	}
	function addcontent()
	 {
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email',
			array(
				'required' => 'กรุณากรอก{field}',
				'valid_email'=>'ช้อง{field}ไม่ถูกต้อง'
				)
			);
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->model('promotion');
				$prodata['promotion']=$this->promotion->findAll();
					$this->load->view('hometour',$prodata);

			}
			else
			{
        $this->load->library('email');

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.mandrillapp.com';
        $config['smtp_user'] = 'peeklom13@gmail.com';
        $config['smtp_pass'] = 'CZTj6K2NpOhL8V1a9zB0Mw';
        $config['smtp_port'] = '587';

        $this->email->initialize($config);

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to('peeoa.001@gmail.com');

        $this->email->subject($this->input->post('phone'));
        $this->email->message($this->input->post('message'));


        $this->email->send();
				$this->load->model('order');
				$this->order->setName($this->input->post('name'));
				$this->order->setEmail($this->input->post('email'));
				$this->order->setPhone($this->input->post('phone'));
				$this->order->setMessage($this->input->post('message'));
				$this->order->add();
				echo "<script language='javascript'>alert('  succses!');</script>";


			}


				$this->lang->load('home', $this->session->userdata('mylang'));
                $this->load->model('promotion');
                $prodata['promotion']=$this->promotion->findAll();
                $this->load->view('hometour',$prodata);
	 }

 }
?>
