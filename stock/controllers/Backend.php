<?php

class Backend extends CI_Controller {

    public function __contruct() {
        parent::__construct();
    }

    // public function dashboard() {

    //     // read data from db
    //     // select top 10
    //     $data['products'] = $this->db
    //                         ->order_by('CategoryID', 'DESC')
    //                         ->select('*')
    //                         ->from('products')
    //                         ->limit(10)
    //                         ->get()
    //                         ->result();

    //     $this->load->view('backend/pages/dashboard', $data);
        
    // }

    public function dashboard() {
        $this->layout->display('backend/pages/index');
    }

    public function error403() {
        $this->layout->display('backend/pages/403');
    }
    
    public function error404() {
        $this->layout->display('backend/pages/404');
    }
    
    public function error500() {
        $this->layout->display('backend/pages/500');
    }
    
    public function accordion() {
        $this->layout->display('backend/pages/accordion');
    }
    
    public function alert() {
        $this->layout->display('backend/pages/alert');
    }
    
    public function badge() {
        $this->layout->display('backend/pages/badge');
    }
    
    public function barchart() {
        $this->layout->display('backend/pages/barchart');
    }
    
    public function button() {
        $this->layout->display('backend/pages/button');
    }
    
    public function button_group() {
        $this->layout->display('backend/pages/button_group');
    }
    
    public function cards() {
        $this->layout->display('backend/pages/cards');
    }
    
    public function datatable() {
        $this->layout->display('backend/pages/datatable');
    }
    
    public function dropdown() {
        $this->layout->display('backend/pages/dropdown');
    }
    
    public function fontawesome() {
        $this->layout->display('backend/pages/fontawesome');
    }
    
    public function forgot_password() {
        $this->layout->display('backend/pages/forgot_password');
    }
    
    public function form() {
        $this->layout->display('backend/pages/form');
    }
    
    public function grid() {
        $this->layout->display('backend/pages/grid');
    }
    
    public function dashboard2() {
        $this->layout->display('backend/pages/index2');
    }
    
    public function dashboard3() {
        $this->layout->display('backend/pages/index3');
    }
    
    public function dashboard3_horizontalmenu() {
        $this->layout->display('backend/pages/index3_horizontalmenu');
    }
    
    public function invoice() {
        $this->layout->display('backend/pages/invoice');
    }
    
    public function linechart() {
        $this->layout->display('backend/pages/linechart');
    }
    
    public function list_group() {
        $this->layout->display('backend/pages/list_group');
    }
    
    public function login() {
        $this->layout->display('backend/pages/login');
    }
    
    public function login2() {
        $this->layout->display('backend/pages/login2');
    }
    
    public function login3() {
        $this->layout->display('backend/pages/login3');
    }
    
    public function maps() {
        $this->layout->display('backend/pages/maps');
    }
    
    public function media_object() {
        $this->layout->display('backend/pages/media_object');
    }
    
    public function modal() {
        $this->layout->display('backend/pages/modal');
    }
    
    public function pagination() {
        $this->layout->display('backend/pages/pagination');
    }
    
    public function piechart() {
        $this->layout->display('backend/pages/piechart');
    }
    
    public function popovers() {
        $this->layout->display('backend/pages/popovers');
    }
    
    public function pricing() {
        $this->layout->display('backend/pages/pricing');
    }
    
    public function progressbar() {
        $this->layout->display('backend/pages/progressbar');
    }
    
    public function register() {
        $this->layout->display('backend/pages/register');
    }
    
    public function register2() {
        $this->layout->display('backend/pages/register2');
    }
    
    public function register3() {
        $this->layout->display('backend/pages/register3');
    }
    
    public function register4() {
        $this->layout->display('backend/pages/register4');
    }
    
    public function reset_pass() {
        $this->layout->display('backend/pages/reset_pass');
    }
    
    public function screenlock() {
        $this->layout->display('backend/pages/screenlock');
    }
    
    public function screenlock2() {
        $this->layout->display('backend/pages/screenlock2');
    }
    
    public function starter() {
        $this->layout->display('backend/pages/starter');
    }
    
    public function tab() {
        $this->layout->display('backend/pages/starter');
    }
    
    public function table_basic() {
        $this->layout->display('backend/pages/table_basic');
    }
    
    public function table_layout() {
        $this->layout->display('backend/pages/table_layout');
    }
    
    public function themify() {
        $this->layout->display('backend/pages/themify');
    }
    
    public function typography() {
        $this->layout->display('backend/pages/typography');
    }

}