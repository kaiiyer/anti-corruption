<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*$link = mysqli_connect("localhost", "root", "", "demo");*/
include 'anoop.php';
error_reporting(0);
 
// Check connection
/*if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}*/
 
// Attempt select query execution
$t=mysql_query("SELECT * FROM abc");
if(mysql_num_rows($t)==0) {
      die('Could not get data: ' . mysql_error());
   }
    else {
        echo "<table>";
            echo "<tr>";
                echo "<th>aadhar</th>";
                echo "<th>pname</th>";
                echo "<th>suffering</th>";
                echo "<th>status</th>";
				 echo "<th>financial</th>";
				  echo "<th>address</th>";
				   echo "<th>village</th>";
				   
            echo "</tr>";
			while($row=mysql_fetch_assoc($t)) {
            echo "<tr>";
                echo "<td>" . $row['aadhar'] . "</td>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['suffer'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
				echo "<td>" . $row['financial'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['villcode'] . "</td>";
            echo "</tr>";
       
    
}
}
 
// Close connection
mysqli_close();
?>