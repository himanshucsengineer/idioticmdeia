<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Infumodel extends CI_Model{
    function __construct() {
    }
    
    function first_update($data){
        $this->db->set($data);
        $this->db->where('sec',"first");
        $this->db->update('infu_admin',$data);
    }

    

    function sec_update($data){
      $this->db->set($data);
      $this->db->where('sec',"second");
      $this->db->update('infu_admin',$data);
    }

    function third_update($data){
        $this->db->set($data);
        $this->db->where('sec',"third");
        $this->db->update('infu_admin',$data);
    }  

    public function fetch_details(){
      return $this->db->get('infu_admin')->result_array();
    }

    function services($data){
      $this->db->insert('infu_admin',$data);
      return true;
  }
  function faq($data){
    $this->db->insert('infu_admin',$data);
    return true;
}


  public function delete_service($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('infu_admin');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }


    

}
