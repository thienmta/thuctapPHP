<?php
	$servername = "thuctapphp.com";
 	$username = "root"; 
	$password = "root"; 
	$dbname = "thuctapPHP";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	// Kiểm tra sự kết nối
	if(!$conn){
	 
	   die('The connect is failed :'.mysqli_connect_error());
	}
	else
	{
		if(isset($_GET['studentId'])&& filter_var($_GET['studentId'],FILTER_VALIDATE_INT,array('min_range'=>1)))
                {
                    $studentId=$_GET['studentId'];
                }
                else
                {
                    echo"hehe failed";
                }
    // Cập nhật thông tin chỉnh sửa
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$name = $_POST['name'];
			$status = $_POST['status'];
			$query = "UPDATE student SET studentName='{$name}',
										  studentStatus='{$status}'
										  WHERE studentId={$studentId}";
			//mysqli_query($conn, $query);
			$results=mysqli_query($conn,$query);
			header('Location: list.php');
		}
	}
?>
<body style="width: 30%; margin: 0 auto;">
	<form action="" method="post">
		<h2>Name student: </h2>
		<label>Student Name</label><br><br>
		<input style="height: 30px; width: 100%;" type="text" name="name" placeholder=" Student Name..." ?>"><br><br>
		<label>Student Status</label><br><br>
		<input style="height: 30px; width: 100%;" type="number" name="status" placeholder=" Student Status..."  ?>"><br>
		<br><br>
		<input style="height: 30px; width: 100%;" type="submit" name="" value="Save">
		<input style="height: 30px; width: 100%;" type="button" name="" value="Cancel">
	</form>
</body>