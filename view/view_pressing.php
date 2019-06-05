<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     
 

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
                               Create Transfer For Pressing
                               <a href="../view/view_transfer_pressing.php"><input type="submit" name="submit" class="btn btn-danger" value="View Transfer" style="float: right;"></a>
                                
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
                                  //SQL query to fetch the phone brands to the input field  'select DISTINCT `product_name` from product '
								  //SELECT DISTINCT product.product_name FROM  `product` , pressing_return WHERE product.product_name = pressing_return.product_name 
                                  $sql = "select DISTINCT `product_name` from pressing_return";
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
                                  $sql = "SELECT * FROM pressing";
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
                            <form method="POST" action="../model/transfer_pressing_data.php">
							
							 <?php
        include("../api/conn.php"); 
        $receive_id=$_GET['id'];
       
        $view_machine_query="select * from pressing where product_name='$receive_id'";//select query for viewing machine.
        $run=mysqli_query($conn,$view_machine_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
								
                                 $factory_name = $row['factory_name'];
                                 $supplier_name = $row['supplier_name'];
                                 $product_name = $row['product_name'];
                                 $part_number = $row['part_number'];
                                 $operation_name = $row['operation_name'];
								 $quantity = $row['quantity'];
                                 $price = $row['price'];
                                 $sender_name = $row['sender_name'];
                                 $transportation = $row['transportation'];
                                 $vehicle_number = $row['vehicle_number'];

        ?>
							
							
							
                            <div class="row clearfix">
                                <div class="col-sm-12" >
                                <div class="col-sm-6" style="background-color: #EEEEEE;" >

                                   <div class="form-group">
                                            <label  for="factory_name">Factory From</label><br>
                                            <input type="text" required name="factory_name" value="<?php echo $factory_name; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                    </div>
                                    </div>
                                    <div class="col-sm-6" style="background-color: #EEEEEE;" >

                                   <div class="form-group">
                                            <label  for="supplier_name">Select Supplier</label><br>
                                           <input type="text" required name="supplier_name" value="<?php echo $supplier_name; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                        
                                    </div>
                                    </div>
                                    <div class="col-sm-6" style="background-color: #EEEEEE;">
                    
                                    <div class="form-group">
                                            <label  for="product_name">Product Name</label><br>
                                             <input type="text" required name="product_name" value="<?php echo $product_name; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-6" style="background-color: #EEEEEE;">
                    
                                    <div class="form-group">
                                            <label  for="part_number">Part Number</label><br>
                                            <input type="text" required name="part_number" value="<?php echo $part_number; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                        
                                    </div>
                                    </div>

                                    <!--div class="col-sm-3"  style="background-color: #EEEEEE;">
                                    <div class="form-group">
                                            <label  for="operation_name">Operation Name</label><br>
                                            <select name="operation_name" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select * from operation";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $operation_name = $row['operation_name'];
                                    

                                    ?>
                                                <option value="<?php echo $operation_name; ?>"><?php echo $operation_name; ?></option>
                                                 <?php } ?>

                                            </select>
                                        
                                    </div>
                                    </div-->
									
									
                                    <!--div class="form-group">
                                            <label  for="subpart">SubPart</label><br>
											
											 <select name="operation_name" id="subpart" class="form-control">
                                                <option> </option>
                                            </select>
                                        
                                    </div>
                                    </div>
									
									<div class="col-sm-6"  style="background-color: #EEEEEE;">
                                    <div class="form-line form-group">
                                            <label  for="vehicle_number"> Subpart Quantity</label>
                                            <input type="text" class="form-control" name="quantity[]" placeholder="Enter Subpart Quantity" />
                                        </div-->
									
									
									
									
									
                                    <div class="col-sm-6"  style="background-color: #EEEEEE;">
                                    <div class="form-group">
                                            <label  for="price">Operation Price</label><br>
											  <input type="text" required name="price" value="<?php echo $price; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                            <!--select name="price" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select * from operation";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $price = $row['price'];
                                    

                                    ?>
                                                <option value="<?php echo $price; ?>"><?php echo $price; ?></option>
                                                 <?php } ?>

                                            </select-->
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-6" style="background-color: #EEEEEE;">

                                   <div class="form-group">
                                            <label  for="sender_name">Select Sender</label><br>
                                             <input type="text" required name="sender_name" value="<?php echo $sender_name; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                        
                                    </div>
                                    </div>
                                    <div class="col-sm-6"  style="background-color: #EEEEEE;">
                                    <div class="form-group">
                                            <label  for="transportation">Transportation Mode</label><br>
                                             <input type="text" required name="transportation" value="<?php echo $transportation; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                        
                                    </div>
                                    </div>

                                    <div class="col-sm-6"  style="background-color: #EEEEEE;">
                                    <div class="form-line form-group">
                                            <label  for="vehicle_number">Vehicle Number</label>
                                            <input type="text" required name="vehicle_number" value="<?php echo $vehicle_number; ?>" class="form-control" id="fname" placeholder=" Enter Product Name" readonly>
                                        
                                        </div>
                                    </div>
									
									<!--div class="col-sm-6"  style="background-color: #EEEEEE;">
                                    <div class="form-line form-group">
                                            <label  for="quantity">Quantity</label>
                                            <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity" />
                                        </div>
                                    </div-->

                                  <!--div class="col-sm-12" style="background-color: #EEEEEE;">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <?php
                                    include('../api/conn.php');
                                    $sql = "select * from product";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $product_quantity = $row['product_quantity'];
                                    

                                    ?>
                                            <label  for="factory_name">Available Quantity For this Product</label>
                                       
                                            <input type="text" class="form-control" name="available_quantity" value="<?php echo $product_quantity; ?>"readonly /><?php }?>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label  for="factory_location">Enter Transfer Quantity </label>
                                            <input type="text" class="form-control" name="transfer_quantity" placeholder="Enter Transfer Quantity" />
                                        </div>
                                    </div>
                                </div>
                                </div>                                </div>
                            </div-->
							
							<div class="col-sm-12"  style="background-color: #EEEEEE;">
									<div class="form-group">
										<table class="table table-bordered" id="dynamic_field"> 
                             
                                    <tr>  <label for="operation_name" class="col-sm-4 text-right control-label col-form-label">Sub Part Name</label>
                                         <td><input type="text" name="operation_name[]"  value="<?php echo $operation_name; ?>"  placeholder="Enter Sub Part Name" class="form-control name_list" readonly /></td>
                                         <label for="price" class="col-sm-4 text-right control-label col-form-label">Quantity</label> 
                                         <td><input type="text" name="quantity[]" placeholder="Enter Quantity"  value="<?php echo $quantity; ?>"  class="form-control name_list" readonly /></td>  
                                         
                                    </tr>  
									</table>  
									</div>																									
                            </div>
							
							

                            <!--div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="submit" class="btn btn-danger form-control" name="create_transfer_pressing" value="CREATE TRANSFER"/>
                                        </div>
                                    </div>
                                </div>
                            </div-->
		<?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
	
	<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="operation_name[]" placeholder="Operation Name" class="form-control name_list" /></td><td><input type="text" name="quantity[]" placeholder="Enter Quantity" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

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
        url: "../controller/fetch_model8.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {product_name:product_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#subpart').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
      // end Ajax call to get the suggestions
    });


   // $('#item').change(function(){
      //Store the selected input value in vendor_name variable
     // var part_number = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
     // $.ajax({
       // url: "fetch_model3.php",   //Path for PHP file to fetch phone models from DB
        //method: "POST",       //Fetching method
       // data: {part_number:part_number},  //Data send to the server to get the results
       // success:function(data)    //If data fetched successfully from the server, execute this function
       // {
          // console.log(data);
         // $('#item1').html(data);  //Print the fetched models in the section wih ID - #item
        //}
      //});
      // end Ajax call to get the suggestions
    //});

  });
</script> 





</body>
</html>
