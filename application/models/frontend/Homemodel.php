<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homemodel extends CI_Model
{
    function insert_data($data)
    {

        return  $this->db->insert('brand', $data);
    }
    
    public function fetch_homedata(){
        return $this->db->get('home')->result_array();
      }
    function insert_infu($data)
    {

        return  $this->db->insert('infulancer', $data);
    }

    function fetch_casestudy()
    {
        return $this->db->limit(8)->order_by('id','DESC')->get('casestudy')->result_array();
       
        
        
    }
}
