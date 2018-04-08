<?php
ob_start();

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

session_start();
include_once 'config/appsConfig.php';
$apps = new appsConfig();
$apps->loadLibaryClass();

if(Session::get('state') != true){
header("Location:".appsConfig::Link('/administrator.php'));
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cloud System</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/css/admin.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/css/font-awesome.css');?>">

	<link rel="stylesheet" type="text/css" href="<?php appsConfig::URL('/apps/css/bootstrap.css');?>">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="apps/js/jquery.js"></script>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

	<script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

</head>
<body>

<div class="container-fluid">
<div class="row" style="background-color: #00AFF0;min-height: 60px;">
<div class="col-md-6">
<h3 style="color:white">Dashboard</h3>
</div>

<div class="col-md-1 col-md-offset-5">
<p style="padding-top: 20px;"><a href="admin.php?admin=logout" style="color:white"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></p>
</div>
</div>

<div class="row">

<div class="col-md-2">
	<div class="left-admin">
		<img src="apps/images/Administrator-icon.png" alt="..." class="img-circle admin-img">
		<h4><?php echo Session::get("name");?></h4>
		<br/>
		<ul>
			<li><a href="admin.php?admin=home"><i class="fa fa-life-ring" aria-hidden="true"></i> Home</a></li>
			<li><a href="admin.php?admin=categorylist"><i class="fa fa-life-ring" aria-hidden="true"></i> Category List</a></li>
			<li><a href="admin.php?admin=postlist"><i class="fa fa-life-ring" aria-hidden="true"></i> Post List</a></li>

			
		</ul>










	</div>
</div>



<div class="col-md-10">
	<div class="right-admin">
		<?php

			if(isset($_GET['admin'])){
				$url = $_GET['admin'];
				if(file_exists('apps/admin/'.$_GET['admin'].'.php')){
					include_once 'apps/admin/'.$_GET['admin'].'.php';
				}
				else{
					include_once 'apps/public/404.php';
				}
			}
			else
			{
				include_once 'apps/admin/home.php';
			}


		?>


	</div>
</div>



</div>
</div>










<div class="container-fluid">
<div class="row">
<hr>
<div class="col-md-4 col-md-offset-1">
copyright@<?php echo Date('Y');?>
</div>
</div>
</div>









	
	<script type="text/javascript" src="apps/js/bootstrap.js"></script>
</body>
</html>


<?php ob_end_flush();?>