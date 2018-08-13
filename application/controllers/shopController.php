<?php


class shopController extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library("pagination");
        //$this->isLoggedIn();
    }

	public function index(){

		$this->load->model('adminModel');
		$cartDetail['cartRecord'] = $this->adminModel->getData($tablename='product1');
        
		$this->load->view('Admin/shop',$cartDetail);
        //$this->load->view('Admin/shop');
	}


	

    public function updateCart(){

        $where_arr = array('product_id'=>$this->input->post('ProductID'));

        $data = array(
            'product_id' => $this->input->post('ProductID'),
            'product_name' => $this->input->post('pname'),
            'product_price' => $this->input->post('price')
            
        );
        $this->adminModel->updateData('product1',$data, $where_arr);

        $data['cartRecord'] = $this->adminModel->getData($tablename='product1');
        $this->load->view('Admin/shop',$data);
    }

    public function cartRecordUpdate(){
    	
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('product_id'=> $id);
            $this->adminModel->deleteData('product1',$where_arr);
        }

    	$cartDetail['cartRecord'] = $this->adminModel->getData($tablename='product1');
        $this->load->view('Admin/shop',$cartDetail);
    }

    public function addItem(){

        $config['upload_path'] = "./template/img/";
        $config['allowed_type'] = '*';
        $this->load->library('upload',$config);
        $this->upload->do_upload('file_name');
        $file_name = $this->upload->data();
        $shop_array = array(

            'category_id' => $_POST['categoryID'],
            'product_name' => $_POST['pname'],
            'product_price' => $_POST['price'],
            'product_image' => $file_name['file_name']

        );

        $this->adminModel->insertData($tablename="product1",$shop_array);

        

        redirect('/shopController');
    }

}