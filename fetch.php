<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username ,$password , $dbname);

if(!$conn){
    die("Error: ".mysqli_connect_error());
}
$sql = "SELECT * FROM calendar;";
$res = mysqli_query($conn, $sql);
$results = array();
while($row = mysql_fetch_assoc($res))
{
   $results[] = array(
      'id' => $row['id'],
      'name' => $row['name'],
      'eamil' => $row['email'],
      'fname' => $row['fname'],
      'mname' => $row['mname'],
      'gender' => $row['gender'],
      'dob' => $row['dob'],
      'mobile' => $row['mobile']
      'doj' => $row['doj'],
      'empimg' => $row['empimg'],
      'aadhar' => $row['aadhar'],
      'aadimg' => $row['aadimg'],
      'pan' => $row['pan'],
      'panimg' => $row['panimg'],
      'dept' => $row['dept']
   );
}
echo json_encode($results);
?>