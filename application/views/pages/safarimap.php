<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>RS-1200 Prototype 51 | Gallery Layouts | Full Width Gallery</title>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
<!--[if lt IE 9]>
<link href="<?php echo base_url();?>layout/styles/ie/ie8.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>layout/scripts/ie/css3-mediaqueries.min.js"></script>
<script src="<?php echo base_url();?>layout/scripts/ie/html5shiv.min.js"></script>
<![endif]-->
</head>
<body class="">

<!-- ################################################################################################ -->
<?php $this->load->view('header'); ?>
<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="gallery">
      <section>
        <figure>
          <h2>Safari Park Map</h2>
          <ul class="clear">
            <li><a href="#"><img src="<?php echo base_url();?>images/maps/full.jpg" alt=""></a></li>
            
          </ul>
           
        </figure>
      </section>
      <!-- ####################################################################################################### -->
       
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
<?php $this->load->view('footer'); ?>
<!-- Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url();?>layout/scripts/jquery-latest.min.js"><\/script>\
<script src="<?php echo base_url();?>layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="<?php echo base_url();?>layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="<?php echo base_url();?>layout/scripts/custom.js"></script>
</body>
</html>