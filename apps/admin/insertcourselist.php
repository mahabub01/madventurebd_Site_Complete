<?php

$db = new DBContext();
$input = new Validation();
$tablename= "category";
if(isset($_POST['btn'])){
	$input->post("name")->isEmpty();
	$name = $input->values['name'];

	if($input->submit()){

			$data = array('name' =>$name);
			if($db->addData($tablename,$data)){
				echo '<div class="success-mgs">Data Added Successfully...</div>';
			}
			else
			{
				echo '<div class="error-mgs">Data Added Fails....</div>';
			}
		}

	else{
		print_r($input->errors);
	}
}


?>






<div class="admin-form">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="enter here.......">
  </div>


  <button type="submit" name="btn" class="btn btn-default">Add Category List</button>
</form>



<hr>
<a href="<?php echo appsConfig::URL('/admin.php?admin=categorylist')?>">Back to List</a>

</div>