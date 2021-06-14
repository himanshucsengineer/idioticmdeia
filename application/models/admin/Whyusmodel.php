<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Whyusmodel extends CI_Model{
    function __construct() {
    }
    
    function first_update($data){
        $this->db->set($data);
        $this->db->where('sec',"first");
        $this->db->update('whyus',$data);
    }
    function sec_update($data){
      $this->db->set($data);
      $this->db->where('sec',"second");
      $this->db->update('whyus',$data);
    }
    public function fetch_details(){
      return $this->db->get('whyus')->result_array();
    }

    function services($data){
      $this->db->insert('whyus',$data);
      return true;
  }
    


  public function delete_service($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('whyus');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }

}
