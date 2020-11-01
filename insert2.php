<?php 
	$connect = mysqli_connect('127.0.0.1','root','','Xakaton');
    $query_texts = "INSERT INTO Login (name, surname, password) 
    				VALUES ('{$_GET["gl"]}','{$_GET["gh"]}','{$_GET["gk"]}')";
   	$query_new = mysqli_query($connect, $query_texts);
   	$query_texts2 = "INSERT INTO Plan (texts, whens) 
    				VALUES ('{$_GET["g"]}','{$_GET["f"]}')";
   	$query_new2 = mysqli_query($connect, $query_texts2);
   	header("Location: index3.php");
	exit;
?>