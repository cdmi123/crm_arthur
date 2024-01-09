<?php include_once 'header.php'; ?>

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

<?php include_once 'footer.php'; ?>
