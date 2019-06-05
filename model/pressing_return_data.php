<?php
include('../api/conn.php');
if(isset($_POST["pressing_return"]))
{
  
  $product_name=$_POST['product_name'];
  $operation_name=$_POST['operation_name'];
  $quantity=$_POST['quantity'];

for($i=0;$i<sizeof($operation_name);$i++){
$sql = "INSERT INTO pressing_return (`product_name`,`operation_name`,`quantity`) VALUES
('$product_name','$operation_name[$i]','$quantity[$i]')";

if ($conn->query($sql) === TRUE) {

        $message = "Transfer Created Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_pressing_return.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
}

$conn->close();
?>