<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Casecatemodel extends CI_Model{
    function __construct() {
    }
    

    public function fetch_details(){
      return $this->db->get('casecate')->result_array();
    }
    public function blog_detail($slug = '') {
      return $this->db->where('link',$slug)->get('casestudy')->row();
     
    }

    public function fetch_casedata(){
      return $this->db->get('casestudy')->result_array();
    }

    function create($data){
      $this->db->insert('casecate',$data);
      return true;
  }
    
  function creatcase($data){
    $this->db->insert('casestudy',$data);
    return true;
}

  public function delete_casecate($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('casecate');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }

    public function delete_casedata($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('casestudy');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }

}
