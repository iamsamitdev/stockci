<?php

class Frontend extends CI_Controller {

    public function __contruct() {
        parent::__construct();
        // db connection
        // $this->load->database();
    }

    public function index() {
        
        $data['title'] = 'Home';
        $data['main_content'] = 'frontend/pages/index';

        $this->load->view('frontend/templates/default_template', $data);
    }

    public function about() {
        $data['title'] = 'About';
        $data['main_content'] = 'frontend/pages/about';
        $this->load->view('frontend/templates/default_template', $data);
    }

    public function login() {
        $data['title'] = 'Login';
        $data['main_content'] = 'frontend/pages/login';
        $this->load->view('frontend/templates/default_template', $data);
    }

    public function login_process(){

        // การรับค่าจากฟอร์ม
		$email =  $this->input->post('email');
		$password = $this->input->post('password');

        // echo $email;
        // echo $password;
        // load model
        $this->load->model('UsersModel',"",TRUE);
        $result = $this->UsersModel->login($email, $password);

        // ตรวจสอบว่ามีข้อมูลในฐานข้อมูลหรือไม่
        if($result){
            // echo "Login Success";
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";

            // สร้าง session สำหรับเก็บข้อมูลของ user
            $sess_array = array(
                'id' => $result[0]->id,
                'username' => $result[0]->username,
                'email' => $result[0]->email,
                'fullname' => $result[0]->fullname,
                'mobile' => $result[0]->mobile,
                'status' => $result[0]->status
            );

            $this->session->set_userdata('logged_in', $sess_array);

            // สร้าง flashdata สำหรับเก็บข้อความแจ้งเตือน
            $this->session->set_flashdata('msg', '<div class="d-flex align-items-center">
            <strong>กำลังเข้าสู่ระบบ...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
          </div>');

            $data['title'] = 'Login';
            $data['main_content'] = 'frontend/pages/login';
            $this->load->view('frontend/templates/default_template', $data);

            // redirect with window.location delay 3 seconds
            echo '<meta http-equiv="refresh" content="3;url='.base_url().'backend/dashboard" />';

        }else{
            // สร้าง flashdata สำหรับเก็บข้อความแจ้งเตือน
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Invalid email or password</div>');

            // ถ้าไม่มีข้อมูลให้กลับไปหน้า login
            $data['title'] = 'Login';
            $data['main_content'] = 'frontend/pages/login';
            $this->load->view('frontend/templates/default_template', $data);
        }

    }

}