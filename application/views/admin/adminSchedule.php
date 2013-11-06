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
					<?php echo form_open(base_url().'adminScheduleSave/schedule_save','id="scheduleSave" name="scheduleSave" class="form-horizontal" ');?>
						  <fieldset>
							<!-- <legend>Datepicker, Autocomplete, WYSIWYG</legend> -->
							
							 <div class="control-group">
								<label class="control-label" for="selectError">Vehicle Type</label>
								<div class="controls">
								  <select id="vehicleType" name="vehicleType" data-rel="chosen">
								  	
								  	<?php 
				                        for($i =0; $i<count($vehicle_details);$i++){
				                            echo '<option value="'.$vehicle_details[$i]->id.'"  > '.$vehicle_details[$i]->vehicleType.'</option>';
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
							  <label class="control-label" for="typeahead">Start Time </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="startTime" name="startTime" type="text">
								<!-- <p class="help-block">Start typing to activate auto complete!</p> -->
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">End Time</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="endTime" name="endTime" type="text">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="fileInput">Capacity</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="capacity" name="capacity" type="text">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Number of Seats</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="numOfSeats" name="numOfSeats" type="text">
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Note</label>
							  <div class="controls">
								<textarea class="cleditor" id="note" name="note" rows="3"></textarea>
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
								  <th>Schedule No</th>
								  <th>Vehicle Type</th>
								  <th>Start Time</th>
								  <th>End Time </th>
								  <th>Capacity</th>
								  <th>Number of seats</th>
								  <th>Notes</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	
						  	<?php 
						  	
						  	foreach ($schedule_details as $row) 
						  	{
						  		echo '<tr class="edit">';
								echo '<td>'; echo $row->tripid;echo'</td>';
								echo '<td class="center">'; echo $row->vehicleType ;echo '</td>';
								echo '<td class="center">'; echo $row->starttime ;echo '</td>';
								echo '<td class="center">'; echo $row->endtime ; echo '</td>';
								echo '<td class="center">'; echo $row->capacity ; echo '</td>';
								echo '<td class="center">'; echo $row->availableseets ; echo '</td>';
								echo '<td class="center">'; echo $row->note ; echo '</td>';
								
								
								echo '<td class="center">';
									if( $row->status == 1){ echo '<span class="label label-success"> Active </span>'; }
									else { echo '<span class="label label-important">Banned</span>'; }
								
								echo '</td>';
								echo '<td class="center edit">';
								echo '<input type="hidden" name="animal_id" id="animal_id" value="'.$row->tripid.'">';					
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