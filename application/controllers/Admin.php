<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    function __construct() { 

        parent::__construct(); 
        $this->load->library('session');

    } 

//pages 1 sidebar start ----------------------------------------------------------------------->

    //dashboard start 
	public function home_admin()
	{

      
        if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

            $page = "home";


            if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'Dashboard',
                'Admin_name' => 'Administrator'



            );
            $this->load->view('pages/templates/for_admin/header', $data);
            $this->load->view('pages/templates/for_admin/sidebar', $data);
            $this->load->view('pages/templates/for_admin/topbar', $data);
            $this->load->view('pages/admin/static_content/content_card', $data);
            $this->load->view('pages/admin/'.$page, $data);
            $this->load->view('pages/templates/for_admin/footer', $data);

        }else{

            show_404();

        }

	}
    //dashboard end

    // billing_admin
	public function billing_admin()
	{

        if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

           
            $page = "billing";


            if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'Billing',
                'Admin_name' => 'Administrator'

            );
            $this->load->view('pages/templates/for_admin/header', $data);
            $this->load->view('pages/templates/for_admin/sidebar', $data);
            $this->load->view('pages/templates/for_admin/topbar', $data);
            $this->load->view('pages/admin/static_content/content_card', $data);
            $this->load->view('pages/admin/'.$page, $data);
            $this->load->view('pages/templates/for_admin/footer', $data);

        }else{

            show_404();
            
        }

	}
    // billing_admin end

//pages 1 sidebar end ----------------------------------------------------------------------->


//pages 2 sidebar start ----------------------------------------------------------------------->

    // all_purok start
	public function all_purok()
	{

        if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

           
            $page = "all_purok";


            if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'All Purok',
                'Admin_name' => 'Administrator'

            );
            $this->load->view('pages/templates/for_admin/header', $data);
            $this->load->view('pages/templates/for_admin/sidebar', $data);
            $this->load->view('pages/templates/for_admin/topbar', $data);
            $this->load->view('pages/admin/static_content/content_card', $data);
            $this->load->view('pages/admin/'.$page, $data);
            $this->load->view('pages/templates/for_admin/footer', $data);

        }else{

            show_404();
            
        }

	}
    // all_purok end

    // all_meter_number start
    public function all_meter_number()
	{
        if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

           
            $page = "all_meter_num";


            if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'All Meter Number',
                'Admin_name' => 'Administrator'

            );
            $this->load->view('pages/templates/for_admin/header', $data);
            $this->load->view('pages/templates/for_admin/sidebar', $data);
            $this->load->view('pages/templates/for_admin/topbar', $data);
            $this->load->view('pages/admin/static_content/content_card', $data);
            $this->load->view('pages/admin/'.$page, $data);
            $this->load->view('pages/templates/for_admin/footer', $data);

        }else{

            show_404();
            
        }
    }
    // all_meter_number end

    // all_consumer start
    public function all_consumer()
	{
        if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

           
            $page = "all_consumer";


            if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'All Consumer',
                'Admin_name' => 'Administrator',
                'All_purok'  => $this->Admin_model->fetch_purok(),
                'All_meter_num'  => $this->Admin_model->fetch_meter_num()


            );
            $this->load->view('pages/templates/for_admin/header', $data);
            $this->load->view('pages/templates/for_admin/sidebar', $data);
            $this->load->view('pages/templates/for_admin/topbar', $data);
            $this->load->view('pages/admin/static_content/content_card', $data);
            $this->load->view('pages/admin/'.$page, $data);
            $this->load->view('pages/templates/for_admin/footer', $data);

        }else{

            show_404();
            
        }
    }
    // all_consumer end
    // view_consumer start
    public function view_consumer($param=null)
	{
        if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

           
            $page = "view_consumer";


            if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
          

                show_404();

             }
    

            if ($param != null) {


                $con_id = $param;
                $account_id = '#'.$this->uri->segment(2);

                $data = array(
                
                    'System' => $this->Admin_model->system_title(),
                    'Page_name' => 'Consumer',
                    'Admin_name' => 'Administrator',
                    'All_purok'  => $this->Admin_model->fetch_purok(),
                    'All_meter_num'  => $this->Admin_model->fetch_meter_num(),
                    'Consumer_Info'  => $this->Admin_model->consumer_Individual($con_id,$account_id)
                   
                );

                $this->load->view('pages/templates/for_admin/header', $data);
                $this->load->view('pages/templates/for_admin/sidebar', $data);
                $this->load->view('pages/templates/for_admin/topbar', $data);
                $this->load->view('pages/admin/static_content/content_card', $data);
                $this->load->view('pages/admin/'.$page, $data);
                $this->load->view('pages/templates/for_admin/footer', $data);

            }else{

                show_404();

            }


        }else{

            show_404();
            
        }
    }
    // view consumer end
    public function getMeterNum(){  //get meter number

        // Search term
        $searchTerm = $this->input->post('searchTerm');
        $response = $this->Admin_model->getMeterNum($searchTerm);
  
        echo json_encode($response);
     } //get meter number


//pages 2 sidebar end ----------------------------------------------------------------------->


//Form start ----------------------------------------------------------------------->

    //For purok start
	public function for_purok()
	{

    if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

      if (isset($_POST['ADD_PUROK'])) { //add purok start
        # code...
      
        $Purok_Name = $this->input->post('Purok_Name', true);
        $Purok_Sort = $this->input->post('Purok_Sort', true);
        
        $data = array(

                    'prk_name' => ucfirst($Purok_Name),
                    'prk_sort' => $Purok_Sort

                    );

         $response = $this->Admin_model->add_purok($data);

        if ($response) {
            $result = 303;
        }else{
            $result = 404;
        }



    
      
         $output = array(
             'msg'		=>	$result
         );
 
        
         echo json_encode($output);
          

    } //add purok end


    if (isset($_POST['all_prk'])) {  //fetch prk start
      


        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
  
        $this->db->order_by("prk_sort", "asc");
        $query = $this->db->get("tb_prk");
                
        $data = [];
  
        $x = 1;
        foreach($query->result() as $r) {
             $data[] = array(
                        "Select"     => "",
                        "#"          => $x++,
                        "Purok_Name" => $r->prk_name,
                        "Purok_Sort" => $r->prk_sort,
                        "Action"     => ' <div class="btn-group dropleft">

                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-eye"></i>
                        </button>

                        <div class="dropdown-menu text-left pl-2 pr-2 bg-gray-200">
                            
                        <div class = "bg-gray-100">
                        <a href="'.$r->prk_name.'" id = "'.$r->prk_id.'" class="dropdown-item btn-hover-edit btn btn-lg p-1 editPrkBtn">
                            <span class="icon">
                                <i class="fas fa-edit text-left"></i>
                            </span>
                            <span class="text">Edit Purok</span>
                        </a>
                        <a href="'.$r->prk_name.'" id = "'.$r->prk_id.'" class="dropdown-item btn-hover-delete btn  btn-lg p-1 deletePrkBtn">
                            <span class="icon">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Delete Purok</span>
                        </a>
                        </div> 

                        </div>

                      </div>'
             );
        }
  
  
        $result = array(
                 "draw" => $draw,
                   "recordsTotal" => $query->num_rows(),
                   "recordsFiltered" => $query->num_rows(),
                   "data" => $data
              );
  
  
        echo json_encode($result);
        exit();
  

    }  //fetch prk end
 
    if (isset($_POST['deletePrk'])) {  // deletePrk
      

        $prk_id = $this->input->post('prk_id',true);
    

         $response = $this->Admin_model->delete_purok($prk_id);

        if ($response) {
            $result = 303;
        }else{
            $result = 404;
        }


         $output = array(
             'msg'		=>	$result
         );
 
        
         echo json_encode($output);


    }// deletePrk end

    if (isset($_POST['getPrk'])) {  // getPrk
      

        $prk_id = $this->input->post('prk_id',true);
    

         $response = $this->Admin_model->get_purok($prk_id);

        if ($response) {
            $result = 303;
        }else{
            $result = 404;
        }

      
         $output = array(
             'msg'		=>	$result,
             'Prk_ID'		=>	$response['prk_id'],
             'prk_name'		=>	$response['prk_name'],
             'prk_sort'		=>	$response['prk_sort']

         );
 
        
         echo json_encode($output);


    }// getPrk end

    if (isset($_POST['check_Purokname'])) {  // check_Purokname
      

        $purok_name = $this->input->post('purok_name', true);
        $response = $this->Admin_model->check_purokname_exist($purok_name);

         print($response);


    }// check_Purokname end

    
    if (isset($_POST['UPDATE_PUROK'])) { //UPDATE_PUROK start
        # code...
        $prk_id = $this->input->post('Prk_ID', true);
        $Purok_Name = $this->input->post('Purok_Name', true);
        $Purok_Sort = $this->input->post('Purok_Sort', true);
        
        $set_data = array(
                    'prk_id' => $prk_id,
                    'prk_name' => ucfirst($Purok_Name),
                    'prk_sort' => $Purok_Sort
                    );

         $response = $this->Admin_model->update_purok($set_data);

        if ($response) {
            $result = 303;
        }else{
            $result = 404;
        }

      
         $output = array(
             'msg'		=>	$result
         );
 
        
         echo json_encode($output);
          

    } //UPDATE_PUROK end

    }else{

            show_404();
            
        }
	}//For purok end 

    public function for_meter_number(){ //For meter number Start

    if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

        if (isset($_POST['all_meter_num'])) {  //fetch meter number start
      


            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
      
            // $this->db->order_by("meter_id", "asc"); //orginal
            // $query = $this->db->get("tb_meter_num");


            $this->db->select('table_a.*, table_b.meter_id as meterb_id,table_b.con_id as conb_id');
            $this->db->from('tb_meter_num as table_a');
            $this->db->join('tb_owner_meter as table_b', 'table_a.meter_id = table_b.meter_id', 'left');
            $this->db->order_by("table_a.meter_id", "asc");
            $query = $this->db->get();
            
              
                    
            $data = [];
            $hello ='';
            $x = 1;
            foreach($query->result() as $key_1 => $r) {

                if ($r->meter_id == $r->meterb_id) {
                    $delete_button ='';
                }else{
                    $delete_button ='<a href="'.$r->meter_num.'" id = "'.$r->meter_id.'" class="dropdown-item btn-hover-delete btn  btn-lg p-1 deleteMeterBtn">
                    <span class="icon">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Delete Meter</span>
                </a>';
                }

                 $data[] = array(
                            "Select"       => "",
                            "#"            => $x++,
                            "Meter_Number" => $r->meter_num,
                            "Action"       => ' <div class="btn-group dropleft">
    
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-eye"></i>
                            </button>
    
                            <div class="dropdown-menu text-left pl-2 pr-2 bg-gray-200">
                                
                            <div class = "bg-gray-100">
                            <a href="'.$r->meter_num.'" id = "'.$r->meter_id.'" class="dropdown-item btn-hover-edit btn  btn-lg p-1 editMeterBtn">
                                <span class="icon">
                                    <i class="fas fa-edit text-left"></i>
                                </span>
                                <span class="text">Edit Meter</span>
                             
                            </a>
                            '.$delete_button.'
                            </div> 
    
                            </div>
    
                          </div>'
                 );
            }
      
      
            $result = array(
                     "draw" => $draw,
                       "recordsTotal" => $query->num_rows(),
                       "recordsFiltered" => $query->num_rows(),
                       "data" => $data
                  );
      
      
            echo json_encode($result);
            exit();
      
    
        }  //fetch meter number end
       

        if (isset($_POST['ADD_METER'])) { //add meter start
            # code...
          
            $Meter_Number = $this->input->post('Meter_Number', true);
            
            $data = array(
    
                        'meter_num' => $Meter_Number
    
                        );
    
             $response = $this->Admin_model->add_meter_number($data);
    
            if ($response) {
                $result = 303;
            }else{
                $result = 404;
            }
    
    
    
        
          
             $output = array(
                 'msg'		=>	$result
             );
     
            
             echo json_encode($output);
              
    
        } //add meter end

        if (isset($_POST['getMeter'])) {  // getMeter single start
      

            $meter_id = $this->input->post('meter_id',true);
        
    
             $response = $this->Admin_model->get_meter($meter_id);
    
            if ($response) {
                $result = 303;
            }else{
                $result = 404;
            }
    
          
             $output = array(
                 'msg'		        =>	$result,
                 'Meter_ID'		    =>	$response['meter_id'],
                 'Meter_Number'		=>	$response['meter_num']    
             );
     
            
             echo json_encode($output);
    
    
        }// getMeter single end

        if (isset($_POST['meter_number'])) {  // getMeter multiple start
      

            $meter_id = $this->input->post('meter_id',true);
            $meter_number = '';    
            $query ="SELECT * FROM tb_meter_num WHERE meter_id IN ($meter_id)";
            $data = $this->db->query($query);

        
            foreach ($data->result_array() as $key => $value) {

                $meter_number .= '<p class="text-muted mb-0">'.$value['meter_num'].'</p>';

                }
         

             $output = array(
                 'Meter_Number'		=>	$meter_number   
             );

            
             echo json_encode($output);
    
    
        }// getMeter multiple end

        if (isset($_POST['UPDATE_METER'])) { //UPDATE_METER start
            # code...
            $Meter_ID = $this->input->post('Meter_ID', true);
            $Meter_Number = $this->input->post('Meter_Number', true);
            
            $set_data = array(
                        'meter_id' => $Meter_ID,
                        'meter_num' => $Meter_Number
                        );
    
             $response = $this->Admin_model->update_meter($set_data);
    
            if ($response) {
                $result = 303;
            }else{
                $result = 404;
            }
    
          
             $output = array(
                 'msg'		=>	$result
             );
     
            
             echo json_encode($output);
              
    
        } //UPDATE_METER end

        if (isset($_POST['deleteMeter'])) {  // deleteMeter
      

            $meter_id = $this->input->post('meter_id',true);
        
    
             $response = $this->Admin_model->delete_meter($meter_id);
    
            if ($response) {
                $result = 303;
            }else{
                $result = 404;
            }
    
    
             $output = array(
                 'msg'		=>	$result
             );
     
            
             echo json_encode($output);
    
    
        }// deleteMeter end


            }else{

            show_404();
            
        }

    } //For meter number End

    public function for_consumer(){ //For consumer Start



    if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {

        if (isset($_POST['all_consumer'])) {  //fetch consumer start
      


            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
      
            //query
            // $this->db->order_by("prk_sort", "asc");
            // $query = $this->db->get("tb_prk");
            $this->db->select('table_a.*,table_b.*');
            $this->db->from('tb_consumers as table_a');
            $this->db->join('tb_prk as table_b', 'table_a.prk_id = table_b.prk_id', 'inner');
            $this->db->order_by("table_a.con_id", "asc");
            $query = $this->db->get();
            //query
      
            $data = [];

            $x = 1;
            foreach($query->result() as $r) {
                 $data[] = array(
                            "Select"     => "",
                            "#"          => $x++,
                            "Account_ID" => $r->account_id,
                            "Full_Name"  => $r->con_fname.' '.$r->con_lname,
                            "Purok_Name" => $r->prk_name,
                            "Action"     => '<div class="btn-group dropleft">
    
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-eye"></i>
                            </button>
    
                            <div class="dropdown-menu text-left pl-2 pr-2 bg-gray-200">
                                
                            <div class = "bg-gray-100">
                            <a href="'.base_url().'Consumer-'.$r->con_id.'/'.trim($r->account_id, "#").'" id = "'.$r->con_id.'" class="dropdown-item btn-hover-details btn btn-outline-capstone btn-lg p-1 editConsumerBtn">
                                <span class="icon">
                                    <i class="fas fa-info-circle text-left"></i>
                                </span>
                                <span class="text">View Details</span>
                            </a>
                            <a href="#NoFunctionForNow" id = "'.$r->con_id.'" class="dropdown-item btn-hover-edit btn btn-outline-capstone btn-lg p-1 editConsumerBtn">
                                <span class="icon">
                                    <i class="fas fa-edit text-left"></i>
                                </span>
                                <span class="text">Edit Consumer</span>
                            </a>
                            <a href="#NoFunctionForNow" id = "'.$r->con_id.'" class="dropdown-item btn-hover-delete btn btn-outline-capstone btn-lg p-1 deleteConsumerBtn">
                                <span class="icon">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete Consumer</span>
                            </a>
                            </div> 
    
                            </div>
    
                          </div>'
                 );
            }
      
      
            $result = array(
                     "draw" => $draw,
                       "recordsTotal" => $query->num_rows(),
                       "recordsFiltered" => $query->num_rows(),
                       "data" => $data
                  );
      
      
            echo json_encode($result);
            exit();
      
    
        }  //fetch consumer end
        
        if(isset($_POST['check_Username'])){ //check username
            $user_name = $this->input->post('user_name', true);
            $response = $this->Admin_model->check_username_exist($user_name);
    
             print($response);
        }//check username

        if (isset($_POST['add_Consumer'])) { //add consumer start 


                //for consumer details 
                $Account_Number = $this->input->post('Account_Number',true);
                $First_name = $this->input->post('First_name',true);
                $Last_name = $this->input->post('Last_name',true);
                $purok_consumer = $this->input->post('purok_consumer',true);
                $avatar_consumer = $this->input->post('avatar_consumer',true);
                $Email = $this->input->post('Email',true);
                $Contact_Number = $this->input->post('Contact_Number',true);
                $consumer_data = array(
                                    'account_id'   => $Account_Number, 
                                    'prk_id'       => $purok_consumer, 
                                    'con_fname'    => ucfirst($First_name), 
                                    'con_lname'    => ucfirst($Last_name), 
                                    'con_email'    => $Email, 
                                    'con_cpnumber' => $Contact_Number, 
                                    'con_avatar'   => $avatar_consumer, 
                                );

                $response_1 = $this->Admin_model->add_Consumer($consumer_data);
                
                // for consumer meter_number owner
                $meter_number = $this->input->post('meter_number',true);
                $meter_owner_data = array();
                foreach($meter_number as $key => $value){
                  $meter_owner_data[$key]['con_id'] = $response_1;
                  $meter_owner_data[$key]['meter_id'] = $value;
                }
                
                $response_2 = $this->Admin_model->add_meter_owner($meter_owner_data);

                //for consumer credentials
                $User_name = $this->input->post('User_name',true);
                $Password = $this->input->post('Password',true);
                $credentials_data = array(
                    'con_id'        => $response_1, 
                    'cre_username'  => $User_name, 
                    'cre_password'  => md5($Password), 
                    'cre_status'    => 1, 
                );

                $response_3 = $this->Admin_model->add_Credentials($credentials_data);

                if ($response_1 || $response_2 || $response_3) {
                    $result = 303;
                } else {
                    $result = 404;
                }
                
            
                $output = array(
                    'msg'		=>	$result
                );

            
                echo json_encode($output);
            } //add consumer end  

        }else{
            show_404();
        }

    }//For consumer End
//Form end ----------------------------------------------------------------------->

} //class end ----------------------------------------------------------------------->




