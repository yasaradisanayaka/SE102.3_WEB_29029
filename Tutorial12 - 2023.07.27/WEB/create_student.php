<?php
	$conn = mysqli_connect("localhost","root","","University");

	$id = $_REQUEST["ID"];
	$name = $_REQUEST["Name"];
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];

	if(!$conn)
        {
		die("Connection Failed !");
        }
	$sql = "insert into Students(ID,Name,email,password) values(".$id.",'".$name."','".$email."','".$password."')";
	if($conn -> query($sql) === TRUE)
        {
		echo "Success";
	}
	else
	{
		echo "Error";
	}
?>