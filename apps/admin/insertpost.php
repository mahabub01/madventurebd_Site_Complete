

<?php
$db = new DBContext();
$input = new Validation();

$title           = "";
$description     = "";
$categoryid      = "";
$image           = "";
$date            = "";


if(isset($_POST['btn'])){

$title           = $_POST['title'];
$description     = $_POST['description'];
$categoryid      = $_POST['categoryid'];
$image           = $_FILES['image']['name'];
$date            = date('y-m-d');



$tablename = "post";
$data = array('title'=>$title,'description'=>$description,'categoryid'=>$categoryid,'image'=>$image,'date1'=>$date,'name'=>$_SESSION['name']);

  if($image != ""){

      if($db->addData($tablename,$data)){
        echo '<div class="success-mgs">Data Added Successfully...</div>';

        $sp = $_FILES['image']['tmp_name'];
         $dp = "apps/postimages/".$db->lastid.'_'.$image;
        move_uploaded_file($sp, $dp);
      }
      else{
        echo '<div class="error-mgs">Data Added Fails....</div>';
      }

  }
  else
  {
    echo '<div class="error-mgs">Please Select Your pdf course outline</div>';
  }



}


?>







<div class="row">
<div class="col-md-10">





<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Post Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter course name" name="title" required="required" value="<?php echo $title;?>">

  </div>



   <div class="form-group">
    <label for="exampleTextarea">Post Description</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description">
      <?php echo $description;?>

    </textarea>
     <script>
            CKEDITOR.replace('description');
    </script>
  </div>








  <div class="form-group">
    <label for="exampleSelect1">Post Category</label>
    <select class="form-control" id="exampleSelect1" name="categoryid">
    <option value="0">Select</option>
       <?php
      foreach ($db->getData("category",array("id","name")) as $key => $value) {
        echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
      }

    ?>
    
     
    </select>
  </div>



  <div class="form-group">
    <label for="exampleInputFile">Post Image</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>


  <button type="submit" class="btn btn-primary" name="btn">Add Post</button>
</form>


</div>
</div>
