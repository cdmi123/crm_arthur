<?php include_once 'header.php'; $today_date = date("Y-m-d"); ?>

	 <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h4 class="mb-0">Point Of Sale</h4>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="post" id="purchase_form">

                        <div class="row g-2">
                          <div class="col-sm-3 mb-3">
                            <label class="form-label">Barcode</label>
                            <input type="text" id="c_barcode" class="form-control" name="supplier" placeholder="Barcode">
                          </div>                         
                          <div class="col-sm-3 mb-3">
                            <label class="form-label">Branch</label>
                            <select class="form-select" name="purchase_type">
                              <option selected="">Atlantic Arthur</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Discount (%)</label>
                            <input type="text" class="form-control" name="state" value="0.00" id="discount_product">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Bill No.</label>
                            <input type="text" class="form-control" name="bill_no" value="2025">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Bill Date</label>
                            <input type="date" class="form-control" name="bill_date" id="today_date" value="<?php echo @$today_date; ?>">
                          </div>
                          <div class="col-12 mb-3 d-flex align-items-end">
                              <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" value="RCM" name="rcm" id="rcm">
                                <label class="form-check-label" for="rcm"> Return Item</label>
                              </div>
                          </div>
                        </div>
                         <hr >

                        <div class="row">
                          <div class="col-sm-1 mb-3">
                            <label class="form-label">No</label>
                            <input type="text" class="form-control" placeholder="No" id="no" value="1">
                          </div>
                          <div class="col-sm-3 mb-3">
                            <label class="form-label">Barcode</label>
                            <input type="text" class="form-control" placeholder="Barcode" id="barcode">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Item Name</label>
                            <input type="text" class="form-control" placeholder="Item Name" name="item_name_s" id="item_name">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Size</label>
                            <input type="text" class="form-control" placeholder="Size" name="color_s" id="size">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Color</label>
                            <input type="text" class="form-control" placeholder="Color" name="color_s" id="color">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Design No.</label>
                            <input type="text" class="form-control" placeholder="Design" name="design_s" id="design">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Qty</label>
                            <input type="text" class="form-control" placeholder="Qty" name="qty_s" id="qty">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Rate</label>
                            <input type="text" class="form-control" placeholder="Rate" name="rate_s" id="rate">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Discount (%)</label>
                            <input type="text" class="form-control" placeholder="Discount" name="discount_s" id="discount">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Net Rate</label>
                            <input type="text" class="form-control" placeholder="Net Rate" name="mrp_s" id="net_rate">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Amount</label>
                            <input type="text" class="form-control" placeholder="Amount" name="sell_s" id="amount">
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="col-md-6 p-3">
                            <fieldset class="border p-3">
                              <legend class="float-none w-auto fs-5 fw-bold px-2">Customer Detail</legend>
                              <div class="row">
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Customer Name</label>
                                  <input type="text" class="form-control" name="purchase_date" placeholder="Customer Name">
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Mobile No.</label>
                                  <input type="text" class="form-control" name="purchase_date" placeholder="Mobile No.">
                                </div>
                                <div class="col-sm-4 mb-3">
                                  <label class="form-label">Net Ledger</label>
                                  <input type="text" class="form-control" name="purchase_date" readonly disabled>
                                </div>
                                <div class="col-sm-4 mb-3">
                                  <label class="form-label">Last Visit On</label>
                                  <input type="text" class="form-control" name="purchase_date" readonly disabled>
                                </div>
                                <div class="col-sm-4 mb-3">
                                  <label class="form-label">Yearly Sales</label>
                                  <input type="text" class="form-control" name="purchase_date" readonly disabled>
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Print Name</label>
                                  <input type="text" class="form-control" name="purchase_date" placeholder="Customer Name">
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Sales A/C</label>
                                  <input type="text" class="form-control" name="purchase_date" placeholder="Sales A/C">
                                </div>
                                <div class="col-sm-12 mb-3">
                                  <label class="form-label">Notes</label>
                                  <textarea class="form-control" rows="2"></textarea>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                          <div class="col-md-6 p-3">
                            <fieldset class="border p-3">
                              <legend class="float-none w-auto fs-5 fw-bold px-2">Additional Detail</legend>
                              <div class="row">
                                <div class="col-sm-12 mb-3">
                                  <label class="form-label">Sales Man</label>
                                  <input type="text" class="form-control" name="purchase_date" placeholder="Customer Name">
                                </div>
                                <div class="col-sm-12 mb-3">
                                  <label class="form-label">Order No.</label>
                                  <input type="text" class="form-control" name="purchase_date" placeholder="Mobile No.">
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Invoice Type</label>
                                  <select class="form-select" name="purchase_type">
                                    <option selected="">Retail</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Due Date</label>
                                  <input type="date" class="form-control" name="due_days">
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Trial Date</label>
                                  <input type="date" class="form-control"  name="due_days">
                                </div>
                                <div class="col-sm-6 mb-3">
                                  <label class="form-label">Delivery Date</label>
                                  <input type="date" class="form-control"  name="due_days">
                                </div>
                                
                              </div>
                            </fieldset>

                          </div>
                        </div>
                         <div class="col-12 text-center">
                            <button type="submit" value="Send" class="btn btn-primary">Send</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php include_once 'footer.php'; ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('#c_barcode').on('input',function(){
        var barcode = $(this).val();

        $.ajax({
          type:"post",
          url:"buy_ajax.php",
           dataType: 'JSON',
          data:{"barcode":barcode},
          

          success:function(res)
          {
            $('#barcode').val(res.barcode);
            $('#item_name').val(res.item_name);
            $('#size').val(res.size);
            $('#color').val(res.color);
            $('#design').val(res.design);
            $('#qty').val(1);
            $('#rate').val(res.rate);
            $('#discount').val(res.discount);
            $('#net_rate').val(res.net_rate);
            $('#amount').val(res.amount);
            $('#discount_product').val(res.discount);

          }
        })
    })
  })
</script>
