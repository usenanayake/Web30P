<?php


class aboutController extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library("pagination");
        //$this->isLoggedIn();
    }

	public function index(){

		$this->load->model('adminModel');
		$aboutDetail['aboutRecord'] = $this->adminModel->getData($tablename='about');
        
		$this->load->view('Admin/about',$aboutDetail);
		}


	public function achivements(){
		$achivementDetail['achivementRecord'] = $this->adminModel->getData($tablename='achivements');
		$this->load->view('Admin/achivements',$achivementDetail);
	}

	public function updateAbout(){

        $where_arr = array('about_ID'=>$this->input->post('aboutID'));

        $data = array(
            'about_ID' => $this->input->post('aboutID'),
            'about_description' => $this->input->post('aboutDescription')
            
        );
        $this->adminModel->updateData('about',$data, $where_arr);

        $data['aboutRecord'] = $this->adminModel->getData($tablename='about');
        $this->load->view('Admin/about',$data);
    }

    public function aboutRecordUpdate(){
    	//$this->load->model('adminModel');
    	$aboutDetail['aboutRecord'] = $this->adminModel->getData($tablename='about');
        $this->load->view('Admin/about',$aboutDetail);
    }

    public function updateAchivement(){

        $where_arr = array('achivement_ID'=>$this->input->post('achivementID'));

        $data = array(
            'achivement_ID' => $this->input->post('achivementID'),
            'achivement_description' => $this->input->post('achivementDescription')
            
        );
        $this->adminModel->updateData('achivements',$data, $where_arr);

        $data['achivementRecord'] = $this->adminModel->getData($tablename='achivements');
        $this->load->view('Admin/achivements',$data);
    }

    public function achivementRecordUpdate(){
    	
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('achivement_ID'=> $id);
            $this->adminModel->deleteData('achivements',$where_arr);
        }

    	$achivementDetail['achivementRecord'] = $this->adminModel->getData($tablename='achivements');
        $this->load->view('Admin/achivements',$achivementDetail);
    }

    public function addAchivement(){

        
        $achivement_array = array(

            'achivement_Description' => $_POST['Description'],

        );

        $res=$this->adminModel->insertData($tablename="achivements",$achivement_array);

        

        redirect('/aboutController/achivementRecordUpdate');
    }

}