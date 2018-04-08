<div id="bloghead">
<div class="blog-header">
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-4">
	<a href="<?php appsConfig::URL('/home');?>"><img src="<?php appsConfig::URL('/apps/images/c63e25ac6765734c3a307c98ba456b17.png');?>" alt=""></a>

	<label for="blogmenu" class="menuResponsive"><i class="fa fa-bars" aria-hidden="true"></i></label>
</div>

<div class="col-md-6 col-sm-4 col-sm-offset-3 col-md-offset-4">

<input type="checkbox" id="blogmenu">
	<ul>
	<?php
	$db = new DBContext();
	foreach ($db->getData("category",array("id","name")) as $key => $value) {
		echo '<li><a href="'.appsConfig::Link('/category/'.$value['id']).'">'.$value['name'].'</a></li>';
	}
	?>
	</ul>
</div>



</div>
</div>

</div>
</div>



