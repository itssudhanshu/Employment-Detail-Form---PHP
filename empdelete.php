<?php
//echo "hello"; die;
//echo $_POST["id"];die;
$servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = mysqli_connect($servername, $username ,$password , $dbname);

    if(!$conn){
        die("Error: ".mysqli_connect_error());
    }

    $sql = "DELETE FROM empdet WHERE id=".$_POST["id"];
    if(mysqli_query($conn, $sql)) {
        echo "Data Deleted";
    }
   
?>