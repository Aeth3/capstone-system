<?php 

class Admin_model extends CI_Model
{


        public function __construct(){

            $this->load->database();

            //$this->table = 'product'; 
            date_default_timezone_set('Asia/Manila');

        }


        //system name
        function system_title() {


            $this->db->select('*');
            $this->db->from('system_title');
            $this->db->where('id_title', 1);
            $query = $this->db->get();
            return $query->row_array();


        } 
        //system name



//end of modal pages model
}