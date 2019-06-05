<?php
include('../api/conn.php');
if(isset($_POST["add_factory"]))
{
  $factory_name=$_POST['factory_name'];
  $factory_location=$_POST['factory_location'];
  $view_arts_query="select * from factory where factory_name= '$factory_name' and factory_location ='$factory_location'";
  $run=mysqli_query($conn,$view_arts_query);  
  $numrows  = mysqli_fetch_array($run);	
  
  if($numrows>=1){
	    $message = " Name or Location Already Exists  ";
        echo "<script type='text/javascript'>alert('$message');</script>";
		 echo "<script>window.open('../controller/add_factory.php','_self');</script>";
  
  }
  else{

$sql = "INSERT INTO factory (`factory_name`,`factory_location`) VALUES
('$factory_name','$factory_location')";

if ($conn->query($sql) === TRUE) {

        $message = "Factory Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_factories.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
	
}
$conn->close();
?>