<?php
	$conn = mysqli_connect("thuctapphp.com", "root", "1", "thuctapPHP");
	if(isset($_GET['id'])){
		$id =$_GET['id'];
		$sql = "UPDATE student SET studentStatus=0 WHERE studentId='$id'";
		mysqli_query($conn, $sql);
		header("location: http://thuctapphp.com/list.php");
	}

?>

