<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link href="empcss.css" rel="stylesheet">--->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link rel="stylesheet" href="empcss.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="empjs.js"></script>
    <title>Employee Details</title>
</head>
<body>
<div class="container mt-3">
  <h2>Add Details</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" id="getCodeModal" onclick=showModal() >
    Register Here
  </button>
  <button type="button" class="btn btn-primary" onclick=showUser() >
    Show Details
  </button>
  <br><br>
  <div id="txtHint"></div>


  <section class="section1">
    <div class="modal fade " id="myModal" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
      
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center">Employee Detail</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
        
                 <!-- Modal body -->
                <div class="modal-body" id="getCode">
                        <form   id="myForm" >
                        <input type="hidden" name="id" id="id" value="0">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName4">Name<span class="error">*</span></label>
                                    <input type="text" class="form-control"  placeholder="Name" name="name" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email<span class="error">*</span></label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email"  required>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label for="inputfName4">Father's Name<span class="error">*</span></label>
                                    <input type="text" class="form-control" placeholder="Father's Name" name="fname" id="fname" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputmName4">Mother's Name<span class="error">*</span></label>
                                    <input type="text" class="form-control" placeholder="Mother's Name" name="mname" id="mname">
                                </div>
                            </div>
                            <div class="form">
                                <label for="inputGen4">Gender<span class="error">*</span>:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female"  required>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="other" required>
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 row">
                                    <label for="inputdob4" class="col-md-5 col-form-label">Date of Birth<span class="error">*</span></label>
                                    <input type="varchar" class="form-control col-md-7" id="dob" placeholder="YYYY-MM-DD" name="dob" required>
                                </div>
                                <div class="form-group col-md-4"></div>
                                <div class="form-group col-md-4 row">
                                    <label for="inputmob4" class="col-md-5 col-form-label">Mobile Number<span class="error">*</span></label>
                                    <input type="text" class="form-control col-md-7" id="mobile" placeholder="0123456789" name="mobile" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 row">
                                    <label for="inputdoj4" class="col-md-5 col-form-label">Date of Joining<span class="error">*</span></label>
                                    <input type="varchar" class="form-control col-md-7" id="doj" placeholder="YYYY-MM-DD" name="doj" required>
                                </div>
                                <div class="form-group col-md-4"></div>
                                <div class="form-group col-md-4 row">
                                    <label for="inputbs4" class="col-md-5 col-form-label">Basic Salary<span class="error">*</span></label>
                                    <input type="text" class="form-control col-md-7" id="basic" placeholder="Rs./per aanum" name="basic">
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="uploademp" class="col-md-4 col-form-label">Upload Photo<span class="error">*</span></label>
                                <input type="file" class="form-control-file col-md-8 " name="empimg" id="empimg" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5 row">
                                    <label for="inputName4" class="col-md-4 col-form-label">Aadhar Number<span class="error">*</span></label>
                                    <input type="text" class="form-control col-md-8" id="aadhar" placeholder="3772xxxxxxx" name="aadhar" required>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-6 row">
                                    <label for="uploademp" class="col-md-4 col-form-label">Upload Aadhar Photo</label>
                                    <input type="file" class="form-control-file col-md-8" name="aadimg"  id="aadimg" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5 row">
                                    <label for="inputName4" class="col-md-4 col-form-label">PAN Number<span class="error">*</span></label>
                                    <input type="text" class="form-control col-md-8" id="pan" placeholder="RJxxxxxxxxx" name="pan" required>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-6 row">
                                    <label for="uploademp" class="col-md-4 col-form-label">Upload PAN Photo</label>
                                    <input type="file" class="form-control-file col-md-8 " name="panimg" id="panimg" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 row">
                                    <label for="inputName4" class="col-md-4 col-form-label">Department<span class="error">*</span></label>
                                    <input type="text" class="form-control col-md-6" id="dept" placeholder="Department" name="dept" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <button type="submit" class="btn btn-dark" name="save" id="btnSubmit">Save</button>
                                        <button type="submit" class="btn btn-light" name="update" id="btnUpdate">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="modal fade container-fluid" id="myModal2" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
      
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center">Employee Detail</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
        
                 <!-- Modal body -->
                <div class="modal-body" id="getCode">
                    <form >
                    <div class=" form-group row">
                    <div class="col-md-6">
                    <div class="form-group row">
            <label for="name" class="col-md-2 col-form-label">Name</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control-plaintext" id="name1">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="email1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-2 col-form-label">Father's Name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="fname1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="mname" class="col-sm-2 col-form-label">Mother's Name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="mname1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="dob1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="mobile1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="dept" class="col-sm-2 col-form-label">Department</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="dept1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="doj" class="col-sm-2 col-form-label">Date of Joining</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="doj1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="basic" class="col-sm-2 col-form-label">Basic Salary</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="basic1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="aadhar" class="col-sm-2 col-form-label">Aadhar Number</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="aadhar1" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="pan" class="col-sm-2 col-form-label">Pan Number</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="pan1" value="email@example.com">
            </div>
        </div>
     </div>
        <div class="col-md-6">
            <div class="empphoto mr-auto ml-auto">
                <img src=""  id="empimg1" width=150px height=150px style=" margin-left:200px">
            </div>
            <div class="aadharphoto">
                <img src=""  id="aadimg1" width=300px height=150px style="margin-top:100px; margin-right:200px;  float:left;">
            </div>
            <div class="panphoto">
                <img src=""  id="panimg1" width=300px height=150px style="position:right; margin-top:100px; margin-left:150px; float:right;">
            </div>
        </div>
 </div>

        <div class="row">
        <div class="col-lg-10 mr-auto ml-auto modal-footer">
            <button type="button" class="btn btn-dark close" data-dismiss="modal">Ok</button>
        </div>
        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
 </div>





   </body>
</html>

