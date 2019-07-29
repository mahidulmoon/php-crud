<?php
	include('db_connect.php');
	$id=(int)$_POST['deleteid'];
	$sql="DELETE FROM `mytable1` WHERE `id`=".$id;
	if(mysqli_query($conn,$sql)){
		echo "successfully Deleted";
		include('showdata.php');
		
	}else{
		echo "check again";
	}
	

?>