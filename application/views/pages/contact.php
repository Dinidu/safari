<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>RS-1200 Prototype 51 | Pages | Contact</title>
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
    <div id="contact" class="clear">
      <div class="one_half first">
        <h1>Puruselit mauris nulla hendimentesque</h1>
        <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
        <div id="respond">
          <h2>Contact Us</h2>
          <form class="rnd5" action="#" method="post">
            <div class="form-input clear">
              <label class="one_half first" for="author">Name <span class="required">*</span><br>
                <input type="text" name="author" id="author" value="" size="22">
              </label>
              <label class="one_half" for="email">Email <span class="required">*</span><br>
                <input type="text" name="email" id="email" value="" size="22">
              </label>
            </div>
            <div class="form-message">
              <textarea name="message" id="message" cols="25" rows="10"></textarea>
            </div>
            <p>
              <input type="submit" value="Submit">
              &nbsp;
              <input type="reset" value="Reset">
            </p>
          </form>
        </div>
      </div>
      <div class="one_half">
        <div class="map push50"><img src="<?php echo base_url();?>images/demo/1200x400.gif" alt=""></div>
        <section class="contact_details clear">
          <h2>Puruselit mauris nulla hendimentesque</h2>
          <p>This is a W3C standards compliant free responsive HTML5 website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more responsive HTML5 templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
          <div class="one_half first">
            <address>
            Company Name<br>
            Street Name &amp; Number<br>
            Town<br>
            Postcode/Zip
            </address>
          </div>
          <div class="one_half">
            <ul class="list none">
              <li>Tel: xxxxx xxxxxxxxxx</li>
              <li>Fax: xxxxx xxxxxxxxxx</li>
              <li>Email: <a href="#">contact@mydomain.com</a></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
<?php $this->load->view('footer'); ?>
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