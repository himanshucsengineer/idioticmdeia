<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Infulancerdatamodel extends CI_Model{
    function __construct() {
    }
        public function fetchinventory_api() {
    return $this->db->get('infulancer')->result_array();
 

    
  }
  
  

  
  
  
  

     public function delete_infu($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('infulancer');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>