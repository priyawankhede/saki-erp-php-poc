<?php
include('../api/conn.php');
if(isset($_POST["create_transfer"]))
{
  $factory_name=$_POST['factory_name'];
  $supplier_name=$_POST['supplier_name'];
  $product_name=$_POST['product_name'];
  $part_number=$_POST['part_number'];
  $operation_name=$_POST['operation_name'];
  $price=$_POST['price'];
  $sender_name=$_POST['sender_name'];
  $transportation=$_POST['transportation'];
  $vehicle_number=$_POST['vehicle_number'];
 //$available_quantity=$_POST['available_quantity'];
 //$transfer_quantity=$_POST['transfer_quantity'];
 $quantity=$_POST['quantity'];
  
  

$sql = "INSERT INTO create_transfer (`factory_name`,`supplier_name`,`product_name`,`part_number`,`operation_name`,`price`,`sender_name`,`transportation`,`vehicle_number`,`quantity`) VALUES
('$factory_name','$supplier_name','$product_name','$part_number','$operation_name','$price','$sender_name','$transportation','$vehicle_number','$quantity')";

if ($conn->query($sql) === TRUE) {

        $message = "Transfer Created Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_created_transfer.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
	

$conn->close();
?>