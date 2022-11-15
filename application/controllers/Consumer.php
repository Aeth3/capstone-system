<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumer extends CI_Controller {


    function __construct() { 

        parent::__construct(); 
        $this->load->library('session');
        //$this->load->model('Admin_model');
        

    } 

 
//Dashboard page
	public function home()
	{

      
           
            $page = "home";


            if (!file_exists(APPPATH.'views/pages/consumer/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'Dashboard'


            );
            $this->load->view('pages/templates/for_consumer/header', $data);
            $this->load->view('pages/templates/for_consumer/sidebar', $data);
            $this->load->view('pages/templates/for_consumer/topbar', $data);
            $this->load->view('pages/consumer/'.$page, $data);
            $this->load->view('pages/templates/for_consumer/footer', $data);

    

	}

//Dues page
	public function dues()
	{

     
           
            $page = "dues";


            if (!file_exists(APPPATH.'views/pages/consumer/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'Dues'


            );
            $this->load->view('pages/templates/for_consumer/header', $data);
            $this->load->view('pages/templates/for_consumer/sidebar', $data);
            $this->load->view('pages/templates/for_consumer/topbar', $data);
            $this->load->view('pages/consumer/'.$page, $data);
            $this->load->view('pages/templates/for_consumer/footer', $data);



    }

//Transaction page
	public function transaction()
	{

     
           
            $page = "transaction";


            if (!file_exists(APPPATH.'views/pages/consumer/'.$page.'.php')) {
          

                show_404();

             }
    
             $data = array(
                
                'System' => $this->Admin_model->system_title(),
                'Page_name' => 'Dues'


            );
            $this->load->view('pages/templates/for_consumer/header', $data);
            $this->load->view('pages/templates/for_consumer/sidebar', $data);
            $this->load->view('pages/templates/for_consumer/topbar', $data);
            $this->load->view('pages/consumer/'.$page, $data);
            $this->load->view('pages/templates/for_consumer/footer', $data);



    }










//error 404
	public function error_404()
	{
        $this->load->view('errors/error_404');

    }
    
    //ends of pages class
}
