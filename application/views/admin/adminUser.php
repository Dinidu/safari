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
						<a href="<?php echo base_url()?>administrator/schedule">Schedule</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Add New Schedule</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?php echo form_open(base_url().'adminUserRegistration/adminUserSave','id="userSave" name="userSave" class="form-horizontal" ');?>
						  <fieldset>
						  	
						  	<div class="control-group">
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="user_name" name="user_name" type="text">
								<!-- <p class="help-block">Start typing to activate auto complete!</p> -->
							  </div>
							</div>
							
							
							<!-- <legend>Datepicker, Autocomplete, WYSIWYG</legend> -->
							
							 <div class="control-group">
								<label class="control-label" for="selectError">User Type</label>
								<div class="controls">
								  <select id="userType" name="userType" data-rel="chosen">
								  	
								  	<?php 
				                        for($i =0; $i<count($user_types);$i++){
				                            echo '<option value="'.$user_types[$i]->usertype_id.'"  > '.$user_types[$i]->type.'</option>';
				                            }
				                        
				                        ?>
									<!-- <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option> -->
								  </select>
								</div>
							  </div>
							  
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Full Name </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fullName" name="fullName" type="text">
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Email</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="email" name="email" type="text">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="fileInput">Contact Number</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="contactNum" name="contactNum" type="text">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">User Password</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="password1" name="password1" type="password">
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Re-Enter Password</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="password2" name="password2" type="password">
							  </div>
							</div>

							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" id="schedule_save">Save</button>
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
						<h2><i class="icon-user"></i>Schedule Table </h2>
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
								  <th>User Name</th>
								  <th>Full Name</th>
								  <th>Email</th>
								  <th>Contact Number</th>
								  <th>User Type</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	
						  	<?php 
						  	
						  	foreach ($user_details as $row) 
						  	{
						  		echo '<tr>';
								echo '<td>'; echo $row->user_name;echo'</td>';
								echo '<td class="center">'; echo $row->full_name ;echo '</td>';
								echo '<td class="center">'; echo $row->email ;echo '</td>';
								echo '<td class="center">'; echo $row->contact_number ; echo '</td>';
								echo '<td class="center">'; echo $row->type ; echo '</td>';
								
								echo '<td class="center">';
									if( $row->status == 1){ echo '<span class="label label-success"> Active </span>'; }
									else { echo '<span class="label label-important">Banned</span>'; }
								
								echo '</td>';
								echo '<td class="center edit">';
								echo '<input type="hidden" name="user_id" id="user_id" value="'.$row->user_id.'">';					
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