<?php
	// Build up DB connection including cofiguration file
	require ("../api/conn.php");
	//Assign an empty variable to store the fetched items
	$output = '';
	//SQL query to fetch the phone models b $sql = "SELECT * FROM product WHERE product_name = '".$_POST["product_name"]."' group by `operation_name`";
                                  
	$sql = "SELECT * FROM product WHERE operation_name = '".$_POST["operation_name"]."'";// and product_name = '".$_POST["product_name"]."' ";
	// execution of the query. Output a boolean value
	$res = mysqli_query($conn , $sql);
	//Concatenate fetched items to the output variable with HTML option tags to display
	$output .= '<option value="" disabled selected>--Service Price--</option>';
	// Check whether there are results or not
	if(mysqli_num_rows($res)>0){
		//Fetch the models into an array belongs to a particular brand name/id
		while ($row = mysqli_fetch_array($res)) {
			//Concatenate further fetched items to the output variable
			$output .= '<option value="'.$row["price"].'">'.$row["price"].'</option>';
		}
	}
	
	echo $output;

?>