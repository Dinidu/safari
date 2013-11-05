<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminImageUpload extends CI_Controller {

 public $data = array(
        'dir' => array(
            'original' => 'admin_assets/uploads/',
            'thumb' => 'admin_assets/uploads/thimbs'
        ),
        'total' => 0,
        'images' => array(),
        'error' => ''
    );

		function __construct(){
			
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('upload');
		}
		
 function index()
	{
		$this->load->view('adminSlider', array('error' => ' ' ));

	}
	
//####################################################################################
    function upload_file()
    {
		$this->form_validation->set_rules('title', 'Image Title', 'xss_clean|required');
		$image_title = $this->input->post('title');
		$slider_image = $this->input->post('slider_image');
		
		if ($this->form_validation->run() != true)
		{
			
			//echo form_error('title');
			
			$this->session->sess_destroy();
			$this->session->set_flashdata('mg', 'Image Title can not be empty');
			//die();
			redirect('administrator/slider');	
		}
		else
		{
				/*------------------- home page image upload ------------*/
			if ($_FILES['slider_image']['name']!="") 
			{
				// this is  will upload the image for home page....
				$config['upload_path'] = './images/demo/slider';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['file_name'] = $image_title.'_slider_image';
				// $config['max_size'] = '1500';
				// $config['max_width'] = '180';
				// $config['max_height'] = '113';
				$this->upload->initialize($config); 
				if($this->upload->do_upload('slider_image')){
					$img_home = $this->upload->data();
					//echo $img_home['file_name'];	
					$slider_imageName = $img_home['file_name'];	
					
					$this->load->model('adminSliderModel');
					
					$params = array($image_title,$slider_imageName,1,"admin",date("Y-m-d H:i:s"));
					
					$query = 'INSERT INTO slider_images (slider_imageTitle,image_url,status,added_by,added_date) 
					VALUES(?,?,?,?,?)';
					
					$result = $this->adminSliderModel->slier_imageUpload($query,$params); 
					
					if($result == true){ redirect('administrator/slider'); }
									
					}
				else{
					$this->data['error'] = $this->upload->display_errors();
			
					$this->session->sess_destroy();
					$this->session->set_flashdata('image',$this->data['error'] );
					$home_page_img_name  = null;
			
				}
			}
		}
	}
}
