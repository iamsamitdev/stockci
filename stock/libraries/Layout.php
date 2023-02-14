<?php

class Layout 
{
    protected $_ci;
    
    function __construct()
    {        
        $this->_ci = &get_instance();
    }
    
    function display($template, $data = null)
    {            
        $data['_menu'] = $this->_ci->load->view("backend/template/menu", $data, true); 
        $data['_footer'] = $this->_ci->load->view("backend/template/footer", $data, true); 
        $this->_ci->load->view($template, $data);
    }
}
