<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_register extends CI_Controller {


    function __construct() { 

        parent::__construct(); 
        $this->load->library('session');

    } 
//login page for Administrator
    public function login_form_admin()
    {
    
            $page = "admin_login";
    
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
          
    
                show_404();
    
             }
    
             $data = array(
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'Admin Login'
            );

            if (isset($_POST['login_admin'])) {

                $response = $this->Admin_model->login_admin();


                if ($response) {

                    $admin_data = array(

                        'admin_id' => $response['admin_id'],
                        'admin_name' => $response['admin_name'],
                        'admin_profile' => $response['admin_profile'],
                        'ad_access' => 'Administrator',
                        'logged_admin' => true
    
                    );

                    $this->session->set_userdata($admin_data);
                    $this->session->set_flashdata('message_adminlogin_success',$admin_data['ad_access']);
                    redirect(base_url().'Admin-Home');

                } else {

                    $this->session->set_flashdata('message_admin','<div style = "border-radius:30px;" class="alert alert-danger alert-dismissible fade show" role="alert">
                    Invalid login,  <strong>please try again!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');

                    redirect(base_url().'Admin-Login');

                }
                

            }else{

                if ($this->session->admin_id || $this->session->admin_name || $this->session->admin_profile || $this->session->ad_access || $this->session->logged_admin) {
                
                    redirect(base_url().'Admin-Home');
    
    
                }else{


                    $this->load->view('pages/templates/for_admin_login/header', $data);
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('pages/templates/for_admin_login/footer', $data);

                }
              

            }
           
    
    
    
    }
    //logout for admin
    public function logout_admin(){

        $this->session->sess_destroy();        
        redirect(base_url().'Admin-Login');
        
    }
    //logout for admin

//login page for consumer
public function login_form()
{

  
       
        $page = "login";


        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      

            show_404();

         }

         $data = array(
            
            'System' => $this->Admin_model->system_title(),
            'Page_name' => 'Login'


        );
        $this->load->view('pages/templates/for_login&register/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('pages/templates/for_login&register/footer', $data);



}
//Register page
public function register_form()
{

  
       
        $page = "register";


        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      

            show_404();

         }

         $data = array(
            
            'System' => $this->Admin_model->system_title(),
            'Page_name' => 'Register'


        );
        $this->load->view('pages/templates/for_login&register/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('pages/templates/for_login&register/footer', $data);



}
 
    
}

?>