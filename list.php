<?php
	$conn = mysqli_connect("thuctapphp.com", "root", "124356", "thuctapPHP");
	    if(!$conn)
	    {
	    	echo "Connect Failed!". mysqli_connect_error($conn);
	    }
	    	echo "Successsful";
	    	//echo "ha cho";
		echo "dm con cho thien";

?>
<html>
<head></head>
<body>
	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
				$sql="SELECT * FROM student";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
				while($row=mysqli_fetch_assoc($result)){
					echo '<br/>';	
		?>
		<tr>
			<td><?php echo $row['studentId']; ?></td>
			<td><?php echo $row['studentName']; ?></td>
			<td><?php echo $row['studentStatus']; ?></td>
			<td><a href="edit.php?studentId=<?php echo $row['studentId']; ?>">Edit |</a><a href="delete.php?studentId=<?php echo $row['studentId']; ?>">Delete</a></td>		
		</tr>
		<?php
				}
		}	

		?>
	</table>
</body>
</html>
