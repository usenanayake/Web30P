<?php


class contactController extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library("pagination");
        //$this->isLoggedIn();
    }

	public function index(){

		$this->load->model('adminModel');
		$contactDetail['contactRecord'] = $this->adminModel->getData($tablename='message');
        
		$this->load->view('Admin/contact',$contactDetail);
        
	}

    public function updatecontact(){

        $where_arr = array('id'=>$this->input->post('customerid'));

        $data = array(
            'id' => $this->input->post('customerid'),
            'name' => $this->input->post('cname'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
            'reply' => $this->input->post('reply')
            
        );
        $this->adminModel->updateData('message',$data, $where_arr);

        $data['contactRecord'] = $this->adminModel->getData($tablename='message');
        $this->load->view('Admin/contact',$data);
    }

    public function contactRecordUpdate(){
    	
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('id'=> $id);
            $this->adminModel->deleteData('message',$where_arr);
        }

    	$contactDetail['contactRecord'] = $this->adminModel->getData($tablename='message');
        $this->load->view('Admin/contact',$contactDetail);
    }


}