<?php

require_once APPPATH . '/libraries/REST_Controller.php';
require_once APPPATH . '/libraries/Format.php';

class Province extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        // ปิดการแสดง error กรณี query db ไม่ได้
		$this->db->db_debug = false;
    }

    public function index_get(){
        echo '{"msg":"Success"}';
    }
}