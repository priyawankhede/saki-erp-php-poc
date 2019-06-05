<?php 
               
                                  // Build up DB connection including cofiguration file
                                  require ("../api/conn.php");
                                  //Assign an empty variable to store the fetched items
                                  $output = '';
                                  //SQL query to fetch the phone brands to the input field
                                  $sql = "SELECT * FROM product WHERE product_name = '".$_POST["product_name"]."' group by `operation_name`";
                                  // execution of the query. Output a boolean value
                                  $res = mysqli_query($conn , $sql);
                                  // Check whether there are results or not
								  $output .= '<option value="" disabled selected>-- Services --</option>';
                                  if(mysqli_num_rows($res)>0){
                                    while ($row = mysqli_fetch_array($res)) {
                                      //Concatenate fetched items to the output variable with HTML option tags to display
                                      $output .= '<option value="'.$row["operation_name"].'">'.$row["operation_name"].'</option>';
                                    }
                                  }
                                  //return the output results to be displayed
                                  echo $output;

                                

                ?>