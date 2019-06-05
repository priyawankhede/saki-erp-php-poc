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
                                  <a href="../controller/create_transfer.php"><input type="submit" name="submit" class="btn btn-danger" value="+ Create Transfer" style="float: right;"></a>
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
									<?php
        include("config.php");
        $receive_id=$_GET['product_name'];
        ?>
                                        <tr>
                                            <th>Challan No.</th>
                                            <th>Factory Name</th>
                                            <th>Supplier Name</th>
                                            <th>Product/Part Name</th>
                                            <th>Operation Name</th>
                                            <th>Available Quantity</th>
                                            <th> Transfer Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                 
                                 
                                 <tbody>
                                         <?php
                             include('../api/conn.php');
							 $receive_id=$_GET['product_name'];
                             $sql = "select * from receive_transfer_history where supplier_name='$receive_id' ORDER BY id DESC limit 1";
                             $query = mysqli_query($conn, $sql);
                             $i = 0;
                             while ($row = mysqli_fetch_array($query)) {
                                 $i++;
								 
                                 $factory_name = $row['factory_name'];
                                 $supplier_name = $row['supplier_name'];
                                 $product_name = $row['product_name'];
                                 $available_quantity = $row['available_quantity'];
                                 $transfer_quantity = $row['transfer_quantity'];
                             
                             ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $factory_name; ?></td>
                                            <td><?php echo $supplier_name; ?></td>
                                            <td><?php echo $product_name; ?></td>
                                            <td><?php echo $available_quantity; ?></td>
                                            <td><?php echo $transfer_quantity; ?></td>
                                            <td>
												<a href="../controller/receive_transfer.php?id=<?php echo $product_name; ?>"><input type="submit" class="btn btn-danger" value="Receive Transfer"></a> 
                                                
                                                
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
