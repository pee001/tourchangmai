<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddProduct extends CI_Controller {

	public function show()
	{
		$this->load->model('Location');
		$data['error'] = array();
		$isError = false;
		if($this->input->post())
		{
			
			if($this->input->post('locationId') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">ไม่ได้เลือกชื่อบริษัท</font>';
			}
			if($this->input->post('locationTex') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">ไม่ได้ใส่จำนวนสินค้า</font>';
			}
			if($this->input->post('locationImg') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">ไม่ได้ใส่ราคาสินค้า</font>';
			}
		
			if(!$isError)
			{
				$this->Location->setProName($this->input->post('locationId'));
				$this->Location->setProOrder($this->input->post('locationTex'));
				$this->Location->setProNameOffice($this->input->post('locationImg'));
				
				
				$this->Location->add();
			}

			
		}

		$this->load->view('showpro',$data);
	}

	public function index()
	{
		$this->load->model('Location');
		
		$isError = false;
		
		$data['error'] = array();
		
	
		$data['findAll'] =$this->Location->findAll();
		
			$this->load->view('showpro2',$data);
	}
}


	

