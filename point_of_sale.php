<?php include_once 'header.php'; ?>

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
                            <input type="text" class="form-control" name="supplier" placeholder="Supplier">
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
                            <input type="text" class="form-control" name="state" value="0.00">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Bill No.</label>
                            <input type="text" class="form-control" name="gst" value="2025">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Bill Date</label>
                            <input type="date" class="form-control" name="gst">
                          </div>
                          <div class="col-12 mb-3 d-flex align-items-end">
                              <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" value="RCM" name="rcm" id="rcm">
                                <label class="form-check-label" for="rcm"> Return Item</label>
                              </div>
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

                        <hr class="mt-4 mb-4">

                        <div class="row">
                          <div class="col-sm-1 mb-3">
                            <label class="form-label">No</label>
                            <input type="text" class="form-control" placeholder="No">
                          </div>
                          <div class="col-sm-3 mb-3">
                            <label class="form-label">Barcode</label>
                            <input type="text" class="form-control" placeholder="Barcode">
                          </div>
                          <div class="col-sm-4 mb-3">
                            <label class="form-label">Item Name</label>
                            <input type="text" class="form-control" placeholder="Item Name" name="item_name_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Size</label>
                            <input type="text" class="form-control" placeholder="Size" name="color_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Color</label>
                            <input type="text" class="form-control" placeholder="Color" name="color_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Design No.</label>
                            <input type="text" class="form-control" placeholder="Design" name="design_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Qty</label>
                            <input type="text" class="form-control" placeholder="Qty" name="qty_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Rate</label>
                            <input type="text" class="form-control" placeholder="Rate" name="rate_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Discount (%)</label>
                            <input type="text" class="form-control" placeholder="Discount" name="discount_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Net Rate</label>
                            <input type="text" class="form-control" placeholder="Net Rate" name="mrp_s">
                          </div>
                          <div class="col-sm-2 mb-3">
                            <label class="form-label">Amount</label>
                            <input type="text" class="form-control" placeholder="Amount" name="sell_s">
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
