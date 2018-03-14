<?php
	$conn = mysqli_connect("thuctapphp.com", "root", "123456", "thuctapPHP");
	if(isset($_GET['id'])){
		$id =$_GET['id'];
		$sql = "UPDATE student SET studentStatus=0 WHERE studentId='$id'";
		mysqli_query($sql);
		header("location:list.php");
	}

?>

