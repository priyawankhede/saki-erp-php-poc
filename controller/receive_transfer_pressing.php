<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     
 

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Receive Transfer Section</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Receive Transfer
                               <a href="../view/view_received_transfer_all.php"><input type="submit" name="submit" class="btn btn-danger" value="View Receive Transfer" style="float: right;"></a>
                                
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
                        <div class="body">
                             <div class="row clearfix">
                            <form method="POST" action="../model/receive_pressing_data.php">
								
                           
                                <div class="col-sm-12">
                                <?php 
									
									
									// function get_brand(){
                                  // // Build up DB connection including cofiguration file
                                  // require ("../api/conn.php");
                                  // //Assign an empty variable to store the fetched items
                                  // $output = '';
                                  // //SQL query to fetch the phone brands to the input field
                                  // $sql = "select DISTINCT `product_name` from pressing";
                                  // // execution of the query. Output a boolean value
                                  // $res = mysqli_query($conn , $sql);
                                  // // Check whether there are results or not
                                  // if(mysqli_num_rows($res)>0){
                                    // while ($row = mysqli_fetch_array($res)) {
                                      // //Concatenate fetched items to the output variable with HTML option tags to display
                                      // $output .= '<option value="'.$row["product_name"].'">'.$row["product_name"].'</option>';
                                    // }
                                  // }
                                  // //return the output results to be displayed
                                  // return $output;

                                // }	
								
								function get_operation(){
                                  // Build up DB connection including cofiguration file
                                  require ("../api/conn.php");
                                  //Assign an empty variable to store the fetched items
                                  $output = '';
                                  //SQL query to fetch the phone brands to the input field
                                  $sql = "select DISTINCT `operation_name` from pressing";
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
									
                                include ('../api/conn.php');
                                $total = 0;
                                $receive_id = $_GET['id'];
                                //echo $receive_id;
                                
                                $sql = "select * from pressing where product_name = '$receive_id' limit 1";
                                $res1 = mysqli_query($conn, $sql);
                                while($res = mysqli_fetch_array($res1))
                                {
                                    $id = $res['id'];
                                    $factory_name = $res['factory_name'];
                                    $supplier_name = $res['supplier_name'];                             
                                    $sender_name = $res['sender_name']; 
                                    $product_name = $res['product_name'];   
                                    $operation_name = $res['operation_name'];
                                    $quantity = $res['quantity'];  
																	
                                ?>
								
									 <div class="form-group">
                                           <div class="form-line">
                                            <label  for="factory_name">Factory From</label><br>
                                            <input type="text" name="factory_name"  value="<?php echo $factory_name; ?>" class="form-control" readonly />
									</div>
                                    </div>
									
									 <div class="form-group">
                                           <div class="form-line">
                                            <label  for="supplier">Receive From Supplier</label><br>
                                             <input type="text" class="form-control" name="supplier_name" value="<?php echo $supplier_name; ?>" readonly />                                                                             
                                        
                                      
                                    </div><br>
									 <div class="form-group">
                                           <div class="form-line">
                                            <label  for="supplier">Supplier Challan No.</label><br>
                                             <input type="text" class="form-control" name="supplier_challan" value="" placeholder="Enter Supplier Challan No."  />                                                                                  
                                        
                                      
                                    </div>
                                    </div>
									 <div class="form-group">
                                           <div class="form-line">
                                            <label  for="supplier">Sender Name</label><br>
                                             <input type="text" class="form-control" name="sender_name" value="<?php echo $sender_name; ?>" readonly />                                                                             
                                        
                                      
                                    </div><br>
									
                                    <div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Select Product/Part Name</label><br>
                                               <input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>" readonly />
											   
											
								   </div>
                                    </div>
									
									 <div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Select Subpart Name</label><br>
                                               <!--input type="text" class="form-control" name="product_name" value="<!--?php echo $operation_name; ?>" readonly /-->
											 <select name="operation_name" class="form-control">
                                                <?php
													include('../api/conn.php');
													$sql = "select DISTINCT product_name from pressing left join pressing_details on id=pressing_id";
													$query = mysqli_query($conn, $sql);
													while($row = mysqli_fetch_array($query)){
														$product_name = $row['product_name'];
													
															
												?>
                                                <option value="<?php echo $product_name; ?>"><?php echo $product_name; ?></option>
                                                 <?php } ?>
												
												<option></option>
                                            </select>
											
								   </div>
                                    </div>
									
									
									<div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Available Quantity</label><br>
                                               <input type="text" class="form-control" name="product_name" value="" readonly />
											   
											
								   </div>
									
									
									
									 <!--div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Sub Part Name</label>
											<select name="operation_name" class="form-control" id="subpart">
											<option>--Select Part Name--</option>
											<!-?php
												echo get_operation();
											?>
											
											
											</select>
										   </div>
                                      </div>

                                      <!--div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Available Quantity</label><br>
                                           <select name="available_quantity" class="form-control" id="quantity"> 
										   <option>--Select Sub Part Name First--</option>
											</select>
                                             </div>
                                      </div>

                                       <div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Enter Quantity to receive</label>
                                            <input type="text" class="form-control" name="receive_quantity" placeholder="Enter Quantity" required />
                                        </div>
                                      </div-->
							<!--div class="col-sm-12"  style="background-color: #EEEEEE;">
								<div class="form-group">
									<table class="table table-bordered" id="dynamic_field" > 
                             
                                    <tr>  
									 <label for="operation_name" class="col-sm-4 text-left control-label col-form-label">Sub Part Name</label>
                                         <td>										
										<select name="operation_name[]" class="form-control" id="subpart">
											<option>--Select Part Name--</option>
											<!--?php
												echo get_operation();
											?-->										
											
										<!--/select>
										</td>
											
                                        <label for="quantity" class="col-sm-4 text-left control-label col-form-label">Quantity</label> 
                                         <td>											
											<select name="available_quantity[]" class="form-control" id="quantity">
												<option>--Select Part Name First-- </option>
											</select>
										 </td>  
										 
										 <label for="quantity" class="col-sm-4 text-left control-label col-form-label">Receive Quantity</label>   
                                         <td>										
											 <input type="text" class="form-control" name="receive_quantity[]" value="" id="receive_quantity" />                                                                         
                                                                            
										 </td>  
										
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
									</table>  
								</div>																									
                            </div-->
							
							<!--div class="col-sm-12"  style="background-color: #EEEEEE;">
									<div class="form-group">
										<table class="table table-bordered" id="dynamic_field"> 
                             
                                    <!--tr>  
									<label for="operation_name" class="col-sm-4 text-right control-label col-form-label">Sub Part Name</label>
                                         <td><input type="text" name="operation_name"  value="<!--?php echo $operation_name; ?>"  placeholder="" class="form-control name_list" readonly /></td>
                                         <label for="quantity" class="col-sm-4 text-right control-label col-form-label">Quantity</label> 
                                         <td><input type="text" name="available_quantity" placeholder="Enter Quantity"  value="<!--?php echo $quantity; ?>"  class="form-control name_list" readonly /></td>  
                                         
                                    </tr> 
									
									
									</table>  
									</div>																									
                            </div-->
									  							 


                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="submit" class="btn btn-danger form-control" name="receive_transfer_pressing" value="RECEIVE TRANSFER"/> 
                                        </div>
                                    </div>
                               
								</div>
							
						   </div>
                            <?php } ?>
                            </div>
								
                            </form>
							
                       
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
	
	<script type="text/javascript">
  // start jQuery function to load the content of all functions after the page is loaded completely
  $(document).ready(function(){
    //jQuery function to get the value changed in the input field

	$('#name').change(function(){
      //Store the selected input value in vendor_name variable
      var product_name = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "../controller/fetch_model10.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {product_name:product_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          console.log(data);
          $('#subpart').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });  
	   
      // end Ajax call to get the suggestions
    });
	
	// $('#subpart').change(function(){
      // //Store the selected input value in vendor_name variable
      // var operation_name = $(this).val();
      // // start Ajax call to get the models belongs to a particular vendor_name
      // $.ajax({
        // url: "../controller/fetch_model9.php",   //Path for PHP file to fetch phone models from DB
        // method: "POST",       //Fetching method
        // data: {operation_name:operation_name},  //Data send to the server to get the results
        // success:function(data)    //If data fetched successfully from the server, execute this function
        // {
          // console.log(data);
          // $('#quantity').html(data);  //Print the fetched models in the section wih ID - #item
        // }
      // });  
	   
      // // end Ajax call to get the suggestions
    // });



  });
</script>
