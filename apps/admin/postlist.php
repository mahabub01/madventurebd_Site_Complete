
<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>

<?php

if(isset($_POST['btn_delete'])){
	$db = new DBContext();
	$id = $_POST['delete_id'];
	if($db->deleteData("post",array('id'=>$id))){
		echo '<div class="success-mgs">Data Delete Successfully...</div>';
	}
	else
	{
		echo '<div class="error-mgs">Data Deleted Fails....</div>';
	}

}


?>




<a href="admin.php?admin=insertpost">Create</a>
<hr>
<table class="display" id="myTable">
	<thead>
		<th>Sl</th>
		<th>Post Title</th>
		<th>Category</th>
		<th>Description</th>
		<th>image</th>
		<th></th>
		<th></th>
	</thead>

	<tbody>
		

		<?php
		$db = new DBContext();
		$i = 1;
		foreach ($db->getData("post",array("id","title","description","categoryid","image"), " order by id DESC") as  $value) {
			echo '<tr>
			<td>'.$i++.'</td>
			<td>'.$value['title'].'</td>';
			echo '<td>'.$value['categoryid'].'</td>';
			echo '<td>';
			if(strlen($value['description']) > 100){
				$text = substr($value['description'], 0,100);
				echo htmlentities($text);
			}
			else{
				echo htmlentities($value['description']);
			}
			echo '</td>';


			echo '<td><img src="apps/postimages/'.$value['id'].'_'.$value['image'].'" height="100" width="100"/></td>';


		


			echo '<td>
				<form action="'.appsConfig::Link('/admin.php?admin=editpost').'" method="post">
					<input type="hidden" name="edit_id" value="'.$value['id'].'">
					<input type="submit" name="btn_edit" value="Edit" class="btn btn-primary">
				</form>
			</td>
			<td>
				<form action="" method="post">
					<input type="hidden" name="delete_id" value="'.$value['id'].'">
					<input type="submit" name="btn_delete" value="Delete" class="btn btn-danger">
				</form>
			</td>


			';

	



				
		echo '</tr>';
		}



		?>




	</tbody>
</table>


