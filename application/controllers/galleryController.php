<?php


class galleryController extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library("pagination");
        //$this->isLoggedIn();
    }

	public function index(){

		$this->load->model('adminModel');
		$galleryDetail['galleryRecord'] = $this->adminModel->getData($tablename='gallery');
        
		$this->load->view('Admin/gallery.php',$galleryDetail);
	}


    public function updateGallery(){

        $where_arr = array('image_ID'=>$this->input->post('imageID'));

        $data = array(
            'image_ID' => $this->input->post('imageID'),
            'image_Category' => $this->input->post('imageCategory'),
            // 'image' => $this->input->post('file_Image')
            
        );
        $this->adminModel->updateData('gallery',$data, $where_arr);

        $data['galleryRecord'] = $this->adminModel->getData($tablename='gallery');
        $this->load->view('Admin/gallery',$data);
    }

    public function galleryRecordUpdate(){
    	
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('image_ID'=> $id);
            $this->adminModel->deleteData('gallery',$where_arr);
        }

    	$galleryDetail['galleryRecord'] = $this->adminModel->getData($tablename='gallery');
        $this->load->view('Admin/gallery',$galleryDetail);
    }

    public function addImage(){

        $config['upload_path'] = "./images/";
        $config['allowed_type'] = '*';
        $this->load->library('upload',$config);
        $this->upload->do_upload('file_name');
        $file_name = $this->upload->data();
        $image_array = array(

            'image_Category' => $_POST['category'],
            'image' => $file_name['file_name']

        );

        $this->adminModel->insertData($tablename="gallery",$image_array);

        

        redirect('/galleryController');
    }

}