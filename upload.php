
<?php
  $servername = "";
  $username  = "";
  $password = "";
  $dbname = "";

  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn) {
      echo "Error in Connection";
  }
  //print_r($_POST);
  
  $empname = $_FILES['empimg']['name'];
  $empimg = $_FILES['empimg']['tmp_name'];

  $aadname = $_FILES['aadimg']['name'];
  $aadimg = $_FILES['aadimg']['tmp_name'];

  $panname = $_FILES['panimg']['name'];
  $panimg = $_FILES['panimg']['tmp_name'];
  
 // echo print_r($_FILES);
 if($_POST['id']>0){
    $sql =  "UPDATE empdet SET name='".$_POST["name"]."' ,email='".$_POST["email"]."',fname='".$_POST["fname"]."', mname='".$_POST["mname"]."', gender='".$_POST["gender"]."', dob='".$_POST["dob"]."', mobile='".$_POST["mobile"]."', doj='".$_POST["doj"]."', basic='".$_POST["basic"]."', empimg='uploads/".$empname."',aadhar= '".$_POST["aadhar"]."', aadimg='uploads/".$aadname."',pan= '".$_POST["pan"]."', panimg='uploads/".$panname."', dept='".$_POST["dept"]."' WHERE id=".$_POST['id'];
 } else{
    $sql = "INSERT INTO empdet(name,email,fname,mname,gender,dob,mobile,doj,basic,empimg,aadhar,aadimg,pan,panimg,dept) VALUES('".$_POST["name"]."' , '".$_POST["email"]."','".$_POST["fname"]."', '".$_POST["mname"]."', '".$_POST["gender"]."', '".$_POST["dob"]."', '".$_POST["mobile"]."', '".$_POST["doj"]."', '".$_POST["basic"]."', 'uploads/".$empname."', '".$_POST["aadhar"]."', 'uploads/".$aadname."', '".$_POST["pan"]."', 'uploads/".$panname."', '".$_POST["dept"]."')";

 }
  
 if(mysqli_query($conn,$sql)){
     echo "Data Uploaded Successfully!";
 }

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
