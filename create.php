<?php
	$servername = "thuctapphp.com";
 	$username = "root"; 
	$password = "1"; 
	$dbname = "thuctapPHP";

	$conn = mysqli_connect($servername,$username,$password,$dbname);
 
	if(!$conn){
	 
	   die('Ket noi that bai:'.mysqli_connect_error());
	 
	}
	else
	{
		if(isset($_POST['name']) && isset($_POST['status']))
		{
			$name = $_POST['name'];
			$status = $_POST['status'];
			$query = " INSERT INTO student(studentName, studentStatus) values ('$name', $status)";
			//mysqli_query($conn, $query);
			if($conn->query($query) === true)
			{
				header('Location: http://thuctapphp.com/');
			}
			else
			{
				echo "Loi create";die;
			}
		}
	}
?>