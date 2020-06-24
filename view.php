<?php
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = mysqli_connect($servername, $username ,$password , $dbname);

    if(!$conn){
        die("Error: ".mysqli_connect_error());
    }

    $fetch = "SELECT * FROM empdet WHERE id=".$_POST['id'];
    $res = mysqli_query($conn, $fetch);
    $results =  mysqli_fetch_assoc($res);

    echo json_encode($results);
    ?>