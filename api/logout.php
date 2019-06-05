<?php
 session_start();
   unset($_SESSION["email"]);
   
     echo"<script>alert('You have Successfully Log Out..!!!')</script>";
                echo "<script> window.open('login.php','_self')</script>";
?>