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
<div class="col-md-12">
<div class="blog-details-box">


<?php
$db = new DBContext();
if(isset($url[1])){
	$_SESSION['details'] = $url[1];
}


foreach ($db->detailsData("post",array("id","title","description","image","categoryid","date1","name"),array("id"=>$_SESSION['details'])) as $key => $value) {
	
?>

<!--start post box-->
<h2 style="color:#537AB7;font-family: 'Montserrat', sans-serif;font-size:18px;padding: 0px;margin-top:50px;">Blog-> <?php echo $value['title'];?></h2>
<div class="blog-post" style="background-color: white;">
<img src="<?php appsConfig::URL('/apps/postimages/'.$value['id'].'_'.$value['image']);?>">
<h2><?php echo $value['title'];?></h2>

<p>
<a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
 <?php echo $value['date1'];?></a>
<a href=""><i class="fa fa-user" aria-hidden="true"></i>
 <?php echo $value['name'];?></a>
<a href="<?php appsConfig::URL('/category/'.$value['categoryid'])?>"><i class="fa fa-folder-open-o" aria-hidden="true"></i>
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





</div>
<!--end post box-->


<?php } ?>





</div>
</div>
<!--end left content section-->





</div>


</div>








<!--end main content section-->




<?php include_once 'footer.php';?>