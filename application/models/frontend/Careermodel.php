<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Careermodel extends CI_Model{
    function __construct() {
    }
        public function fetch_career() {
    return $this->db->get('career_post')->result_array();
 

    
  }
  
  function intern_req($datas){
    $this->db->insert('intern_career',$datas);
    return true;
}

function job_req($datas){
  $this->db->insert('job_career',$datas);
  return true;
}
  
  
  

   
      
}
?>