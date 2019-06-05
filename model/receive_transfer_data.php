<?php
include('../api/conn.php');
if(isset($_POST["receive_transfer"]))
{
	$available_quantity=$_POST['available_quantity'];
	 $receive_quantity=$_POST['receive_quantity'];

	if($available_quantity >= $receive_quantity)
	{
		
	  $factory_name=$_POST['factory_name'];
	  $supplier_name=$_POST['supplier_name'];
	  $supplier_challan=$_POST['supplier_challan'];
	  $product_name=$_POST['product_name'];
	 $available_quantity=$_POST['available_quantity'];
	 $receive_quantity=$_POST['receive_quantity'];
	 $price=$_POST['price'];
	 $minus = $available_quantity-$receive_quantity;

	 $update = "UPDATE create_transfer SET quantity = $minus WHERE quantity = $available_quantity";
	 mysqli_query($conn,$update);
 
	 $sql = "INSERT INTO receive_transfer (`factory_name`,`supplier_name`,`supplier_challan`,`product_name`,`available_quantity`,`receive_quantity`,`price`) VALUES
	 ('$factory_name','$supplier_name','$supplier_challan','$product_name','$available_quantity','$receive_quantity','$price')";

	if (mysqli_query($conn,$sql)) 
	   {

			$message = "Received Successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.open('../view/view_received_transfer_one.php','_self');</script>";
	   }
	   
	   $sql1="insert into receive_transfer_history (factory_name,supplier_name,supplier_challan,product_name,available_quantity,receive_quantity,price) VALUE ('$factory_name','$supplier_name','$supplier_challan','$product_name','$available_quantity','$receive_quantity','$price')";
       mysqli_query($conn,$sql1);

		//header('location: invoice1.php?invoice=<?php echo $id; ')
		 echo"<script>window.open('receive_transfer_history.php','_self')</script>";

	}
   else {
    $message = "Please Enter value below or equal to available quantity";
      echo "<script type='text/javascript'>alert('$message');</script>";
	  echo "<script type=window.open('receive_transfer.php','_self')</script>";

	  
}
}
	

$conn->close();
?>