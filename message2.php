<?php 
	$con = mysqli_connect('127.0.0.1','root','','Xakaton');
	mysqli_query($con, "DELETE FROM message2 WHERE id = '".$_GET['idtxt']."'");

	mysqli_query($con, "INSERT INTO message2 (text) VALUES('".$_GET['txt']."')");

	header("Location: index2.php"); 
 ?>