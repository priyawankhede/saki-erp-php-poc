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
                               Add Product
                               <a href="../view/view_product.php"><input type="submit" name="submit" class="btn btn-danger" value="View Product" style="float: right;"></a>
                                
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
                            <form method="POST" action="../model/add_product_data.php">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                   
                                    <div class="form-group">
                                            <label  for="category_name">Select Category</label><br>
                                            <select name="category_name" class="form-control">
                                                 <?php
                                    include('../api/conn.php');
                                    $sql = "select * from category";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        $category_name = $row['category_name'];
                                    

                                    ?>
                                                <option value="<?php echo $category_name; ?>"><?php echo $category_name; ?></option>
                                                 <?php } ?>

                                            </select>
                                        
                                    </div>

                               
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label  for="product_name">Product Name</label>
                                            <input type="text" class="form-control" name="product_name" placeholder="Product Name" />
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="form-line">
                                            <label  for="product_size">Product Size</label>
                                            <input type="text" class="form-control" name="product_size" placeholder="Product size" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label  for="part_number">Product/Part Number</label>
                                            <input type="text" class="form-control" name="part_number" placeholder="Product/Part Number" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label  for="product_selling_price">Product Selling Price</label>
                                            <input type="text" class="form-control" name="product_selling_price" placeholder="Product Selling Price" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label  for="product_quantity">Product Quantity</label>
                                            <input type="text" class="form-control" name="product_quantity" placeholder="Product Quantity" />
                                        </div>
                                    </div>
									<br>
									 <div class="form-group">
										<table class="table table-bordered" id="dynamic_field"> 
                             
                                    <tr>  <label for="operation_name" class="col-sm-4 text-right control-label col-form-label">Operation Name</label>
                                         <td><input type="text" name="operation_name[]" placeholder="Operation Name" class="form-control name_list" /></td>
                                         <label for="price" class="col-sm-4 text-right control-label col-form-label">Price</label> 
                                         <td><input type="text" name="price[]" placeholder="Enter Price" class="form-control name_list" /></td>  
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
                                            <input type="submit" class="btn btn-danger form-control" name="add_product" value="ADD PRODUCT"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <h1>Excel Upload</h1>

<form method="POST" action="../model/excel_upload.php" enctype="multipart/form-data">
<div class="form-group">
<label>Upload Excel File</label>
<input type="file" name="file" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="Submit" class="btn btn-success">Upload</button>
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
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="operation_name[]" placeholder="Operation Name" class="form-control name_list" /></td><td><input type="text" name="price[]" placeholder="Enter Price" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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
