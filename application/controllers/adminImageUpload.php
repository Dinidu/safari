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
			
			$this->load->library('session');
		}
		
 function index()
	{
		
        if ($this->input->post('image_submit')) {
			
            $this->upload_file();
        }

	}
	
//####################################################################################
    function upload_file()
    {
	
		
			$this->form_validation->set_rules('caption', 'Image Description', '|xss_clean|max_length[200]');
			$caption = $this->input->post('caption');
			
				if ($this->form_validation->run() != true){
					
					//echo form_error('caption');	
					
						$this->session->sess_destroy();
						$this->session->set_flashdata('caption', 'Image description can only contain 150 characters');
						redirect('administrator/home');	
					}
			else{
					$c_upload['upload_path']    = $this->data['dir']['original'];
					$c_upload['allowed_types']  = 'gif|jpg|png|jpeg|x-png';
					$c_upload['max_size']       = '1500';
					$c_upload['max_width']      = '680';
					$c_upload['max_height']     = '330';
					$c_upload['remove_spaces']  = TRUE;
			
					$this->load->library('upload', $c_upload);
					
					if ($this->upload->do_upload()) {
						
						$img = $this->upload->data();
						
						//print_r($img);
						
						// create thumbnail
						$new_image = $this->data['dir']['thumb'].'thumb_'.$img['file_name'];
						
						$c_img_lib = array(
							'image_library'     => 'gd2',
							'source_image'      => $img['full_path'],
							'maintain_ratio'    => TRUE,
							'width'             => 100,
							'height'            => 100,
							'new_image'         => $new_image
						);
						
						$this->load->library('image_lib', $c_img_lib);
						$this->image_lib->resize();
								
						//print_r(base_url().$new_image);
						//die();	
							
						//this will create thumb images path	
						$thumb_path = base_url().$new_image;
							
						//this will create the actual path for orginal images
						$image_path = base_url().'assets/slider/orginal/'.$img['file_name'];
							
							//echo $image_path;
				
						$this->load->model('insertdata_model');
							
						$params = array($img['file_name'],'thumb_'.$img['file_name'],$caption);
				
						$query = 'INSERT INTO slider (image_name,thumb_name,image_caption) VALUES(?,?,?)'; 
							
						$result = $this->insertdata_model->insertdata($query,$params);
							
						redirect('administrator/slider');
						}
				
					else{
						$this->data['error'] = $this->upload->display_errors();
				
						$this->session->sess_destroy();
						$this->session->set_flashdata('msg', 'Please select a vaid image to upload. You can upload images only in jpg, png, gif, jpeg & x-png formats.');
						   redirect('administrator/home');
					
						}
					
					} 
      	}
 
}
