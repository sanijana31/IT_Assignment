<?php
		$con=mysqli_connect("localhost","root","","assignment3saikat");
		if (isset($_REQUEST["firstNameSuggestion"])) {
			$pattern="^".$_REQUEST["firstNameSuggestion"];
			$sql="SELECT first_name from user WHERE first_name regexp '$pattern'";
			$result=mysqli_query($con,$sql);
			$out=mysqli_fetch_all($result, MYSQLI_ASSOC);
			echo json_encode($out);
		}
		if (isset($_REQUEST['first_name'])) {
			$first_name=$_REQUEST['first_name'];
			$sql="SELECT * FROM user WHERE first_name = '$first_name'";
			$result=mysqli_query($con,$sql);
			$out=mysqli_fetch_all($result, MYSQLI_ASSOC);
			echo json_encode($out);
		}
?>