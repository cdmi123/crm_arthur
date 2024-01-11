<?php 

include_once 'db.php';

$barcode = $_POST['barcode'];

$collection_data_query = "select * from purchase where barcode='$barcode'";
$collection_data = mysqli_query($con,$collection_data_query);
$collection_row = mysqli_fetch_assoc($collection_data);
$row_count = mysqli_num_rows($collection_data);

if($row_count==1){
	echo json_encode($collection_row);
}

 ?>