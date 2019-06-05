<?php
include('../api/conn.php');
if(isset($_POST["pressing_return_update"]))
{
  $id=$_GET['product_name'];
  $product_name=$_POST['product_name'];
  $operation_name=$_POST['operation_name'];
  $price=$_POST['price'];

for($i=0;$i<sizeof($operation_name);$i++){
$sql = "update pressing_return set product_name='$product_name', operation_name='$operation_name[$i]', price='$price[$i]' where id=$id"; 

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