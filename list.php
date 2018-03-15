<?php
	$conn = mysqli_connect("thuctapphp.com", "root", "123456", "thuctapPHP");
	    if(!$conn)
	    {
	    	echo "Connect Failed!". mysqli_connect_error($conn);
	    }





?>
<html>
<head></head>
<body>
	<a href="createStudent.html" "email me">Add</a>
	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
				$sql="SELECT * FROM student WHERE studentStatus = 1";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
				while($row=mysqli_fetch_assoc($result)){
					echo '<br/>';	
		?>
		<tr>
			<td><?php echo $row['studentId']; ?></td>
			<td><?php echo $row['studentName']; ?></td>
			<td><?php echo $row['studentStatus']; ?></td>
			<td><a href="edit.php?id=<?php echo $row['studentId']; ?>">Edit |</a><a href="delete.php?id=<?php echo $row['studentId']; ?>">Delete</a></td>		
		</tr>
		<?php
				}
		}	

		?>
	</table>
</body>
</html>
