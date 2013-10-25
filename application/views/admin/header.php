<meta charset="utf-8">
	<title>Safari Park Ridiyagama - Administrator Panel </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Safari Park, Ridiyagama, Sri Lanka, Wild Life ">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	
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

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url()?>admin_assets/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url()?>admin_assets/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url()?>admin_assets/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url()?>admin_assets/js/excanvas.js"></script>
	<script src="<?php echo base_url()?>admin_assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>admin_assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url()?>admin_assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()?>admin_assets/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url()?>admin_assets/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url()?>admin_assets/js/charisma.js"></script>