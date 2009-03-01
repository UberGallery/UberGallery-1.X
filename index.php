<?php substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') ? ob_start("ob_gzhandler") && $gzip = 1 : ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>CK Gallery</title>
  <link rel="stylesheet" href="gallery.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="thickbox/thickbox.css" type="text/css" media="screen" />
</head>
<?php flush() ?>
<body>

<?php include_once('ck-gallery.php'); ?>

<!-- THICKBOX -->
<script type="text/javascript" src="thickbox/jquery.js"></script>
<script type="text/javascript" src="thickbox/thickbox.js"></script>
<!-- /THICKBOX -->

<?php if ($gzip == "1") echo("<!-- Page served with gzip compression -->\r\n"); ?>
</body>
</html>
