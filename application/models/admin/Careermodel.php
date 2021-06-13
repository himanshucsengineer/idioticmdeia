<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Careermodel extends CI_Model
{
    function create_post($data)
    {
      
        return  $this->db->insert('career_post', $data);
    }

}
