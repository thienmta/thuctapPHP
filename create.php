<?php
	$servername = "thuctapphp.com";
 	$username = "root"; 
	$password = "123456"; 
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
			if($conn->query($query) === true)
			{
				header('Location: http://thuctapphp.com/thuctapPHP/list.php');
			}
			else
			{
				echo "Loi create";die;
			}
		}
	}
?>