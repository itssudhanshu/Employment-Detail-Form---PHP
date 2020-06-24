<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>Basic Salary</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
       
    <?php 
        $servername = "";
        $username = "";
        $password = "";
        $dbname = "";

        $conn = mysqli_connect($servername, $username ,$password , $dbname);

        if(!$conn){
            die("Error: ".mysqli_connect_error());
        }

        mysqli_select_db($conn,"sudhanshu");
        $data = "SELECT * FROM empdet";
        $res = mysqli_query($conn, $data);
        while($row = mysqli_fetch_assoc($res) ){
        ?>
        <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['mobile']?></td>
          <td><?php echo $row['basic']?></td>
          <td><?php echo $row['dept']?></td>
          <td><a  class="btn btn-light" data-toggle="modal" onclick=updateData(<?php echo $row['id']?>)>Update</a>
          <a  class="btn btn-danger"  onclick=deleteData(<?php echo $row['id']?>)>Delete</a>
          <a  class="btn btn-success" onclick=viewData(<?php echo $row['id']?>)>View</a>
          </td>
        </tr>
    <?php
        }
        mysqli_close($conn);
       
    ?>
  
    </table>
