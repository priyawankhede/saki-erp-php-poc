<?php
include('../api/conn.php');
if(isset($_POST["add_category"]))
{
	 $category_name=$_POST['category_name'];
	$view_arts_query="select * from category where category_name='$category_name'";
	$run=mysqli_query($conn,$view_arts_query);
	$numrows  = mysqli_fetch_array($run);
    
	if(numrows>=1){

      $message = "Category already Exists ";
        echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.open('../controller/add_category.php','_self');</script>";
		}
	
	else{
	
 

$sql = "INSERT INTO category (`category_name`) VALUES
('$category_name')";

if ($conn->query($sql) === TRUE) {

        $message = "Category Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_categories.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
}	

$conn->close();
?>