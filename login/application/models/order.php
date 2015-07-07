<?php

class Order  extends CI_model
{

var $id;
var $name;
var $email;
var $phone;
var $message;
var $datamessage;

function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
		public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
##########################################
		public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
#########################################
		public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}
########################################
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}
########################################
	public function setMessage($message)
	{
		$this->message = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}
	########################################
	public function setDatamessage($datamessage)
	{
	$this->datamessage = $datamessage;
	}

	public function getDatamessage()
	{
	return $this->datamessage;
	}



###################################### add ######################################
	public function add()
	{
		$array = array
		(
			'id' => $this->getId(),
			'name'  => $this->getName(),
			'email' => $this->getEmail(),
			'phone' => $this->getPhone(),
			'message' => $this->getMessage(),
			'datamessage' =>date("d-m-Y")


		);

		$this->db->insert('conten', $array);
	}

	###################################### add ######################################
	function findAll()
    {
        $query=$this->db->query
            ('
                SELECT * FROM conten ORDER BY datamessage ASC
            ');

        return $query;
    }
	}
?>
