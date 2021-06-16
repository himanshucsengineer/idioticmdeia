<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sitesettingmodel extends CI_Model{
    function __construct() {
    }
    
    function logo_update($data){
        $this->db->set($data);
        $this->db->where('id',1);
        $this->db->update('sitesetting',$data);
    }
    function about_update($data){
      $this->db->set($data);
      $this->db->where('id',2);
      $this->db->update('sitesetting',$data);
    }
    public function fetch_details(){
      return $this->db->get('sitesetting')->result_array();
    }

  

}
