<?php
session_start();
require_once('conn.php');
if(isset($_POST['login'])) {

    $email=$_POST['email'];
    $password=$_POST['password'];
	$user="user";
	$supplier="supplier";
	$sender="sender";
	$admin="admin";
	
    $query="select * from admin_users where email='$email' and password='$password' and type='$admin'";
    $run_admin=mysqli_query($conn,$query);
	
	 $query_user="select * from admin_users where email='$email' and password='$password' and type='$user'";
    $run_user=mysqli_query($conn,$query_user);
	
	 $query_supplier="select * from admin_users where email='$email' and password='$password' and type='$supplier'";
    $run_supplier=mysqli_query($conn,$query_supplier);
	
	 $query_sender="select * from admin_users where email='$email' and password='$password' and type='$sender'";
    $run_sender=mysqli_query($conn,$query_sender);

    if(mysqli_num_rows($run_admin)==1) {
        
        echo "<script> window.open('../index.php','_self');</script>";
        $_SESSION['email']=$email;
		
    }elseif(mysqli_num_rows($run_user)==1)
	{
		echo "<script> window.open('../controller/create_transfer.php','_self');</script>";
		//echo "<script> </script>"
        $_SESSION['email']=$email;
	}
	//elseif($_SESSION['email']){echo "<script>window.close();</script>";}
	
	elseif(mysqli_num_rows($run_supplier)==1)
	{
		echo "<script> window.open('../view/add_supplier.php','_self');</script>";
        $_SESSION['email']=$email;
		
	}elseif(mysqli_num_rows($run_sender)==1)
	{
		echo "<script> window.open('../view/add_sender.php','_self');</script>";
        $_SESSION['email']=$email;
		
	}
	else {
        echo"<script>alert('Incorrect email or Password');</script>";
                echo "<script> window.open('../login.php','_self');</script>";
    }

}
?>





