<?php
class Promotion extends CI_Model
{

    function __construct()
	{
	   parent::__construct();
    }

    var $proId;
    var $proTex;
    var $proImg;
    var $derection;
    var $duration;
    var $star;
    var $img2;
     function setProId($proId){
        $this->proId = $proId;
     }
     ################################
      function getProId(){
        return $this->proId;
     }
     ################################
      function setProTex($proTex){
        $this->proTex = $proTex;
     }
     ################################
      function getProTex(){
        return $this->proTex;
     }
     ################################
      function setProImg($proImg){
        $this->proImg = $proImg;
     }
     ################################
      function getProImg(){
        return $this->proImg;
     }
     ################################
    public function setDerection($derection)
    {
      $this->derection = $derection;
    }

    public function getDerection()
    {
      return $this->derection;
    }
###############################################
public function setDuration($duration)
{
  $this->duration = $duration;
}

public function getDuration()
{
  return $this->duration;
}
#######################################
public function setStar($star)
{
  $this->star = $star;
}

public function getStar()
{
  return $this->star;
}

########################################
public function setImg2($img2)
{
  $this->img2 = $img2;
}

public function getImg2()
{
  return $this->img2;
}
#######################################

    function delete()
    {
            $array=array(
                'proId'=>$this->getProId()



                       );
        $this->db->delete('promotion',$array);
    }
     function add()
    {
        $data=array(
            'proId'=>$this->getProId(),
            'proTex'=>$this->getProTex(),
            'proImg'=>$this->getProImg(),
            'derection'=>$this->getDerection(),
            'duration'=>$this->getDuration(),
            'star'=>$this->getStar()



        );

        $this->db->insert('promotion',$data);
    }
	function findAll()
    {
        $query=$this->db->query
            ('
                SELECT * FROM promotion
            ');

        return $query;
    }
}
