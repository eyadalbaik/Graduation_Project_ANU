//Integrate Sweetalert 2 in PHP & MySQL using Ajax on Add New Record
$(document).on("click", "#btn-add", function (e) {
  var data = $("#user_form").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "save.php",

    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
        $("#addEmployeeModal").modal("hide");
        swal("success");
        setTimeout(200000);
        location.reload();
      } else if (dataResult.statusCode == 201) {
        // alert(dataResult);
        swal("Error!", "Could'not be saved !", "warnings");
        setTimeout(2000);
      }
    },
  });
});




//   الجدول الثاني 





// $(document).on("click", "#btnn-add", function (e) {
//   var data = $("#item_num").serialize();
//   $.ajax({
//     data: data,
//     type: "post",
//     url: "sav.php",

//     success: function (dataResult) {
//       var dataResult = JSON.parse(dataResult);
//       if (dataResult.statusCode == 200) {
//         $("#addEmployeeModal").modal("hide");
//         swal("success");
//         setTimeout(200000);
//         location.reload();
//       } else if (dataResult.statusCode == 201) {
//         // alert(dataResult);
//         swal("Error!", "Could'not be saved !", "warnings");
//         setTimeout(2000);
//       }
//     },
//   });
// });











//Add Course


$(document).on("click", "#bb", function (e) {
  var data = $("#course_form").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "coursephp.php",

    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
        $("#course").modal("hide");
        swal("success");
        location.reload();
      } else if (dataResult.statusCode == 201) {
        swal("Error!", "Could'not be saved !", "warnings");
        setTimeout(2000);
      }
    },
  });
});





// add user into course


$(document).on("change", "#op", function (e) {
  var data = $("#sc").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "corseuser.php",

    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
        $("#course").modal("hide");
        swal("success");
        location.reload();
      } else if (dataResult.statusCode == 201) {
        swal("Error!", "Could'not be saved !", "warnings");
        setTimeout(2000);
      }
    },
  });
});








//Update 


$(document).on("click", ".update", function (e) {
  var id = $(this).attr("data-id");
  var username = $(this).attr("data-name");
  var email = $(this).attr("data-email");
  $("#id_u").val(id);
  $("#statuss").val(statuss);
  
});

$(document).on("click", "#update", function (e) {
  var data = $("#update_form").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "save.php",
    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
        $("#editEmployeeModal").modal("hide");
        swal("Data Updated Successfully");
        setTimeout(2000);
        location.reload();
      } else if (dataResult.statusCode == 201) {
        swal("Error!", "Could'not be Updated !", "Warnings");
        setTimeout(2000);
      }

    },

  });

});


//Delete 
$(document).on("click", ".delete", function () {
  var recordid = $(this).attr("data-id");
  swal({
    title: "Are you sure?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url: "save.php",
        type: "POST",
        cache: false,
        data: {
          type: 3,
         id: recordid,

},

        success: function (dataResult) {

          location.reload();

 

          $("#" + dataResult).remove();

        },

      });

      swal("Record Deleted successfully !", {

        icon: "success",

      });

    } else {

      swal("Not Completed");

    }

  });

});
