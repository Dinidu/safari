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
<script type="text/javascript" src="<?php echo base_url()?>admin_assets/js/ajax_slider_image_upload.js"></script>
<script>
	//this will remove the fake pathe when user click the delete button
	$("#x").click(function() {
		 $('#slider_image').val('');
	});
	
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
						<a href="<?php echo base_url()?>administrator/slider">slider</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						
						<h2><i class="icon-th"></i>Add new slider image</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                  	<div class="row-fluid">
                  		<?php echo form_open_multipart(base_url().'adminImageUpload/upload_file','id="slider" name="slider"');?>
                  		<?php echo validation_errors(); ?>
                        <div class="span4"><h6>
                        	<div class="control-group">
								<label class="control-label" for="focusedInput">Image Title</label>
								<div class="controls">
								  <?php echo form_input($title); ?>
								</div>
							  </div>
			             </h6>
			           </div>
                
  		             <div class="span4"><h6>     
				                    <label class="cabinet"> 
				                    	<div class="text">Browse</div>
				                    	
				                    	<div class="thumb_image_holder"><!--image holder div starts-->
						                    <div class="main_image">
						               
						                    <img id="img_prev" src="#"  style="width:165px; height:122px; background-color: #FBFBFB"/>
						                    <img src="<?php echo base_url()?>admin_assets/img/delete.png" style="float:left; margin-top:9px; margin-right:9px; cursor:pointer" id="x" class="delete_image del"/>
						                    
						                    
						                </div>
						               </div>
							                    	
				                        <?php //echo form_upload($file_input); ?>
				                        <input type='file' onchange="readURL(this);" class="file" id="slider_image" name="slider_image" />
				                   
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
					</div><!--/span-->
				</div><!--/row-->
			
			
			<!--Table goes here -->		
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Slider Images </h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Thumbnail</th>
								  <th>Title</th>
								  <th>Added By</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	
						  	<?php 
						  	
						  	foreach ($slider_details as $row) 
						  	{
						  		echo '<tr>';
								echo '<td>'; 
								echo '
									<ul class="thumbnails gallery">
														<li id="image-1" class="thumbnail">
								<a style="background:url("'.base_url()."images/demo/slider/".$row->image_url.'")" title="'.$row->slider_imageTitle.'" href="'.base_url()."images/demo/slider/".$row->image_url.'">
								<img class="grayscale" src="'.base_url()."images/demo/slider/".$row->image_url.'" 
								alt="Sample Image 1"></a>
							</li>';
								echo'</td>';
								
								echo '<td class="center">'; echo $row->slider_imageTitle ;echo '</td>';
								echo '<td class="center">'; echo $row->added_by ; echo '</td>';
								echo '<td class="center">';
									if( $row->status == 1){ echo '<span class="label label-success"> Active </span>'; }
									else { echo '<span class="label label-important">Banned</span>'; }
								
								echo '</td>';
								
								echo '<td class="center">
									
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
								</tr>';  
							}
						  	
						  	?>
							
							
							
							
							</tbody>
							</table>
						</div>
					</div>
				</div>

<?php include('footer.php'); ?>	