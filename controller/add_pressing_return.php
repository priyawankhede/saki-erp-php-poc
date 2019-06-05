<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     
 

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Product Section</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Add Pressing Return Parts
                               <a href="../view/view_pressing_return.php"><input type="submit" name="submit" class="btn btn-danger" value="View Parts" style="float: right;"></a>
                                
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
                            <form method="POST" action="../model/pressing_return_data.php">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                   
                                    <div class="form-group">
                                            <label  for="category_name">Select Product Name</label><br>
                                            <select name="product_name" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select DISTINCT `product_name` from product";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $product_name = $row['product_name'];
                                    

                                    ?>
                                                <option value="<?php echo $product_name; ?>"><?php echo $product_name; ?></option>
                                                 <?php } ?>

                                            </select>
                                        
                                    </div>

								 </div>
                                   
                                     
								  <div class="col-sm-12">
									 <div class="form-group">
										<table class="table table-bordered" id="dynamic_field"> 
                             
                                    <tr>  <label for="operation_name" class="col-sm-3 text-right control-label col-form-label">Sub Part Name</label>
                                         <td><input type="text" name="operation_name[]" placeholder="Enter Sub Part Name" class="form-control name_list" /></td>
                                         <label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label> 
                                         <td><input type="text" name="quantity[]" placeholder="Enter Price" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
									</table>  
									 </div>
								  </div>
                               
                            </div>
							
							
							

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="submit" class="btn btn-danger form-control" name="pressing_return" value="ADD PARTS"/>
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

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

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
</body>
</html>
