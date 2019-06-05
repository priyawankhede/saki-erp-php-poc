<?php
include('../api/conn.php');
if(isset($_POST["add_supplier"]))
{
  $supplier_name=$_POST['supplier_name'];
  $supplier_location=$_POST['supplier_location'];
  $supplier_description=$_POST['supplier_description'];
  $supplier_gst=$_POST['supplier_gst'];
  $contact_person_name=$_POST['contact_person_name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];

$sql = "INSERT INTO supplier (`supplier_name`,`supplier_location`,`supplier_description`,`supplier_gst`,`contact_person_name`,`email`,`mobile`) VALUES
('$supplier_name','$supplier_location','$supplier_description','$supplier_gst','$contact_person_name','$email','$mobile')";

if ($conn->query($sql) === TRUE) {

        $message = "Supplier Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('../view/view_supplier.php','_self');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
	

$conn->close();
?>