<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    function __construct() { 

        parent::__construct(); 
        $this->load->library('session');

    } 


	public function home_admin()
	{

      
           
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

    

	}

    // billing_admin
	public function billing_admin()
	{

      
           
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

    

	}
    // billing_admin end

}