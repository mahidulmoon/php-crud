<?php
	include('db_connect.php');
	$id=(int)$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$sql= "UPDATE `mytable1` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE `id`=".$id;
	if(mysqli_query($conn,$sql)){
		echo "New Record successfully inserted";
		include('showdata.php');

	}else{
		echo "check again";
	}
	
?>