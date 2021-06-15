<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Aboutusmodel extends CI_Model{
    function __construct() {
    }
    public function fetch_details(){
        return $this->db->get('aboutus')->result_array();
      }


      function team($data){
        $this->db->insert('aboutus',$data);
        return true;
    }


    function update_about($data){
        $this->db->set($data);
        $this->db->where('sec',"about");
        $this->db->update('aboutus',$data);
    }


    function update_vision($data){
      $this->db->set($data);
      $this->db->where('sec',"vision");
      $this->db->update('aboutus',$data);
    }


     function update_core_team($data){
        $this->db->set($data);
        $this->db->where('sec',"core");
        $this->db->update('aboutus',$data);
    }


    function update_hq($data){
      $this->db->set($data);
      $this->db->where('sec',"hq");
      $this->db->update('aboutus',$data);
    }

   
    


  public function delete_team($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('aboutus');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }

}
