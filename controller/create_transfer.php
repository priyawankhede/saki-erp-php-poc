<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>
 
  
 
 

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Transfer Section</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Create Transfer
                               <a href="../view/view_created_transfer.php"><input type="submit" name="submit" class="btn btn-danger" value="View Transfer" style="float: right;"></a>
                                
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
			
						
						
						<?php 
                  function get_brand(){
                                  // Build up DB connection including cofiguration file
                                  require ("../api/conn.php");
                                  //Assign an empty variable to store the fetched items
                                  $output = '';
                                  //SQL query to fetch the phone brands to the input field
                                  $sql = "select DISTINCT `product_name` from product";
                                  // execution of the query. Output a boolean value
                                  $res = mysqli_query($conn , $sql);
                                  // Check whether there are results or not
                                  if(mysqli_num_rows($res)>0){
                                    while ($row = mysqli_fetch_array($res)) {
                                      //Concatenate fetched items to the output variable with HTML option tags to display
                                      $output .= '<option value="'.$row["product_name"].'">'.$row["product_name"].'</option>';
                                    }
                                  }
                                  //return the output results to be displayed
                                  return $output;

                                }

                ?>
				
				<?php 
                  function get_product(){
                                  // Build up DB connection including cofiguration file
                                  require ("../api/conn.php");
                                  //Assign an empty variable to store the fetched items
                                  $output = '';
                                  //SQL query to fetch the phone brands to the input field
                                  $sql = "SELECT * FROM product";
                                  // execution of the query. Output a boolean value
                                  $res = mysqli_query($conn , $sql);
                                  // Check whether there are results or not
                                  if(mysqli_num_rows($res)>0){
                                    while ($row = mysqli_fetch_array($res)) {
                                      //Concatenate fetched items to the output variable with HTML option tags to display
                                      $output .= '<option value="'.$row["operation_name"].'">'.$row["operation_name"].'</option>';
                                    }
                                  }
                                  //return the output results to be displayed
                                  return $output;

                                }

                ?>  					
						
						
                        <div class="body">
                            <form method="POST" action="../model/create_transfer_data.php">
                            <div class="row clearfix">
                                <div class="col-sm-12" >
                                <div class="col-sm-6" style="background-color: #EEEEEE;" >

                                   <div class="form-group">
                                            <label  for="factory_name">Factory From</label><br>
                                            <select name="factory_name" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select * from factory";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $factory_name = $row['factory_name'];
                                    

                                    ?>
                                                <option value="<?php echo $factory_name; ?>"><?php echo $factory_name; ?></option>
                                                 <?php } ?>

                                            </select>
                                        
                                    </div>
                                    </div>
                                    <div class="col-sm-6" style="background-color: #EEEEEE;" >

                                   <div class="form-group">
                                            <label  for="supplier_name">Select Supplier</label><br>
                                            <select name="supplier_name" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select * from supplier";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $supplier_name = $row['supplier_name'];
                                    

                                    ?>
                                                <option value="<?php echo $supplier_name; ?>"><?php echo $supplier_name; ?></option>
                                                 <?php } ?>

                                            </select>
                                        
                                    </div>
                                    </div>
                                    <div class="col-sm-3" style="background-color: #EEEEEE;">
                    
                                    <div class="form-group">
                                            <label  for="product_name">Product Name</label><br>
                                            <select id="name" name="product_name" class="form-control">
                                    <!--?php
                                    include('../api/conn.php');
                                    $sql = "select DISTINCT  `product_name`  from product";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $product_name = $row['product_name'];
                                    

                                    ?>
                                                <option value="<?php echo $product_name; ?>"><?php echo $product_name; ?></option>
                                                 <!--?php } ?-->
											 <option value="">-- Product/Part Name --</option>
											<?php
												echo get_brand();
											?> 
                                          
                                            </select>
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-3" style="background-color: #EEEEEE;">
                    
                                    <div class="form-group">
                                            <label  for="part_number">Part Number</label><br>
                                            <select name="part_number"  id="no" class="form-control">
											<option> </option>
                                                 <!--?php
                                    include('../api/conn.php');
                                    $sql = "select * from product";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $part_number = $row['part_number'];
                                    

                                    ?>
                                                <option value="<!--?php echo $part_number; ?-->"><!--?php echo $part_number; ?--></option>
                                                 <!--?php } ?-->

                                            </select>
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-3"  style="background-color: #EEEEEE;">
                                    <div class="form-group">
                                            <label  for="operation_name">Operation Name</label><br>
                                            <select name="operation_name" id="item" class="form-control">
											
											<option>
											<?php echo get_product(); ?>
											</option>
											
                                                 <!--?php
                                    include('../api/conn.php');
                                    $sql = "select * from operation";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $operation_name = $row['operation_name'];
                                    

                                    ?>
                                                <option value="<!--?php echo $operation_name; ?>"><!--?php echo $operation_name; ?></option>
                                                 <!--?php } ?-->

                                            </select>
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-3"  style="background-color: #EEEEEE;">
                                    <div class="form-group">
                                            <label  for="price">Operation Price</label><br>
                                            <select name="price" class="form-control" id="item1">
                                                 <!--?php
                                    include('../api/conn.php');
                                    $sql = "select * from operation";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $price = $row['price'];
                                    

                                    ?>
                                                <option value="<!--?php echo $price; ?>"><!--?php echo $price; ?></option>
                                                 <!--?php } ?-->

                                            </select>
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-3" style="background-color: #EEEEEE;">

                                   <div class="form-group">
                                            <label  for="sender_name">Select Sender</label><br>
                                            <select name="sender_name" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select * from sender";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $sender_name = $row['sender_name'];
                                    

                                    ?>
                                                <option value="<?php echo $sender_name; ?>"><?php echo $sender_name; ?></option>
                                                 <?php } ?>

                                            </select>
                                        
                                    </div>
                                    </div>
                                    <div class="col-sm-3"  style="background-color: #EEEEEE;">
                                    <div class="form-group">
                                            <label  for="transportation">Transportation Mode</label><br>
                                            <select name="transportation" class="form-control">
                                                 
                                                <option value="Road">Road</option>
                                                <option value="Air">Air</option>
                                                <option value="Ship">Ship</option>
                                                

                                            </select>
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-6"  style="background-color: #EEEEEE;">
                                    <div class="form-line form-group">
                                            <label  for="vehicle_number">Vehicle Number</label>
                                            <input type="text" class="form-control" name="vehicle_number" placeholder="Vehicle Number" />
                                        </div>
                                    </div>
									
									<!--div class="col-sm-4"  style="background-color: #EEEEEE;">
                                    <div class="form-line form-group">
                                            <label  for="quantity">Quantity</label>
                                            <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity" />
                                        </div>
                                    </div-->

                                  <div class="col-sm-12" style="background-color: #EEEEEE;">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           
                                            <label  for="quantity">Quantity </label>
                                       
                                            <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity" />
                                        </div>
                                    </div>
                                    </div>
                                    
								  </div>





                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="submit" class="btn btn-danger form-control" name="create_transfer" value="CREATE TRANSFER"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
	
	
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js >
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script-->

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>


<!--script type="text/javascript">
  // start jQuery function to load the content of all functions after the page is loaded completely
  $(document).ready(function(){
    //jQuery function to get the value changed in the input field
    $('#brand').change(function(){
      //Store the selected input value in vendor_name variable
      var product_name = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "fetch_model3.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {product_name:product_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#item').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
      // end Ajax call to get the suggestions
    });


    $('#item').change(function(){
      //Store the selected input value in vendor_name variable
      var part_number = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "fetch_model3.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {part_number:part_number},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#item1').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
      // end Ajax call to get the suggestions
    });

  });
</script--> 


<script type="text/javascript">
  // start jQuery function to load the content of all functions after the page is loaded completely
  $(document).ready(function(){
    //jQuery function to get the value changed in the input field
   

    $('#name').change(function(){
      //Store the selected input value in vendor_name variable
      var product_name = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "../controller/fetch_model3.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {product_name:product_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#no').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
	  $.ajax({
        url: "../controller/fetch_model5.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {product_name:product_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#item').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
      // end Ajax call to get the suggestions
    });

	 $('#item').change(function(){
      //Store the selected input value in vendor_name variable
      var operation_name = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "../controller/fetch_model4.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {operation_name:operation_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          console.log(data);
          $('#item1').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
	  
	   
      // end Ajax call to get the suggestions
    });



  });
</script>
</body>
</html>
