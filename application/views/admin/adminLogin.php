<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Safari Park Ridiyagama - Administrator Panel Version 1

		Copyright 2013 Buddhika Udaya Sri
		
	-->
	<meta charset="utf-8">
	<title>Safari Park Ridiyagama - Administrator Panel </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="<?php echo base_url()?>admin_assets/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link id="bs-css" href="<?php echo base_url()?>admin_assets/css/bootstrap-cerulean.css" rel="stylesheet">
	<link href="<?php echo base_url()?>admin_assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>admin_assets/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()?>admin_assets/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url()?>admin_assets/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url()?>admin_assets/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>admin_assets/css/uploadify.css' rel='stylesheet'>
	<!-- form validation css-->
	<link href='<?php echo base_url();?>admin_assets/css/validationEngine.jquery.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>admin_assets/img/favicon.ico">
    
    
    
    
    <!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->


	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url();?>admin_assets/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url();?>admin_assets/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url();?>admin_assets/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url();?>admin_assets/js/excanvas.js"></script>
	<script src="<?php echo base_url();?>admin_assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>admin_assets/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>admin_assets/js/charisma.js"></script>
	
	<!-- javascripts for inline form validation -->
	<script src="<?php echo base_url();?>admin_assets/js/jquery.validationEngine.js"></script>
	<script src="<?php echo base_url();?>admin_assets/js/jquery.validationEngine-en.js"></script>
	
	 <!-- javascripts for login form validation-->
    <script src="<?php echo base_url();?>admin_assets/js/ajax_admin_login.js"></script>
    
	<script>
		jQuery(document).ready(function()
		{
			// binds form submission and fields to the validation engine
			jQuery("#login_form").validationEngine();
			
		});
		
		var baseurl =  "<?php echo base_url() ?>";
		
	</script>
	
    
</head>



			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Safari Park Ridiyagama - Administration Panel </h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					<!--<form class="form-horizontal" action="index.html" method="post">-->
					<?php $attributes = array('class' => 'email', 'id' => 'login_form');?>
					<?php echo form_open('administrator/login_validate',$attributes);?>
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10 validate[required]" name="admin_username" id="admin_username" type="text" value="" placeholder="user name" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10 validate[required]" name="admin_password" id="admin_password" type="password" value="" placeholder="password" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit_login" id="login_submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
            
             <?php
	if ($this->session->flashdata('login')){ 
		echo "<div class='error_message'>";
		echo $this->session->flashdata('login');
		echo "</div>";
	}
	
	if ($this->session->flashdata('login2')){ 
		echo "<div class='error_message'>";
		echo $this->session->flashdata('login2');
		echo "</div>";
	}
	if ($this->session->flashdata('login3')){ 
		echo "<div class='error_message' style='margin-top:15px;'>";
		echo $this->session->flashdata('login3');
		echo "</div>";
	}
	?>
            
            
<?php include('footer.php'); ?>
