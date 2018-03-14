<?php
	function deleteStudent($id){
		$sql = mysqli_query("UPDATE  student  SET studentStatus='0' WHERE studentId='$id'");
		return $sql;
	}
?>
<script language="javascript">
    	function load_ajax(){
    		var agrs = {
    			url : "delete.php";
    			type  :  "post";
    			dataType : "text";
    			data : {
    				id : $id 
    			}
    		}
    	}
</script>
