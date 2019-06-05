<?php
include('../api/conn.php');
if(isset($_POST["create_transfer_pressing"]))
{
  $factory_name=$_POST['factory_name'];
  $supplier_name=$_POST['supplier_name'];
  $product_name=$_POST['product_name'];
  $part_number=$_POST['part_number'];
  $price=$_POST['price'];
  $sender_name=$_POST['sender_name'];
  $transportation=$_POST['transportation'];
  $vehicle_number=$_POST['vehicle_number'];
  //$available_quantity=$_POST['available_quantity'];
  //$transfer_quantity=$_POST['transfer_quantity'];
  
  $operation_name = $_POST['operation_name'];
  $quantity = $_POST['quantity'];

  $info = "INSERT INTO pressing (`factory_name`,`supplier_name`,`product_name`,`part_number`,`price`,`sender_name`,`transportation`,`vehicle_number`) VALUES
  ('$factory_name','$supplier_name','$product_name','$part_number','$price','$sender_name','$transportation','$vehicle_number')";

  $int_info = $conn->query($info);

  $updateid = "SELECT max(id) FROM pressing";

  $last_id1 = $conn->query($updateid);

  $last_id = mysqli_fetch_array($last_id1);
  
for($i=0;$i<sizeof($operation_name);$i++)
{

$sql = "INSERT INTO pressing_details (`pressing_id`,`operation_name`,`quantity`) VALUES
('$last_id[0]','$operation_name[$i]','$quantity[$i]')";


if ($conn->query($sql) === TRUE) {
    
        $message = "Transfer Created Successfully";
  
        echo "<script type='text/javascript'>alert('$message');</script>";
    
        echo "<script>window.open('../view/view_transfer_pressing.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
}

$conn->close();
?>