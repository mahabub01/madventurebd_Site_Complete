<?php
ob_start();
session_start();
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
 
require_once 'config/appsConfig.php';
$apps = new appsConfig();
$apps->loadLibaryClass();
$apps->loadPageTitle();
?>
<!DOCTYPE html>
<html>
<head>
	<title>madventurebd.com ! <?php echo appsConfig::$pagetitle;?></title>
	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/css/blog.css')?>">
	<script src="https://use.fontawesome.com/6c0b2c8d9a.js"></script>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/engine1/style.css')?>" />
	<script type="text/javascript" src="<?php appsConfig::URL('/apps/engine1/jquery.js')?>"></script>

	<!-- End WOWSlider.com HEAD section -->


    <link href="apps/thumnail/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="apps/thumnail/thumbnail-slider.js" type="text/javascript"></script>


</head>
<body>




<?php
appsConfig::renderBody();
?>












<script type="text/javascript" src="<?php appsConfig::URL('/apps/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php appsConfig::URL('/apps/js/bootstrap.js')?>"></script>

<script type="text/javascript" src="<?php appsConfig::URL('/apps/engine1/wowslider.js')?>"></script>
<script type="text/javascript" src="<?php appsConfig::URL('/apps/engine1/script.js')?>"></script>

<script type="text/javascript" src="<?php appsConfig::URL('/apps/engine1/plugins/carousel.js')?>"></script>
</body>
</html>

<?php ob_end_flush();?>






