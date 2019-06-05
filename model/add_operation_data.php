<?php
include('../api/conn.php');
if(isset($_POST["add_operation"]))
{
  $product_name=$_POST['product_name'];
  $operation_name=$_POST['operation_name'];
  $price=$_POST['price'];



for($i=0;$i<sizeof($operation_name);$i++){

$sql = "INSERT INTO operation (product_name,operation_name,price)

VALUES ('$product_name','$operation_name[$i]','$price[$i]')";

if ($conn->query($sql) === TRUE) {

 $message = "Operations Added to the Product Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_operation.php','_self');</script>";

} else {

echo "Error: " . $sql . "<br>" . $conn->error;

}

// $conn->close();

}



}
	

$conn->close();
?>