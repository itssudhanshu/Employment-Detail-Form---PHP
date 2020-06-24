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
//     while($row = mysqli_fetch_assoc($res))
//     {
//         //echo "1";die
//         $results[] = array(
//       'id' => $row['id'],
//       'name' => $row['name'],
//       'eamil' => $row['email'],
//       'fname' => $row['fname'],
//       'mname' => $row['mname'],
//       'gender' => $row['gender'],
//       'dob' => $row['dob'],
//       'mobile' => $row['mobile']
//       'doj' => $row['doj'],
//       'empimg' => $row['empimg'],
//       'aadhar' => $row['aadhar'],
//       'aadimg' => $row['aadimg'],
//       'pan' => $row['pan'],
//       'panimg' => $row['panimg'],
//       'dept' => $row['dept']
//    );
//}
    echo json_encode($results);

    $empname = $_FILES['empimg']['name'];
    $empimg = $_FILES['empimg']['tmp_name'];
  
    $aadname = $_FILES['aadimg']['name'];
    $aadimg = $_FILES['aadimg']['tmp_name'];
  
    $panname = $_FILES['panimg']['name'];
    $panimg = $_FILES['panimg']['tmp_name'];


    $sql =  "UPDATE empdet SET name='".$_POST["name"]."' ,email='".$_POST["email"]."',fname='".$_POST["fname"]."', mname='".$_POST["mname"]."', gender='".$_POST["gender"]."', dob='".$_POST["dob"]."', mobile='".$_POST["mobile"]."', doj='".$_POST["doj"]."', basic='".$_POST["basic"]."', empimg='uploads/".$empname."',aadhar= '".$_POST["aadhar"]."', aadimg='uploads/".$aadname."',pan= '".$_POST["pan"]."', panimg='uploads/".$panname."', dept='".$_POST["dept"]."' WHERE id=".$_POST['id'];
    mysqli_query($conn,$sql);

  
    if(isset($empimg)){
        if(!empty($empimg)){
            $target = "uploads/";
            move_uploaded_file($empimg,$target.$empname);
        }
    }
  
    if(isset($aadimg)){
      if(!empty($aadimg)){
          $target = "uploads/";
          move_uploaded_file($aadimg,$target.$aadname);
      }
  }
  
  if(isset($panimg)){
      if(!empty($panimg)){
          $target = "uploads/";
          move_uploaded_file($panimg, $target.$panname);
      }
  }
  
   
?>