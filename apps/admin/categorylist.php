

<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>

<?php

if(isset($_POST['btn_delete'])){
	$db = new DBContext();
	$id = $_POST['delete_id'];
	if($db->deleteData("category",array('id'=>$id))){
		echo '<div class="success-mgs">Data Delete Successfully...</div>';
	}
	else
	{
		echo '<div class="error-mgs">Data Deleted Fails....</div>';
	}

}


?>




<a href="admin.php?admin=insertcourselist">Create</a>
<hr>
<table class="display" id="myTable">
	<thead>
		<th>Sl</th>
		<th>Category Nam</th>
		<th width="10%">Action</th>
		<th width="10%">Action</th>
	</thead>

	<tbody>
		

		<?php
		$db = new DBContext();
		$i = 1;
		foreach ($db->getData("category",array("id","name")) as  $value) {
			echo '<tr>
			<td>'.$i++.'</td>
			<td>'.$value['name'].'</td>
			<td>
				<form action="'.appsConfig::Link('/admin.php?admin=editcourselist').'" method="post">
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


