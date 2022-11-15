<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_register extends CI_Controller {


    function __construct() { 

        parent::__construct(); 
        $this->load->library('session');

    } 


//login page
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
            'Page_name' => 'Login'


        );
        $this->load->view('pages/templates/for_login&register/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('pages/templates/for_login&register/footer', $data);



}
 
    
}

?>