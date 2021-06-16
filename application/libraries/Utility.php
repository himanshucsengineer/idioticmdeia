<?php   defined('BASEPATH') OR exit('No direct script access allowed');

    class Utility{
        public static function getsocial(){
            $CI =& get_instance();

            $CI->db->select('*')->from('social');
            $getSearchsocial = $CI->db->get()->row();
            return $getSearchsocial;

        }
        public static function sitedata(){
            $CI =& get_instance();
            $CI->db->select('content')->where('id',2)->from('sitesetting');
            $getSite = $CI->db->get()->row();
            return $getSite;

        }

        public static function sitelogo(){
            $CI =& get_instance();
            $CI->db->select('logo')->where('id',1)->from('sitesetting');
            $getSite = $CI->db->get()->row();
            return $getSite;

        }
    }

?>