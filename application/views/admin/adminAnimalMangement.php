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
				
$name = array(
			'name'	=>	'name',
			'id'	=>	'name',
			'placeholder' => '&nbsp;name',
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
						<a href="<?php echo base_url()?>administrator/animal">Animal</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Add New Animal</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?php echo form_open_multipart(base_url().'adminImageUpload/upload_animalInfo','id="anima_info" name="anima_info" class="form-horizontal"');?>
						  <fieldset>
							<!-- <legend>Datepicker, Autocomplete, WYSIWYG</legend> -->
							<div class="control-group">
							  <label class="control-label" for="typeahead">Animal Name </label>
							  <div class="controls">
							  	<?php echo form_input($name); ?>
								<!-- <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'> -->
								<!-- <p class="help-block">Start typing to activate auto complete!</p> -->
							  </div>
							</div>
  							<div class="control-group">
								<label class="control-label" for="selectError">Animal Zone</label>
								<div class="controls">
								  <select id="zone" name="zone">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								  </select>
								</div>
							  </div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Animal Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="animalImage" name="animalImage" type="file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Animal Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="animalDescription" name="animalDescription" rows="3"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" id="animal_save">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
			
			
			<!--Table goes here -->		
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Animal </h2>
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
								  <th>Name</th>
								  <th>Zone</th>
								  <th>Added By</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	
						  	<?php 
						  	
						  	foreach ($animal_details as $row) 
						  	{
						  		echo '<tr class="edit">';
								echo '<td>'; 
								echo '
									<ul class="thumbnails gallery">
										<li id="image-1" class="thumbnail">
										<a style="background:url("'.base_url()."images/animals/".$row->image.'")" title="'.$row->name.'" href="'.base_url()."images/animals/".$row->image.'">
										<img class="grayscale" src="'.base_url()."images/animals/".$row->image.'" 
										alt="Sample Image 1"></a>
									</li></ul>';
								echo'</td>';
								
								echo '<td class="center">'; echo $row->name ;echo '</td>';
								echo '<td class="center">'; echo $row->zone_name ;echo '</td>';
								echo '<td class="center">'; echo $row->user_name ; echo '</td>';
								echo '<td class="center">';
									if( $row->is_available == 1){ echo '<span class="label label-success"> Active </span>'; }
									else { echo '<span class="label label-important">Banned</span>'; }
								
								echo '</td>';
								
								echo '<td class="center edit">';
								echo '<input type="hidden" name="animal_id" id="animal_id" value="'.$row->animal_id.'">';					
								echo '<a class="btn btn-info" href="'.base_url().'administrator/animalEdit" id="animal_edit">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
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