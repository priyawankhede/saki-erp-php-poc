<?php
include('../api/conn.php');
if(isset($_POST["add_product"]))
{
  $category_name=$_POST['category_name'];
  $product_name=$_POST['product_name'];
  $product_size=$_POST['product_size'];
  $part_number=$_POST['part_number'];
  $product_selling_price=$_POST['product_selling_price'];
  $product_quantity=$_POST['product_quantity'];
  $operation_name=$_POST['operation_name'];
  $price=$_POST['price'];
  
  $view_arts_query="select * from product where product_name= '$product_name'";
                        $run=mysqli_query($conn,$view_arts_query);
						$numrows  = mysqli_fetch_array($run);													
																								
if ($numrows>=1)													
   {
  // Return the number of rows in result set
  
  $message = " Product Name  already Exists  ";
        echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.open('../controller/add_product.php','_self');</script>";
  }
else{  

for($i=0;$i<sizeof($operation_name);$i++)
{
$sql = "INSERT INTO product (`category_name`,`product_name`,`product_size`,`part_number`,`product_selling_price`,`product_quantity`,`operation_name`,`price`) VALUES
('$category_name','$product_name','$product_size','$part_number','$product_selling_price','$product_quantity','$operation_name[$i]','$price[$i]')";

if ($conn->query($sql) === TRUE) {
        $message = "Product Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_product.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
}
}
$conn->close();
?>