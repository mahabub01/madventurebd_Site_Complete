<?php  ob_start();

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

?>

<!DOCTYPE html>
<html>
<head>
	<title>madventure Administrator</title>
	<link rel="stylesheet" type="text/css" href="apps/css/administrator.css">
</head>
<body>

<?php
session_start();
include_once 'config/appsConfig.php';
$apps = new appsConfig();
$apps->loadLibaryClass();
?>



<?php
$db = new DBContext();
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = md5($_POST['password']);

if($db->Authentication("admin",$email,$password)){
	foreach ($db->Authentication("admin",$email,$password) as  $value) {
		Session::set("name",$value['name']);
		Session::set("state",true);
		header("Location:".appsConfig::Link('/admin.php'));
	}
}
else{
	echo '<div class="error-mgs">your username and password does not match</div>';
}



}


?>




<span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form action="" method="post" class="best">
    <input type="email" placeholder="email" name="email" required="required"/>
    <input type="password" placeholder="password" name="password" required="required"/>
    <input type="submit" value="Log in" name="submit" />
  </form>
</div>

<script>
$('#toggle-login').click(function(){
  $('#login').toggle();
});

</script>





</body>
</html>
<?php ob_end_flush();?>>


