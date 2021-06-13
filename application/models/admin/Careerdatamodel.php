<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Careerdatamodel extends CI_Model{
    function __construct() {
    }
        public function fetch_intern() {
    return $this->db->get('intern_career')->result_array();
 

    
  }
  
  
  public function fetch_job() {
    return $this->db->get('job_career')->result_array();
 

    
  }
  
  
  
  

     public function delete_intern($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('intern_career');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }

      public function delete_job($data)
      {
          $explodData = explode(',',$data);
          $this->db->where_in('id',$explodData);
          $getDeleteStatus = $this->db->delete('job_career');
          if($getDeleteStatus == 1)
          {
              return array('message'=>'yes');
        }else{
          return array('message'=>'no');
        }
        }
}
?>