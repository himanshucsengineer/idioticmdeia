<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Careermodel extends CI_Model
{
    function create_post($data)
    {
      
        return  $this->db->insert('career_post', $data);
    }

    public function fetch_career() {
        return $this->db->get('career_post')->result_array();
     
    
        
      }
      
      
      
      
    
         public function delete_listed_job($data)
        {
            $explodData = explode(',',$data);
            $this->db->where_in('id',$explodData);
            $getDeleteStatus = $this->db->delete('career_post');
            if($getDeleteStatus == 1)
            {
                return array('message'=>'yes');
          }else{
            return array('message'=>'no');
          }
          }

}
