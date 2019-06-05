<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>

  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Transfer Section
                    
                </h2>
            </div>
       
            <!-- Exportable Table -->
            <div class="row clearfix" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 >
                                All Created Transfers
								
                                  <a href="../view/view_receive_pressing_all.php"><input type="submit" name="submit" class="btn btn-danger" value="View All" style="float: right;"></a>
								&nbsp;
							</h2>
							
                           <!--  <ul class="header-dropdown m-r--5">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
									
                                        <tr>
                                            <th>Chalan Number</th>
                                            <th>Factory Name</th>                                           
											 <th>Supplier Name</th>
											  <th>Supplier Challan No.</th>
											  <th>Sender Name</th>
                                            <th>Product/Part Name</th>
											 <th>Sub Part Name</th>
											
											<th>Previous Quantity</th>
                                            <th>Received Quantity</th>
                                            <th>Available Quantity</th>
                                            <th>Action</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                 
                                 
                                 <tbody>
                                         <?php
                             include('../api/conn.php');
							 
                             $sql = "SELECT * FROM receive_pressing ORDER BY id DESC LIMIT 1";
                             $query = mysqli_query($conn, $sql);
                             $i = 0;
                             while ($row = mysqli_fetch_array($query)) {
                                 $i++;
								 
                                 $factory_name = $row['factory_name'];                                
								 $supplier_challan = $row['supplier_challan'];
								  $supplier_name = $row['supplier_name'];
								  $sender_name = $row['sender_name'];
                                 $product_name = $row['product_name'];
								 $operation_name = $row['operation_name'];
                                 $available_quantity = $row['available_quantity'];
                                 $receive_quantity = $row['receive_quantity'];
								 $minus = $available_quantity-$receive_quantity;
                             
                             ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $factory_name; ?></td>                                          
											<td><?php echo $supplier_name; ?></td>
											<td><?php echo $supplier_challan; ?></td>
											<td><?php echo $sender_name; ?></td>
                                            <td><?php echo $product_name; ?></td>
											<td><?php echo $operation_name; ?></td>
                                            <td><?php echo $available_quantity; ?></td>
                                            <td><?php echo $receive_quantity; ?></td>
											<td><?php echo $minus; ?></td>
                                            <td>
												<a href="../invoice/invoice_receive_pressing.php?id=<?php echo $product_name; ?>"><input type="submit" name="bill" value="Generate Bill" class="btn btn-danger"></a><br><br> 
                                                <a href="../view/view_pressing_receive_transfer_one_history.php?id=<?php echo $product_name; ?>"><input type="submit" name="bill" value="Transfer History" class="btn btn-primary"></a> 
                                                
                                            </td>
                                            <td>
												<?php
												if($minus == 0){

												echo '<input type="button" class="btn btn-success" value="Received">';  }
												else {
													echo '<input type="button" class="btn btn-success" value="Pending">'; 
												}
												?>
											</td>
                                        </tr>   
                                           <?php } ?>   
                                                                     
                                 </tbody>
                          
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
