<?php 
$image_submit = array(
		'name'	=>'image_submit',
		'id'	=>'image_submit',
		'class'	=> ' btn btn-primary',
		'value' => 'Submit'
		);
		
$file_input = array(
		'name'	=>'userfile',
		'id'	=>'userfile',
		'class'	=> 'file',
		/*'style'	=> 'width:292px;',*/
		'size'	=>'1'
				);
				
$title = array(
			'name'	=>	'title',
			'id'	=>	'title',
			'placeholder' => '&nbsp;title',
			'class' =>'input-xlarge focused'
			);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<!--
		Safari Park Ridiyagama version 1

		Copyright 2013 Udaya Sri
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://zkylark.com
		http://twitter.com/buddhikaudayasri
	-->
	
	
	
<?php include('header.php'); ?>	
<script type="text/javascript" src="<?php echo base_url()?>admin_assets/js/live_thumbnails.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>admin_assets/js/ajax_animalEdit.js"></script>
<script>
	var baseurl =  "<?php echo base_url() ?>";	
</script>
<style>
	
	.del{ display:none; position:relative; z-index:200; float:left}
</style>

</head>

<?php include('menu.php'); ?>


				<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url();?>administrator/dashboard">Admin Panel</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>administrator/gallery">Gallery</a>
					</li>
				</ul>
			</div>
			
				<div class="box-content">
                  	<div class="row-fluid">
                  		<?php echo form_open_multipart(base_url().'adminGalleryImageUpload/upload_galleryImage','id="gallery" name="gallery"');?>
                  		<?php echo validation_errors(); ?>
                        <!-- <div class="span4"><h6>
                        	<div class="control-group">
								<label class="control-label" for="focusedInput">Image Title</label>
								<div class="controls">
								  <?php echo form_input($title); ?>
								</div>
							  </div>
			             </h6>
			           </div> -->
			 
                
  		             <div class="span4"><h6>     
				                    <label class="cabinet"> 
				                    	<div class="text">Browse</div>
				                    	
				                    	<!-- <div class="thumb_image_holder"><!--image holder div starts-->
						                    <!-- <div class="main_image">
						               
						                    <img id="img_prev" src="#"  style="width:165px; height:122px; background-color: #FBFBFB"/>
						                    <img src="<?php //echo base_url()?>admin_assets/img/delete.png" style="float:left; margin-top:9px; margin-right:9px; cursor:pointer" id="x" class="delete_image del"/>
						                    
						                    
						                </div> -->
						               <!-- </div>  -->
							                    	
				                        <?php //echo form_upload($file_input); ?>
				                        <input type='file'  class="file" id="gallery_image" name="gallery_image" multiple="multiple" />
				                   
				                     </label>
				               </h6></div>
				               <div class="span4"><h6> 
									<div>
								  		<div class="text">&nbsp;</div>
								  		<?php echo form_submit($image_submit);?>
									
				                	</div>
				                </h6>
				               </div> 
				               
				               <?php
									if ($this->session->flashdata('msg')){ 
										echo "<div class='error_message'>";
										echo $this->session->flashdata('msg');
										echo "</div>";
									}
									?>                  
	                    </div>                   
	                  </div>
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-picture"></i> Gallery</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<p class="center">
							<button id="toggle-fullscreen" class="btn btn-large btn-primary visible-desktop" data-toggle="button">Toggle Fullscreen</button>
						</p>
						<br/>
						<ul class="thumbnails gallery">
							<?php foreach( $gallery_details as $row)
							{
								echo '<li id="image-1" class="thumbnail">
									<a style="background:url("'.base_url().'images/gallery/'.$row->image_url.')" title="'.$row->image_name.'" href="'.base_url().'images/gallery/'.$row->image_url.'"><img class="grayscale" src="'.base_url().'images/gallery/'.$row->image_url.'" alt="Sample Image 1"></a>
								</li>';
							}
							?>
							
														
						</ul>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->







<?php include('footer.php'); ?>	