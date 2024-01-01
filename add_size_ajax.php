<?php 
include_once 'db.php';

	if (isset($_POST['size'])) {

		$size = $_POST['size'];

		$add_size_query = "insert into size(s_name)values('$size')";
		mysqli_query($con,$add_size_query);

		$select_size_query = "select * from size";
		$size_data = mysqli_query($con,$select_size_query);
	}

	while($row_size = mysqli_fetch_assoc($size_data)) {  ?>
	<tr>
		<td><?php echo $row_size['size_id']; ?></td>
		<td><?php echo $row_size['s_name']; ?></td>
		<td><?php echo $row_size['size_id']; ?></td>
	</tr>
	<?php } ?>