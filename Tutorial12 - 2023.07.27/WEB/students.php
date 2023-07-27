<?php
	$conn = mysqli_connect("localhost","root","","University");

	if(!$conn)
        {
		die("Connection Failed !");
        }
	$sql = "SELECT * from Students";
	$result = $conn -> query($sql);
?>
	<table border = "1">
		<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
<?php
	if($result->num_rows > 0)
	{
?>
		while($row = $result->fetch_assoc())
		{
			<tr>
				<td><?php echo $row["ID"]?></td>
				<td><?php echo $row["Name"]?></td>
				<td><?php echo $row["Email"]?>
</td>
			</tr>
<?php
		}
	else
	{
		echo "No Data";
	}
?>
<?table>