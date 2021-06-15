<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Brandsmodel extends CI_Model{
    function __construct() {
    }
    
   
    public function fetch_details(){
      return $this->db->get('brand_pic')->result_array();
    }

    function add($data){
      $this->db->insert('brand_pic',$data);
      return true;
  }
    


  public function delete_brand($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('brand_pic');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }

}
