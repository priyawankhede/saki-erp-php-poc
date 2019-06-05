<?php
include('../api/conn.php');
if(isset($_POST["receive_transfer_pressing"]))
{
	$available_quantity=$_POST['available_quantity'];
	$receive_quantity=$_POST['receive_quantity'];

	if($available_quantity >= $receive_quantity)
	{
		
	  $factory_name=$_POST['factory_name'];
	  $supplier_name=$_POST['supplier_name'];
	  $supplier_challan=$_POST['supplier_challan'];
	  $sender_name=$_POST['sender_name'];
	  $product_name=$_POST['product_name'];
	  $operation_name=$_POST['operation_name'];
	 $available_quantity=$_POST['available_quantity'];
	 $receive_quantity=$_POST['receive_quantity'];
	 //$price=$_POST['price'];
	 $minus = $available_quantity-$receive_quantity;

	$update = "UPDATE pressing SET quantity = $minus WHERE quantity = $available_quantity";
	mysqli_query($conn,$update);
 
	 $sql = "INSERT INTO receive_pressing (`factory_name`,`supplier_name`,`supplier_challan`,`sender_name`,`product_name`,`operation_name`,`available_quantity`,`receive_quantity`) VALUES
	 ('$factory_name','$supplier_name','$supplier_challan','$sender_name','$product_name','$operation_name','$available_quantity','$receive_quantity')";
		//echo $sql;
	//echo "<script type='text/javascript'>alert('$sql');</script>";
	if (mysqli_query($conn,$sql)) 
	   {

			$message = "Received Successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//echo "<script>window.open('../view/view_receive_pressing_one.php','_self');</script>";
	   }
	   
	  $sql1="insert into receive_pressing_history (factory_name,supplier_name,supplier_challan,sender_name,product_name,operation_name,available_quantity,receive_quantity	) VALUE ('$factory_name','$supplier_name','$supplier_challan','$sender_name','$product_name','$operation_name','$available_quantity','$receive_quantity')";
      mysqli_query($conn,$sql1);

		//header('location: invoice1.php?invoice=<?php echo $id; ')
		// echo"<script>window.open('view/view_receive_pressing_all.php','_self')</script>";

	}
   else {
    $message = "Please Enter value below or equal to available quantity";
      echo "<script type='text/javascript'>alert('$message');</script>";
	  echo "<script type=window.open('controller/receive_transfer1_pressing.php','_self')</script>";

	  

}
}
	

$conn->close();
?>