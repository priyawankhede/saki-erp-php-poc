<?php include('../inc/header.php'); ?>
<?php include('../inc/sidebar.php'); ?>

  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Product Section
                    
                </h2>
            </div>
       
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All Products
                                  <a href="../controller/add_product.php"><input type="submit" name="submit" class="btn btn-danger" value="+ Add Product" style="float: right;"></a>
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
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Product/Part Name</th>
                                            <th>Product Size</th>
                                            <th>Part Number</th>
                                            <th>Selling Price</th>
                                            <th>Quantity</th>
											<th>Operation Name</th>
											<th>Price</th>
											
                                        </tr>
                                    </thead>
                                 
                                 
                                 <tbody>
                                         <?php
                             include('../api/conn.php');
                             $sql = "select *  from product";
                             $query = mysqli_query($conn, $sql);
                             $i = 0;
                             while ($row = mysqli_fetch_array($query)) {
                                 $i++;
                                 $category_name = $row['category_name'];
                                 $product_name = $row['product_name'];
                                 $product_size = $row['product_size'];
                                 $part_number = $row['part_number'];
                                 $product_selling_price = $row['product_selling_price'];
                                 $product_quantity = $row['product_quantity'];
								 $operation_name = $row['operation_name'];
								 $price = $row['price'];
                             
                             ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $category_name; ?></td>
                                            <td><?php echo $product_name; ?></td>
                                            <td><?php echo $product_size; ?></td>
                                            <td><?php echo $part_number; ?></td>
                                            <td><?php echo $product_selling_price; ?></td>
                                            <td><?php echo $product_quantity; ?></td>
											<td><?php echo $operation_name; ?></td>
											<td><?php echo $price; ?></td>
                                            
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
