<?php include_once 'header.php'; 

    $select_size_query = "select * from size";
    $size_data = mysqli_query($con,$select_size_query);

?>


            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form id="size_form">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">size</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="size" placeholder="Size Name" autofocus id="size_name" required/>
                          </div>
                          <div class="col-sm-2">
                            <input type="submit" class="btn btn-primary" value="Add">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
                 <div class="card">
                <h5 class="card-header">View Size</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Size</th>
                        <th>Code</th>
                     </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="view_size">

                      <?php while($row_size = mysqli_fetch_assoc($size_data)) {  ?>
                        <tr>
                            <td><?php echo $row_size['size_id']; ?></td>
                            <td><?php echo $row_size['s_name']; ?></td>
                            <td><?php echo $row_size['size_id']; ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- / Content -->
<?php include_once 'footer.php'; ?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#size_form").submit(function(e){
      e.preventDefault();
      
        var form_data = $("#size_form").serialize();

        $.ajax({
          type:"post",
          url:"add_size_ajax.php",
          data:form_data,

          success:function(res){
            $('#size_name').val('');
            $("#view_size").html(res);
            
          }

        })

    })
  })
</script>