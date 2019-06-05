
   <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <?php
                    include('api/conn.php');
                    $email = $_SESSION['email'];
                    $sql = "select * from admin_users where email='$email'";
                    $query = mysqli_query($conn,$sql);
                    if($row = mysqli_fetch_array($query)){
                        $email = $row['email'];
                    }
                    ?>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                    <div class="email"><?php echo $email; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li> -->
                            <li><a href="api/logout.php"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                 
                    <li>
                        <a href="view/view_factories.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Factory</span>
                        </a>
                    <!--     <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Factory</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/cards/basic.php">Add Factory</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/cards/colored.php">View Factory</a>
                                    </li>
                                    
                                </ul>
                            </li>
                          
                        </ul> -->
                    </li>
					
					 <li>
                        <!--a href="../controller/create_transfer.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Transfer</span-->
							 <a href="javascript:void(0);" class="menu-toggle">
								<i class="material-icons">widgets</i>
                                    <span>Transfer</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="controller/create_transfer.php">Create Transfer</a>
                                    </li>
                                    <li>
                                        <a href="controller/create_transfer_pressing.php">Create Transfer for Pressing</a>
                                    </li>
									 <li>
                                        <a href="controller/add_pressing_return.php">Pressing Return</a>
                                    </li>
                                    
                                </ul>
                        <!--/a-->
                    </li>
					
					 <li>
                        <!--a href="../controller/create_transfer.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Transfer</span-->
							 <a href="javascript:void(0);" class="menu-toggle">
								<i class="material-icons">widgets</i>
                                    <span>View Transfer</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="view/view_created_transfer.php">View Created Transfer</a>
                                    </li>
                                    <li>
                                        <a href="view/view_transfer_pressing.php">View Pressing Transfer</a>
                                    </li>
									 <li>
                                        <a href="view/view_received_transfer_all.php">View Receive Transfer</a>
                                    </li>
									<li>
                                        <a href="view/view_transfer_pressing.php">View Receive Transfer Pressing</a>
                                    </li>
                                    
                                </ul>
                        <!--/a-->
                    </li>
               
                     <li>
                        <a href="view/view_categories.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="view/view_product.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Product</span>
                        </a>
                    </li>
                    <!--li>
                        <a href="controller/add_operation.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Operation</span>
                        </a>
                    </li-->
                   
                    <!--li>
                         <a href="javascript:void(0);" class="menu-toggle">
								<i class="material-icons">widgets</i>
                                    <span>Receive Transfer</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="controller/receive_transfer.php">Receive Transfer</a>
                                    </li>
                                    <li>
                                        <a href="controller/receive_transfer_pressing.php">Receive Transfer for Pressing</a>
                                    </li>
                                    
                                </ul>
                    </li-->
                    <li>
                        <a href="view/view_sender.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Sender</span>
                        </a>
                    </li>
                    <li>
                        <a href="view/view_supplier.php" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Supplier</span>
                        </a>
                    </li>
					
					
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!--div class="legal">
                <div class="copyright">
                    &copy; <a href="www.dotapk.in">Dotapk Developers</a>.
                </div>
               
            </div-->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>