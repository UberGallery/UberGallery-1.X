<?php substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') ? ob_start("ob_gzhandler") && $gzip = 1 : ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>UberGallery</title>
  <link rel="shortcut icon" href="images/images.png" />
  <link rel="stylesheet" type="text/css" href="ubergallery/css/ubergallery.css" />
  <link rel="stylesheet" type="text/css" href="ubergallery/thickbox/thickbox.css" />
</head>
<?php flush() ?>
<body>

<?php include_once('ubergallery/ubergallery.php'); ?>

<!-- THICKBOX -->
<script type="text/javascript" src="ubergallery/thickbox/jquery.js"></script>
<script type="text/javascript" src="ubergallery/thickbox/thickbox.js"></script>
<!-- /THICKBOX -->

<?php if ($gzip == "1") echo("<!-- Page served with gzip compression -->\r\n"); ?>
</body>
</html>
