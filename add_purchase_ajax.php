<?php include_once 'db.php'; 
	
class size_class
{
	function get_size_record($con,$s_size,$e_size)
	{
		$sql_select_size = "select * from size where size_id>=$s_size and size_id<=$e_size";
    	$sql_data = mysqli_query($con,$sql_select_size);
    	return $sql_data;
	}
}

$s_size = $_POST['s_size'];
$e_size = $_POST['e_size'];

$select_size = new size_class();
$size_data = $select_size->get_size_record($con,$s_size,$e_size); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row mx-0">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <?php while($row = mysqli_fetch_assoc($size_data)){ ?>
                                
                                <h4 class="text-center bg-light py-3 my-3">Size : <?php echo $row['s_name']; ?></h4>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Barcode</label>
                                    <input type="text" class="form-control" placeholder="Barcode">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Item Name</label>
                                    <input type="text" class="form-control" placeholder="Item Name">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Design</label>
                                    <input type="text" class="form-control" placeholder="Design">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Size</label>
                                    <input type="text" class="form-control" placeholder="Design" value="<?php echo $row['s_name']; ?>">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Color</label>
                                    <input type="text" class="form-control" placeholder="Color">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Qty</label>
                                    <input type="text" class="form-control" placeholder="Qty">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Rate</label>
                                    <input type="text" class="form-control" placeholder="Rate">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">MRP</label>
                                    <input type="text" class="form-control" placeholder="MRP">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label">Discount (%)</label>
                                    <input type="text" class="form-control" placeholder="Discount">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Sell</label>
                                    <input type="text" class="form-control" placeholder="Sell">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">W. Rate</label>
                                    <input type="text" class="form-control" placeholder="W. Rate">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Amount</label>
                                    <input type="text" class="form-control" placeholder="Amount">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">SGST (%)</label>
                                    <input type="text" class="form-control" placeholder="SGST">
                                </div>
                            <?php } ?>
                            <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                

