<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contactdatamodel extends CI_Model{
    function __construct() {
    }
        public function fetchinventory_api() {
    return $this->db->get('contact')->result_array();
 

    
  }
  
  

  
  
  
  

     public function delete_contact($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('contact');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>