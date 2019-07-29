<?php
	include('db_connect.php');
	$sql= "SELECT * FROM `mytable1`";
	if($result=mysqli_query($conn,$sql)){
		if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
            	echo "<th>Id</th>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            	echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        
    } else{
        echo "No records matching your query were found.";
    }
	}else{
		echo "check again";
	}
	mysqli_close($conn);
?>