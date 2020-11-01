<?php 
  $connect = mysqli_connect('127.0.0.1','root','','Xakaton');
    $query_texts = "INSERT INTO Login (name, surname, password) 
            VALUES ('{$_GET["gl"]}','{$_GET["gh"]}','{$_GET["gk"]}')";
    $query_new = mysqli_query($connect, $query_texts);
    $query_texts2 = "INSERT INTO Plan (texts, whens) 
            VALUES ('{$_GET["g"]}','{$_GET["f"]}')";
    $query_new2 = mysqli_query($connect, $query_texts2);
    $query_texts3 = "INSERT INTO Logo (logo,prof) 
            VALUES ('{$_GET["go"]}','{$_GET["gu"]}')";
    $query_new3 = mysqli_query($connect, $query_texts3);
    header("Location: main.php");
    
  exit;
?>
