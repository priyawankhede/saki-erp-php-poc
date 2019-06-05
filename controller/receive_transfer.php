<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>
 

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
                            <form method="POST" action="../model/receive_transfer_data.php">
								<?php 
								include ('../api/conn.php');
								$total = 0;
								$receive_id = $_GET['id'];
								//echo $receive_id;
								
								$sql = "select * from create_transfer where product_name = '$receive_id'";
								$res1 = mysqli_query($conn, $sql);
								while($res = mysqli_fetch_array($res1))
								{
									$id = $res['id'];
									$factory_name = $res['factory_name'];
									$product_name = $res['product_name'];
									$supplier_name = $res['supplier_name'];
									$quantity = $res['quantity'];
									$price = $res['price'];
														
														
								
								?>
                            <div class="row clearfix">
                                <div class="col-sm-12">
								
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
                                            <label  for="product_name">Select Product/Part Name</label><br>
                                               <input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>" readonly />
                                    </div>
                                    </div>
									
									 <div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Price</label>
                                            <input type="text" class="form-control" name="price" placeholder="price" value="<?php echo $price; ?>" readonly />
                                        </div>
                                      </div>

                                      <div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Available Quantity</label><br>
                                             <input type="text" class="form-control" name="available_quantity" value="<?php echo $quantity; ?>" readonly />
                                                                                                             
                                             </div>
                                      </div>

                                       <div class="form-group">
                                           <div class="form-line">
                                            <label  for="product_name">Enter Quantity to receive</label>
                                            <input type="text" class="form-control" name="receive_quantity" placeholder="Enter Quantity" required />
                                        </div>
                                      </div>
									  
									 


                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <a  href="../view/view_received_transfer_one.php" > <input type="submit" class="btn btn-danger form-control" name="receive_transfer" value="RECEIVE TRANSFER"/> </a>
                                        </div>
                                    </div>
                               
								</div>
							
						   </div>
								 <?php } ?>
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
