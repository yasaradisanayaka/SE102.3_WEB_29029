<?php
	$conn = mysqli_connect("localhost","root","","University");
	if(!$conn)
        {
		die("Connection Failed !");
        }
	echo "Database Connected !";
?>