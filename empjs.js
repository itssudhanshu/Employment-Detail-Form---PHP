// function validate() {

//    if (document.myForm.name.value == "") {
//       alert("Please provide your name!");
//       document.myForm.name.focus();
//       return false;
//    }
//    if (document.myForm.email.value == "") {
//       alert("Please provide your Email!");
//       document.myForm.email.focus();
//       return false;
//    }
//    if (document.myForm.fmane.value == "") {
//       alert("Please provide your name!");
//       document.myForm.fname.focus();
//       return false;
//    }
//    if (document.myForm.mname.value == "") {
//       alert("Please provide your name!");
//       document.myForm.mname.focus();
//       return false;
//    }

//    if (document.myForm.mobile.value == "" || isNaN(document.myForm.mobile.value) ||
//       document.myForm.mobile.value.length == 10) {

//       alert("Please provide a 10 digit mobile number!");
//       document.myForm.mobile.focus();
//       return false;
//    }
//    return (true);
// }



function showModal() {
   $("#myModal").modal('show');
   $("#myForm")[0].reset();
   $("#id").val("0");
}

$(document).ready(function (e) {
   $("#getCodeModal").click(function () {
      $("#btnUpdate").hide();
   });
   $("#getCodeModal").click(function () {
      $("#btnSubmit").show();
   });
   $("#myForm").on('submit', function (e) {
      e.preventDefault();
      var data = new FormData(this);
      // data.append("file",$("#empimg")[0].files[0]);
      // data.append("file",$("#aadimg")[0].files[0]);
      // data.append("file",$("#panimg")[0].files[0]);

      //validate();
      $.ajax({
         url: "upload.php",
         type: "POST",
         enctype: "multipart/form-data",
         // data: new FormData(this),
         data: data,
         contentType: false,
         cache: false,
         processData: false,
         // beforeSend: function() {
         //    $("#btnSubmit").attr("disabled","disabled")
         // }
         success: function (d) {
            alert(d);
            $("#myModal").modal('hide');
            showUser();
         }
      });
   });
});



function showUser() {
   $.ajax({
      url: "getuser.php",
      success: function (data) {

         $("#txtHint").html(data);
      }
   });
}

function updateData(id) {
   $("#btnSubmit").hide();
   $("#btnUpdate").show();
   $.ajax({
      url: "empupdate.php",
      method: "POST",
      data: {
         id: id
      },
      dataType: "json",
      success: function (result) {
         // $("#getCode").html(data);
         $("#myModal").modal('show');
         $("#id").val(result.id);
         $("#name").val(result.name);
         $("#email").val(result.email);
         $("#fname").val(result.fname);
         $("#mname").val(result.mname);
        // alert(result.gender);
         if (result.gender == "female") {
            $("#inlineRadio2").prop("checked",true);
         }
         if (result.gender == "male") {
            $("#inlineRadio1").prop("checked",true);
         }
         if (result.gender == "other") {
            $("#inlineRadio3").prop("checked",true);
         }
         // $("#empimg").val(result.empimg);
         // $("#panimg").val(result.panimg);
         // $("#aadimg").val(result.aadimg);
         $("#dob").val(result.dob);
         $("#mobile").val(result.mobile);
         $("#doj").val(result.doj);
         $("#basic").val(result.basic);
         $("#aadhar").val(result.aadhar);
         $("#pan").val(result.pan);
         $("#dept").val(result.dept);
         alert(data);
         showUser();
         $("#myModal").modal('hide');
      }
   });
}



function deleteData(id) {
   $.ajax({
      url: "empdelete.php",
      method: "POST",
      data: {
         id: id
      },
      dataType: "text",
      success: function (data) {
         //console.log(data)
         showUser();
         alert(data);
      }
   });
}

function viewData(id) {
   $.ajax({
      url: "view.php",
      method: "POST",
      data: {
         id: id
      },
      dataType: "json",
      success: function (result) {
         // $("#getCode").html(data);
         $("#myModal2").modal('show');
         $("#id1").val(result.id);
         $("#name1").val(result.name);
         $("#email1").val(result.email);
         $("#fname1").val(result.fname);
         $("#mname1").val(result.mname);
         if (result.gender == "female") {
            $("#inlineRadio1").attr("checked", "checked");
         }
         if (result.gender == "male") {
            $("#inlineRadio2").attr("checked", "checked");
         }
         if (result.gender == "other") {
            $("#inlineRadio3").attr("checked", "checked");
         }
         $("#dob1").val(result.dob);
         $("#mobile1").val(result.mobile);
         $("#doj1").val(result.doj);
         $("#basic1").val(result.basic);
         $("#aadhar1").val(result.aadhar);
         $("#pan1").val(result.pan);
         $("#dept1").val(result.dept);
         //$("#empimg1").val(result.empimg);
         $("#empimg1").attr("src", result.empimg);
         $("#aadimg1").attr("src", result.aadimg);
         $("#panimg1").attr("src", result.panimg);
         //alert(data);
         showUser();
      }
   });
}