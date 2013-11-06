<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminGalleryImageUpload extends CI_Controller {

 public $data = array(
        'dir' => array(
            'original' => 'images/gallery/',
            'thumb' => 'images/gallery/thumb'
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
    function upload_galleryImage()
    {
		// $this->form_validation->set_rules('title', 'Image Title', 'xss_clean|required');
		// $image_title = $this->input->post('title');
		 $gallery_image = $this->input->post('slider_image');
		
		//$this->form_validation->run() = true;
		
		
				/*------------------- home page image upload ------------*/
			if ($_FILES['gallery_image']['name']!="") 
			{
				// this is  will upload the image for home page....
				$config['upload_path'] = './images/gallery';
				$config['allowed_types'] = 'gif|jpg|png';
				//$config['file_name'] = .'_gallery_image';
				// $config['max_size'] = '1500';
				// $config['max_width'] = '180';
				// $config['max_height'] = '113';
				$this->upload->initialize($config); 
				if($this->upload->do_upload('gallery_image')){
					$img = $this->upload->data();
					//$img_home = $this->upload->data();
					//echo $img_home['file_name'];	
					$gallery_image_name = $img['file_name'];
					
					$img = $this->upload->data();
						
						//print_r($img);
						
						// create thumbnail
						$new_image = $this->data['dir']['thumb'].$img['file_name'];
						
						$c_img_lib = array(
							'image_library'     => 'gd2',
							'source_image'      => $img['full_path'],
							'maintain_ratio'    => TRUE,
							'width'             => 400,
							'height'            => 400,
							'new_image'         => $new_image
						);
						
						$this->load->library('image_lib', $c_img_lib);
						$this->image_lib->resize();
								
						//print_r(base_url().$new_image);	
							
						//this will create thumb images path	
						$thumb_path = $new_image;
						//echo $new_image['file_name'];
						
						
						echo '</br>';	
						//this will create the actual path for orginal images
						$image_path = base_url().'assets/sales/home_page_images/'.$img['file_name'];
						echo $image_path;
				
					
					$this->load->model('adminGalleryManagement');
					
					$params = array("sample",$gallery_image_name,1,"admin",date("Y-m-d H:i:s"));
					
					$query = 'INSERT INTO gallery (image_name,image_url,status,added_by,added_date) 
					VALUES(?,?,?,?,?)';
					
					$result = $this->adminGalleryManagement->gallery_imageUpload($query,$params); 
					
					if($result == true){ redirect('administrator/gallery'); }
									
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
