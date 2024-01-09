<?php include_once 'header.php'; 


$sql_select_branch = "select * from branches";
$b_data = mysqli_query($con,$sql_select_branch);

function get_size($con)
{
    $sql_select_size = "select * from size";
    $sql_data = mysqli_query($con,$sql_select_size);

    return $sql_data;
}

if (isset($_POST['save_purchase'])) {
    
  $size = $_POST['size'];
  $barcode = $_POST['barcode'];
  $item_name = $_POST['item_name'];
  $design = $_POST['design'];
  $color = $_POST['color'];
  $qty = $_POST['qty'];
  $rate = $_POST['rate'];
  $mrp = $_POST['mrp'];
  $discount = $_POST['discount'];
  $sell = $_POST['sell'];
  $wrate = $_POST['wrate'];
  $amount= $_POST['amount'];
  $sgst= $_POST['sgst'];
  $branch_id= $_POST['branch_id'];
  $supplier= $_POST['supplier'];
  $regtype= $_POST['regtype'];
  $state= $_POST['state'];

  if(isset($_POST['gst'])) { $gst = $_POST['gst']; }else{ $gst =""; } 
  if(isset($_POST['rcm'])) { $rcm = $_POST['rcm']; }else{ $rcm =""; } 
  if(isset($_POST['ca'])) { $ca = $_POST['ca']; }else{ $ca =""; } 

  $purchase_date= $_POST['purchase_date'];
  $supplier= $_POST['supplier'];
  $bill_no= $_POST['bill_no'];
  $due_days= $_POST['due_days'];
  $challan_no= $_POST['challan_no'];
  $invoice_type= $_POST['invoice_type'];
  $purchase_type= $_POST['purchase_type'];

  $total_purchase = count($barcode);

  for($i=0;$i<$total_purchase;$i++)
  {

     $sql_purchase = "INSERT INTO `purchase`(`supplier`, `regtype`, `state`, `gstno`, `rcm`, `purchase_date`, `purchase_type`, `bill_no`, `due_days`, `challan_no`, `invoice_type`, `barcode`, `item_name`, `design`, `size`, `color`, `p_qty`, `rate`, `mrp`, `discount`, `sell`, `wrate`, `amount`, `sgst`,`branch_id`) VALUES ('$supplier','$regtype','$state','$gst','$rcm','$purchase_date','$purchase_type','$bill_no','$due_days','$challan_no','$invoice_type','$barcode[$i]','$item_name[$i]','$design[$i]','$size[$i]','$color[$i]','$qty[$i]','$rate[$i]','$mrp[$i]','$discount[$i]','$sell[$i]','$wrate[$i]','$amount[$i]','$sgst[$i]','$branch_id[$i]')";
      mysqli_query($con,$sql_purchase);
  }

}

?>

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h4 class="mb-0">Purchase Entry</h4>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="post" id="purchase_form">
                        <div class="row">
                          <div class="col-12 mb-3">
                            <label class="form-label">Supplier</label>
                            <input type="text" class="form-control" name="supplier" placeholder="Supplier">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Reg. Type</label>
                            <input type="text" class="form-control" name="regtype" placeholder="Reg. Type">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" name="state" placeholder="State">
                          </div>
                          <div class="col-sm-8 mb-3">
                            <label class="form-label">GST No.</label>
                            <input type="text" class="form-control" name="gst" placeholder="GST No.">
                          </div>
                          <div class="col-sm-4 mb-3 pt-4 d-flex flex-wrap align-items-center justify-content-start">
                            <div class="form-check me-3">
                              <input class="form-check-input" type="checkbox" value="RCM" name="rcm" id="rcm">
                              <label class="form-check-label" for="rcm"> RCM</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="ca" value="" id="credit">
                              <label class="form-check-label" for="credit"> Credit Applicable</label>
                            </div>
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" name="purchase_date" placeholder="Purchase Date">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Purchase Type</label>
                            <select class="form-select" name="purchase_type">
                              <option selected="">Credit</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Bill No.</label>
                            <input type="text" class="form-control" placeholder="Bill No." name="bill_no">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Due Days</label>
                            <input type="date" class="form-control" placeholder="Due Days" name="due_days">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Challan No</label>
                            <input type="text" class="form-control" placeholder="Challan No" name="challan_no">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Invoice Type</label>
                            <select class="form-select" name="invoice_type">
                              <option selected="">Inventory Purchase</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          
                          <hr class="mt-4 mb-4">

                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Barcode</label>
                            <input type="text" class="form-control" placeholder="Barcode" name="barcode_generate">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Item Name</label>
                            <input type="text" class="form-control" placeholder="Item Name" name="item_name_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Design</label>
                            <input type="text" class="form-control" placeholder="Design" name="design_s">
                          </div>
                          <?php $data = get_size($con); ?>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">S - Size</label>
                            <select class="form-control" name="s_size_s">
                              <option disabled selected>Select Size</option>
                              <?php while($row = mysqli_fetch_assoc($data)) { ?>
                                <option value="<?php echo $row['size_id']; ?>"><?php echo $row['s_name']; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <?php $data = get_size($con); ?>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">E - Size</label>
                            <select class="form-control" name="e_size_s">
                              <option disabled selected>Select Size</option>
                              <?php while($row = mysqli_fetch_assoc($data)) { ?>
                                <option value="<?php echo $row['size_id']; ?>"><?php echo $row['s_name']; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Color</label>
                            <input type="text" class="form-control" placeholder="Color" name="color_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Qty</label>
                            <input type="text" class="form-control" placeholder="Qty" name="qty_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Rate</label>
                            <input type="text" class="form-control" placeholder="Rate" name="rate_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">MRP</label>
                            <input type="text" class="form-control" placeholder="MRP" name="mrp_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Discount (%)</label>
                            <input type="text" class="form-control" placeholder="Discount" name="discount_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Sell</label>
                            <input type="text" class="form-control" placeholder="Sell" name="sell_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">W. Rate</label>
                            <input type="text" class="form-control" placeholder="W. Rate" name="wrate_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Amount</label>
                            <input type="text" class="form-control" placeholder="Amount" name="amount_s">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">SGST (%)</label>
                            <input type="text" class="form-control" placeholder="SGST" name="sgst_s">
                          </div>
                           <div class="col-sm-4 mb-3">
                            <label class="form-label">Branch</label>
                            <select class="form-control" name="branch_id_s">
                              <option disabled selected>Select Branch</option>
                                <?php while($b_row = mysqli_fetch_assoc($b_data)) { ?>
                                    <option value="<?php echo $b_row['b_id']; ?>"><?php echo $b_row['b_name']; ?></option>
                                <?php } ?>
                              </select>
                          </div>
                          <div class="col-12 text-center">
                            <button type="submit" value="Send" class="btn btn-primary">Send</button>
                          </div>

                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- ajax panel -->



                  <div class="row" id="purchase_data">    
                  </div>

        

<?php include_once 'footer.php'; ?>

<script type="text/javascript">

  $(document).ready(function(){

    $('#purchase_form').submit(function(e){
        e.preventDefault();

        var form_data = $('#purchase_form').serialize();

        $.ajax({
          type:"post",
          url:"add_purchase_ajax.php",
          data:form_data,

            success:function(res){
              $('#purchase_data').html(res);
            }
        })


    })
  })
</script>

