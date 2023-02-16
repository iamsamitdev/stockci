<?php

class Backend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'frontend/login', 'refresh');
        }
    }

    public function dashboard() {
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'backend/pages/index';
        $this->load->view('backend/template/default_template', $data);
    }

    public function products() {

        // read data from db
        // select top 10
        $data['products'] = $this->db
                            ->order_by('CategoryID', 'DESC')
                            ->select('*')
                            ->from('products')
                            ->limit(10)
                            ->get()
                            ->result();
        $data['title'] = 'Products';
        $data['main_content'] = 'backend/pages/products';

        $this->load->view('backend/template/default_template', $data);
        
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url().'frontend/login', 'refresh');
    }

}