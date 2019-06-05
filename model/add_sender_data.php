<?php
include('../api/conn.php');
if(isset($_POST["add_sender"]))
{
  $sender_name=$_POST['sender_name'];

$sql = "INSERT INTO sender (`sender_name`) VALUES
('$sender_name')";

if ($conn->query($sql) === TRUE) {

        $message = "Sender Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_sender.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
	

$conn->close();
?>