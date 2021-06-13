<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactmodel extends CI_Model
{
    function insert_data($data)
    {
      
        return  $this->db->insert('contact', $data);
    }

}
