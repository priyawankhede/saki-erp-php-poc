<?php include('viewnav.php'); ?>
    <div id="wrapper">
<?php include('viewsidebar.php'); ?>


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Receive Transfer</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Receive Transfers</div>
            <div class="card-body">
              <div class="table-responsive">
               

             <form method="POST" action="">
               <?php
                    include ('config.php');
                    $total = 0;
                    $receive_id=$_GET['receive'];
                $sql = "SELECT * FROM create_transfers where id='$receive_id'";
                $res1 = mysqli_query($conn, $sql);
                  while($res = mysqli_fetch_array($res1))
                  {
                    $id=$res['id'];
                    $part_name=$res['part_name'];
                    $factory_from=$res['factory_from'];
                    $part_number=$res['part_number'];
                    $supplier_name=$res['supplier_name'];
                    $quantity=$res['quantity'];
                    $service_price=$res['service_price'];
                    $total= $quantity*$service_price;
                    // $description=$res['description'];
              ?>
               
                <h3 class="ml-4">Receive Transfer</h3><br>
                
                
      <div class="form-group">
        <label for="brand">Factory From</label>
        <input type="text" class="form-control" value="<?php echo $factory_from ?>" name="factory_from" readonly> 
      </div>

      <div class="form-group">
        <label for="brand">Receive from Supplier</label>
        <input type="text" class="form-control" value="<?php echo $supplier_name ?>" name="supplier_name" readonly> 
      </div>
          
          <div class="form-group">
        <label for="item">Part Name</label>
       <input type="text" class="form-control" value="<?php echo $part_name = $part_number ?>" name="part_name" or name="part_number" readonly> 
        </div>  

        <div class="form-group">
        <label for="item">Available Quantities for this Parts</label>
        <input type="text" id="item1" class="form-control" value="<?php echo $quantity ?>" name="available_quantity" readonly>  
        </div>

         <div class="form-group">
        <label for="item">Please Enter Quantity to Receive</label>
        <input type="number" class="form-control" id="item2" name="received_quantity" min="0">
      <!--   <input type="text" name="received_quantity" id="item2" min="0"  onkeypress="return blockSpecialChar(event)" class="form-control" required="true">
        -->
        </div>

        <input type="submit" class="btn btn-success form-control" onkeypress="c()" name="submit" value="RECEIVE">
      <?php } ?>
      </form>

        


           

              </div>
            </div>
            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
          </div>

          <p class="small text-center text-muted my-5">
            <!-- <em>More table examples coming soon...</em> -->
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <!-- <span>Copyright © Your Website 2018</span> -->
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>





    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

   <!--  <script>
function validate() {
if ($("#item1").val() > $("#item2").val()) {
    
    // alert("item1 field > item2");
} else {
    alert("Please Enter value below or equal to available quantity");
}
}
</script> -->

    <script>
    function singleSelectChangeText() {
        //Getting Value
        

        var selObj = document.getElementById("singleSelectTextDDJS");
        var selValue = selObj.options[selObj.selectedIndex].text;
        
        //Setting Value
        document.getElementById("textFieldTextJS").value = selValue;
    }
    </script>

    <!-- start jQuery function -->
<script type="text/javascript">
  // start jQuery function to load the content of all functions after the page is loaded completely
  $(document).ready(function(){
    //jQuery function to get the value changed in the input field
    $('#brand').change(function(){
      //Store the selected input value in vendor_name variable
      var vendor_name = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "fetch_model.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {vendor_name:vendor_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#item').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
      // end Ajax call to get the suggestions
    });


    $('#item').change(function(){
      //Store the selected input value in vendor_name variable
      var part_name = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "fetch_model1.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {part_name:part_name},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#item1').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
      // end Ajax call to get the suggestions
    });





  });
</script> 
<!-- end jQuery function -->

 <script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
    <script>

      function compare(){
        var a = document.getElementById("item1");
        var b = document.getElementById("item2");

        if (a.options[a.selectedIndex].value == b.options[b.selectedIndex].value) {
            window.alert("sometext");
        } else {
            // Do other stuff
        }
      }

function c(){
 $(document).ready(function () {
   var n = $("#item1").val();
    var m = $("#item2").val();

    if(parseInt(n) > parseInt(m)) {
        alert("Alert!");
    }
});
}


    </script>

  </body>

</html>


<?php

include 'config.php';

if(isset($_POST['submit']))
{  

    $available_quantity=$_POST['available_quantity'];
    $received_quantity=$_POST['received_quantity'];
    if($available_quantity >= $received_quantity){

    
    $factory_from=$_POST['factory_from'];
    $supplier_name=$_POST['supplier_name'];
    $part_name=$_POST['part_name'];
    $available_quantity=$_POST['available_quantity'];
    $received_quantity=$_POST['received_quantity'];
    $minus = $available_quantity - $received_quantity;
    
     // echo $minus; die;


    $update = "UPDATE create_transfers SET quantity = $minus WHERE quantity = $available_quantity";
    mysqli_query($conn,$update);
    $insert_transfer="insert into main_received_transfers(supplier_name,part_name,available_quantity,received_quantity) VALUE ('$supplier_name','$part_name','$available_quantity','$received_quantity')";
   if( mysqli_query($conn,$insert_transfer)){
		$message="Received Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo"<script>window.open('receive_transfer_history_one.php?supplier_name=$supplier_name','_self')</script>";
}


    $insert_transfer1="insert into receive_transfer_history (factory_from,supplier_name,part_name,available_quantity,received_quantity,price) VALUE ('$factory_from','$supplier_name','$part_name','$available_quantity','$received_quantity','$price')";
    mysqli_query($conn,$insert_transfer1);

//header('location: invoice1.php?invoice=<?php echo $id; ')
 echo"<script>window.open('received_transfer_history.php','_self')</script>";

     }else{
      $message = "Please Enter value below or equal to available quantity";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
   
  


}

?>
