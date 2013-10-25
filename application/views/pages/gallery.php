<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>RS-1200 Prototype 51 | Gallery Layouts | 3 Column Grid</title>
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
          <h2>Gallery Title Goes Here</h2>
          <ul class="clear">
            <li class="one_third first"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third first"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third first"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
            <li class="one_third"><a href="#"><img src="<?php echo base_url();?>images/demo/gallery.gif" alt=""></a></li>
          </ul>
          <figcaption>
            <p>This is a W3C standards compliant free responsive HTML5 website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
            <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more responsive HTML5 templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
          </figcaption>
        </figure>
      </section>
      <!-- ####################################################################################################### -->
      <nav class="pagination">
        <ul>
          <li class="prev"><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="splitter"><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li class="splitter"><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li class="next"><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
<?php $this->load->view('header'); ?>
<div class="wrapper row4">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
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