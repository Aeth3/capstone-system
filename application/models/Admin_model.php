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

            //login_admin
            function login_admin(){

                $this->db->where('admin_uname', $this->input->post('username_admin', true));
                $this->db->where('admin_pass', md5($this->input->post('password_admin', true)));
                $result = $this->db->get('admin_credentials');
            
            
                if($result->num_rows() == 1){
            
                    return $result->row_array();
            
                }else{
            
                    return false;
            
                }
            
            }
            //login_admin

        // -----------------------------------CRUD PUROK START----------------------------------
            //fetch purok start
            function fetch_purok() {

            
                $this->db->select('*');
                $this->db->from('tb_prk');
                $query = $this->db->get();
                return $query->result_array();

            }
            //fetch purok end

            //add purok start
            function add_purok($data) {

            
                $this->db->select('*');
                $this->db->from('tb_prk');
                $this->db->where('prk_name', $data['prk_name']);
                $query = $this->db->get();
                $query->num_rows();

                if ($query->num_rows() > 0) {

                    return false;

                }else{

                    $this->db->insert('tb_prk',$data);
                    return true;
        
                }


            } 
            //add purok end

            // delete_purok start
            function delete_purok($prk_id) {

            
                $this->db->where('prk_id', $prk_id);
                $this->db->delete('tb_prk');
                return true;

            } 
            // delete_purok end

            // get_purok start        
            function get_purok($prk_id) {

            
                $this->db->select('*');
                $this->db->from('tb_prk');
                $this->db->where('prk_id', $prk_id);
                $query = $this->db->get();
                return $query->row_array();

            }
            // get_purok end        

            // check_purokname_exist start
            function check_purokname_exist($purok_name){

                $this->db->select('*');
                $this->db->from('tb_prk');
                $this->db->where('prk_name',$purok_name);
                $result = $this->db->get();
                return $result->num_rows();


            }
            // check_purokname_exist end
            // update_purok
            function update_purok($set_data){

                    $this->db->where('prk_id', $set_data['prk_id']);
                    $this->db->update('tb_prk', $set_data);
                    return true;
            
            }
        // -----------------------------------CRUD PUROK END----------------------------------

        // -----------------------------------CRUD METER NUMBER START----------------------------------
            //fetch meter start
            function fetch_meter_num() {

            
                $this->db->select('*');
                $this->db->from('tb_meter_num');
                $query = $this->db->get();
                return $query->result_array();
                // $this->db->select('meter_id');
                // $this->db->from('tb_owner_meter');
                // $where_clause = $this->db->get_compiled_select();
                // #Create main query
                // $this->db->select('*');
                // $this->db->from('tb_meter_num');
                // $this->db->where("`meter_id` NOT IN ($where_clause)");
                // $query = $this->db->get();
                // return $query->result_array();

            }
            //fetch meter end
            function getMeterNum($searchTerm=""){

                // // Fetch meter num
                $this->db->select('meter_id');
                $this->db->from('tb_owner_meter');
                $where_clause = $this->db->get_compiled_select();
                
                $this->db->select('*');
                $this->db->where("`meter_id` NOT IN ($where_clause)");
                $this->db->where("meter_num like '%".$searchTerm."%' ");
                $fetched_records = $this->db->get('tb_meter_num');
                $meters = $fetched_records->result_array();
           
                // Initialize Array with fetched data
                $data = array();
                foreach($meters as $row){
                   $data[] = array("id"=>$row['meter_id'], "text"=>$row['meter_num']);
                }
                return $data;

             
             }
           
           
            //add meter number start
            function add_meter_number($data) {

         
                $this->db->select('*');
                $this->db->from('tb_meter_num');
                $this->db->where('meter_num', $data['meter_num']);
                $query = $this->db->get();
                $query->num_rows();
    
                if ($query->num_rows() > 0) {
    
                    return false;
    
                }else{
    
                    $this->db->insert('tb_meter_num',$data);
                    return true;
        
                }
    
    
            } 
            //add meter number end

            // get meter start
            function get_meter($meter_id){

                $this->db->select('*');
                $this->db->from('tb_meter_num');
                $this->db->where('meter_id', $meter_id);
                $query = $this->db->get();
                return $query->row_array();

            }
            // get meter end

            //update start
            function update_meter($set_data){


                $this->db->select('*');
                $this->db->from('tb_meter_num');
                $this->db->where('meter_num', $set_data['meter_num']);
                $query = $this->db->get();
                $query->num_rows();
    
                if ($query->num_rows() > 0) {
    
                    return false;
    
                }else{
    
                    $this->db->where('meter_id', $set_data['meter_id']);
                    $this->db->update('tb_meter_num', $set_data);
                    return true;
        
                }

            }
            //update end
            function delete_meter($meter_id){

                $this->db->where('meter_id', $meter_id);
                $this->db->delete('tb_meter_num');
                return true;

            }
            // -----------------------------------CRUD METER NUMBER END----------------------------------

            // -----------------------------------CRUD CONSUMER START----------------------------------
            //add now
            function add_Consumer($consumer_data)
            {


                $this->db->insert('tb_consumers',$consumer_data);
                return $this->db->insert_id();

                
            }

            function add_meter_owner($meter_owner_data)
            {


                $this->db->insert_batch('tb_owner_meter', $meter_owner_data); 
                return true;
                
            }

            function add_Credentials($credentials_data)
            {


                $this->db->insert('tb_credentials',$credentials_data);
                return true;
                
            }

            function check_username_exist($user_name){

                $this->db->select('*');
                $this->db->from('tb_credentials');
                $this->db->where('cre_username',$user_name);
                $result = $this->db->get();
                return $result->num_rows();


            }
            // add now end

            //view consumer individual
            function consumer_Individual($con_id,$account_id){


                $this->db->select('
                                table_a.*, 
                                table_b.*, 
                                table_c.*, GROUP_CONCAT(table_c.meter_id SEPARATOR "</br>") as meterid_owner,
                                table_d.*, GROUP_CONCAT(table_d.meter_num SEPARATOR "<hr>") as meternum_owner,
                                table_e.*
                                ');
                $this->db->from('tb_consumers as table_a');
                $this->db->join('tb_prk as table_b', 'table_a.prk_id = table_b.prk_id', 'inner');
                $this->db->join('tb_owner_meter as table_c', 'table_c.con_id = table_a.con_id', 'left');
                $this->db->join('tb_meter_num as table_d', 'table_d.meter_id = table_c.meter_id', 'left');
                $this->db->join('tb_credentials as table_e', 'table_a.con_id = table_e.con_id', 'inner');
                $this->db->where('table_a.con_id',$con_id);
                $this->db->where('table_a.account_id',$account_id);
                $this->db->group_by('table_a.con_id');
                $result = $this->db->get();
                return $result->result_array();


            }
            //view consumer individual

            
            // -----------------------------------CRUD CONSUMER END----------------------------------


} //end of modal pages model
