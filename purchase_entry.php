<?php include_once 'header.php'; 

function get_size($con)
{
    $sql_select_size = "select * from size";
    $sql_data = mysqli_query($con,$sql_select_size);

    return $sql_data;
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
                            <input type="text" class="form-control" placeholder="Supplier">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Reg. Type</label>
                            <input type="text" class="form-control" placeholder="Reg. Type">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="State">
                          </div>
                          <div class="col-sm-8 mb-3">
                            <label class="form-label">GST No.</label>
                            <input type="text" class="form-control" placeholder="GST No.">
                          </div>
                          <div class="col-sm-4 mb-3 pt-4 d-flex flex-wrap align-items-center justify-content-start">
                            <div class="form-check me-3">
                              <input class="form-check-input" type="checkbox" value="" id="rcm">
                              <label class="form-check-label" for="rcm"> RCM</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="credit">
                              <label class="form-check-label" for="credit"> Credit Applicable</label>
                            </div>
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" placeholder="Purchase Date">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Purchase Type</label>
                            <select class="form-select">
                              <option selected="">Credit</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Bill No.</label>
                            <input type="text" class="form-control" placeholder="Bill No.">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Due Days</label>
                            <input type="date" class="form-control" placeholder="Due Days">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Challan No</label>
                            <input type="text" class="form-control" placeholder="Challan No">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="form-label">Invoice Type</label>
                            <select class="form-select">
                              <option selected="">Inventory Purchase</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          
                          <hr class="mt-4 mb-4">

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
                          <?php $data = get_size($con); ?>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">S - Size</label>
                            <select class="form-control" name="s_size">
                              <option disabled selected>Select Size</option>
                              <?php while($row = mysqli_fetch_assoc($data)) { ?>
                                <option value="<?php echo $row['size_id']; ?>"><?php echo $row['s_name']; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <?php $data = get_size($con); ?>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">E - Size</label>
                            <select class="form-control" name="e_size">
                              <option disabled selected>Select Size</option>
                              <?php while($row = mysqli_fetch_assoc($data)) { ?>
                                <option value="<?php echo $row['size_id']; ?>"><?php echo $row['s_name']; ?></option>
                              <?php } ?>
                            </select>
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
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Sell</label>
                            <input type="text" class="form-control" placeholder="Sell">
                          </div>
                          <div class="col-sm-4 mb-3">
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

