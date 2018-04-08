<script type="text/javascript">
$(document).ready(function(){

$(window).scroll(function(){
var Top = $(window).scrollTop();
if(Top > 50)
{
  $('#bloghead').addClass("blogsticky");
}
else
{
  $('#bloghead').removeClass("blogsticky");
}

});


});
</script>

<?php
include_once 'header.php';
?>


<!--start main content section-->
<div class="container">
<div class="row" style="margin-top:100px;margin-bottom:40px;">
<!--start left content section-->
<div class="col-md-8">
<div class="blog-left-box">


<?php
$db = new DBContext();

if(isset($url[1])){
	$_SESSION['cid'] = $url[1];
}

if($db->getData("post",array("id","title","description","image","categoryid","date1","name"), " where categoryid = ".$_SESSION['cid'])){


foreach ($db->getData("post",array("id","title","description","image","categoryid","date1","name"), " where categoryid = ".$_SESSION['cid']) as $key => $value) {
	

?>

<!--start post box-->
<div class="blog-post" style="background-color: white;">
<img src="<?php appsConfig::URL('/apps/postimages/'.$value['id'].'_'.$value['image'])?>">
<h2><?php echo $value['title'];?></h2>

<p>
<a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
 <?php echo $value['date1'];?></a>
<a href=""><i class="fa fa-user" aria-hidden="true"></i>
 <?php echo $value['name'];?></a>
<a href=""><i class="fa fa-folder-open-o" aria-hidden="true"></i>
 <?php 
foreach ($db->detailsData("category",array("name"),array('id'=>$value['categoryid'])) as  $item) {
	echo $item['name'];
}
?></a>
<a href=""><i class="fa fa-comments" aria-hidden="true"></i>
 3 Comments</a>
</p>

<p><?php 

			if(strlen($value['description']) > 200){
				$text = substr($value['description'], 0,200);
				echo $text;
			}
			else{
				echo $value['description'];
			}


?> </p>

<a href="<?php appsConfig::URL('/details/'.$value['id'])?>" class="readmore">Continue Reading »</a>

</div>
<!--end post box-->


<?php } 

}
else{
	echo '
	<div class="blog-post">
	<h1>Opps</h1>
	<h1>Data Not Found</h1>
	</div>';
}
?>





</div>
</div>
<!--end left content section-->








<!--start right content section-->
<div class="col-md-4">
<div class="b-right-box">


<!--start search section-->
<div class="blog search">
<form action="<?php appsConfig::URL('/search')?>" method="post">
	<input type="search" name="search">
	<button type="submit" name="btn_search">Search</button>
</form>
</div>
<!--end search section-->


<!--start popular post section-->
<div class="blog" style="margin-top: 30px;">
<h2>Popular Posts</h2>


<?php
$i = 1;
foreach ($db->getData("post",array("id","title","description","image","categoryid","date1","name")," limit 0,5") as $key => $value) {

?>


<!--start popular post-->
<div class="popular-post">
<img src="<?php appsConfig::URL('/apps/postimages/'.$value['id'].'_'.$value['image'])?>">

<div class="post-over-text">
<?php echo $value['title'];?>
<p style="color:white;font-size: 10px;">POSTED ON <?php echo $value['date1'];?></p>
</div>

<div class="circle">
	<?php echo '0'.$i++;?>
</div>
</div>
<!--end popular post-->

<?php } ?>



</div>
<!--end popular post section-->







<!--start updated post section-->
<div class="blog" style="margin-top: 30px;">
<h2>Recent Post</h2>


<?php
$i = 1;
foreach ($db->getData("post",array("id","title","description","image","categoryid","date1","name")," order by id DESC") as $key => $value) {

?>


<!--start updated post box-->
<div class="update-post">
<img src="<?php appsConfig::URL('/apps/postimages/'.$value['id'].'_'.$value['image'])?>">
<h3><a href="<?php appsConfig::URL('/details/'.$value['id'])?>"><?php echo $value['title']?></a></h3>
<p><a href="<?php appsConfig::URL('/category/'.$value['id'])?>" style="color:black"><?php 
	foreach ($db->detailsData("category",array("name"),array('id'=>$value['categoryid'])) as  $item) {
		echo $item['name'];
	}
?>
 / POSTED ON 
<?php echo $value['date1'];?></a></p>
</div>
<!--end updated post box-->


<?php } ?>














</div>
<!--end updated post section-->








</div>
</div>
<!--end right content section-->

</div>


</div>








<!--end main content section-->




<?php include_once 'footer.php';?>