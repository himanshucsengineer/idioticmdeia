<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sociallinkmodel extends CI_Model{
    function __construct() {
    }



  
  
  function update_links($data){
        $this->db->set($data);
        $this->db->where('id',1);
        $this->db->update('social',$data);
    }
  
  
  
  
public function fetch_details(){
       
      return $this->db->get('social')->result_array();
        
    }
    
}
?>