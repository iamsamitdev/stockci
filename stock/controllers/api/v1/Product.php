<?php

require_once APPPATH . '/libraries/REST_Controller.php';
require_once APPPATH . '/libraries/Format.php';

class Product extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        // ปิดการแสดง error กรณี query db ไม่ได้
		$this->db->db_debug = false;

    }

    public function index_get(){
        $data_product = array();

        $products = $this->db
                    ->order_by('CategoryID', 'DESC')
                    ->select('*')
                    ->from('products')
                    ->limit(10)
                    ->get()
                    ->result();

        $data_product['status'] = http_response_code(200);
        $data_product['success'] = true;
        $data_product['message'] = 'Success';
        $data_product['data'] = $products;

        echo json_encode($data_product);
    }

    // SoapClient
    public function soapapi_get(){

        // $client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
        $client = new SoapClient("https://www.w3schools.com/xml/tempconvert.asmx?WSDL");
   
        $result = $client->__soapCall(
            "CelsiusToFahrenheit", array("Celsius" => "30")
        );

        $array = json_decode(json_encode($result), true);

        print_r($array);
    }

    public function restapi_get(){

        $headers = array
		(
		    'Content-Type: application/json'
		);

        $ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts');
        curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch );
		curl_close($ch);

        print_r($result);
    }

    // Read Product from server2
    public function product_server2_get(){

        $this->load->database('server2', TRUE);

        $data_product = array();

        $products = $this->db
                    ->order_by('CategoryID', 'DESC')
                    ->select('*')
                    ->from('products')
                    ->limit(10)
                    ->get()
                    ->result();

        $data_product['status'] = http_response_code(200);
        $data_product['success'] = true;
        $data_product['message'] = 'Success';
        $data_product['data'] = $products;

        echo json_encode($data_product);
    }

    // add product to server2
    public function add_product_server2_post(){

        $this->load->database('server2', TRUE);

        // Json input
        $input = file_get_contents('php://input');
        $inputJSON = json_decode($input, TRUE);

        $data = array(
            'CategoryID' => $inputJSON['CategoryID'],
            'ProductName' => $inputJSON['ProductName'],
            'UnitPrice' => $inputJSON['UnitPrice'],
            'ProductPicture' => $inputJSON['ProductPicture'],
            'UnitInStock' => $inputJSON['UnitInStock'],
            'CreatedDate' => $inputJSON['CreatedDate'],
            'ModifiedDate' => $inputJSON['ModifiedDate']
        );

        $this->db->insert('products', $data);

        if($this->db->affected_rows() > 0){
            $this->response([
                'status' => http_response_code(200),
                'success' => true,
                'message' => 'Success',
                'data' => $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => http_response_code(400),
                'success' => false,
                'message' => 'Failed',
                'data' => $data
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}