<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Homemodel extends CI_Model{
    function __construct() {
    }
    
    function home_about($data){
        $this->db->set($data);
        $this->db->where('sec',"about");
        $this->db->update('home',$data);
    }
    function home_bg($data){
      $this->db->set($data);
      $this->db->where('sec',"bg");
      $this->db->update('home',$data);
  }


  function home_main_head($data){
    $this->db->set($data);
    $this->db->where('sec',"main");
    $this->db->update('home',$data);
}

    public function fetch_details(){
      return $this->db->get('home')->result_array();
    }

    function why_us($data){
      $this->db->insert('home',$data);
      return true;
  }
  function services($data){
    $this->db->insert('home',$data);
    return true;
}


  public function delete_service($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('home');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }
    public function delete_why($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('home');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
