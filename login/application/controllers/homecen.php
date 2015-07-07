<?php
/**
*
*/
class Homecen extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	function adddata()
	{
		$this->load->model('promotion');
		$prodata['promotion']=$this->promotion->findAll();
		$this->load->view('Homeaddtour',$prodata);
	}
	function receive()
	{
			$config['upload_path'] = './img/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->form_validation->set_rules('name', 'name', 'required',
			array(
					'required' => 'กรุณากรอก{field}'
		)
		);

		$this->load->library('upload',$config);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('show',$data);
		}
		else
		{


			if ( ! $this->upload->do_upload('picture'))
			{
				$data['error'] = $this->upload->display_errors();
			}
			else
			{
				$data['file'] = $this->upload->data();
				$this->load->model('Promotion');
				$this->Promotion->setProTex($this->input->post('name'));
				$this->Promotion->setDerection($this->input->post('derection'));
				$this->Promotion->setDuration($this->input->post('duration'));
				$this->Promotion->setStar($this->input->post('Start'));
				$this->Promotion->setProImg('img/'.$data['file']['file_name']);

				 $this->Promotion->add();


			}
			//$this->load->view('homeaddtour');
		}

		$this->load->model('promotion');
		$prodata['promotion']=$this->promotion->findAll();
		$this->load->view('Homeaddtour',$prodata);
	}
	function deletes()
	{
		$this->load->model('Promotion');
		$this->Promotion->setProId($this->input->post('name'));
		$this->Promotion->delete();
		$prodata['promotion']=$this->Promotion->findAll();
		$this->load->view('Homeaddtour',$prodata);
	}
}
?>
