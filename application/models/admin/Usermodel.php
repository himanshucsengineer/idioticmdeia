<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usermodel extends CI_Model{
    function __construct() {
    }



    public function fetchinventory_api() {
    return $this->db->get('referandearn')->result_array();
 

    
  }
  
  
  function update_login($bank_acc,$id){
                        
                  
     $data = array(
                        'account_status' =>$bank_acc,
                        
                    );
                    
        $this->db->set($data);
        $this->db->where('id',$id);
         $this->db->update('referandearn',$data);
    }
  
  
  public function delete_login($id)
    {
       
        $this->db->where_in('id',$id);
        $getDeleteStatus = $this->db->delete('referandearn');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
  
  
public function fetch_details(){
       
      return $this->db->get('referandearn')->result_array();
        
    }
     public function deletecardata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('email',$explodData);
        $getDeleteStatus = $this->db->delete('referandearn');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>