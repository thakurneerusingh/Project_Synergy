<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>  -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</script>
  </body>
</html>
</head>

     <script type="text/javascript">
            $(document).ready(function () {
                $("#skill_dropdown").change(function () {
                    var inputVal = $(this).val();
                    var eleBox = $("." + inputVal);
                    $(".skill").hide();
                    $(eleBox).show();
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#skill_dropdown_2").change(function () {
                    var inputVal = $(this).val();
                    var eleBox = $("." + inputVal);
                    $(".form_test").hide();
                    $(eleBox).show();
                });
            });
        </script>
 <script type="text/javascript">
            $(document).ready(function () {
                $("#skill_dropdown_3").change(function () {
                    var inputVal = $(this).val();
                    var eleBox = $("." + inputVal);
                    $(".form_test_2").hide();
                    $(eleBox).show();
                });
            });
</script>
<!-- Biodiesel Form start -->
<script>
if ($("#bioform").length > 0) {
$("#bioform").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
  email: {
    required: true,
    maxlength: 100
  },
  address: {
    required: true,
    maxlength: 100
  },  
  mobile: {
    required: true,
    maxlength: 300
  },  
  customer_type: {
    required: true,
    maxlength: 300
  }, 
  volume: {
    required: true,
    maxlength: 300
  },
  Use_in: {
    required: true,
    maxlength: 300
  },
  description: {
    required: true,
    maxlength: 300
  },    
  },
  messages: {
  name: {
    required: "Please Enter Name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please Enter Email",
    maxlength: "Your name maxlength should be 100 characters long."
  },
  address: {
    required: "Please Enter Pump",
    maxlength: "The email name should less than or equal to 50 characters",
  },
  mobile: {
    required: "Please Enter Address",
    maxlength: "Your subject maxlength should be 100 characters long."
  },    
  customer_type: {
    required: "Please Enter Mobile No.",
    maxlength: "Your subject maxlength should be 10 characters long."
  },    
  volume: {
    required: "Please Enter Problem",
    maxlength: "Your subject maxlength should be 100 characters long."
  }, 
  Use_in: {
    required: "Please Enter Problem",
    maxlength: "Your subject maxlength should be 100 characters long."
  },
  description: {
    required: "Please Enter Description ",
    maxlength: "Your description  maxlength should be 300 characters long."
  },    
  
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);
  $.ajax({
    url: "{{url('insertbio')}}",
    type: "POST",
    data: $('#bioform').serialize(),
    success: function( response ) {
      $('#submit').html('Submit');
      $("#submit"). attr("disabled", false);
      alert('Biodiesel Form has been submitted successfully');
      document.getElementById("bioform").reset(); 
    }
   });
  }
  });
}
</script>
<!-- Biodiesel Form end -->
 <!-- Fabrication Form start -->
<script>
if ($("#fab_form").length > 0) {
$("#fab_form").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
    mobile: {
    required: true,
    maxlength: 50
  },
  email: {
    required: true,
    maxlength: 100
  },
  type: {
    required: true,
    maxlength: 100
  },  
  capacity: {
    required: true,
    maxlength: 300
  },  
  pump: {
    required: true,
    maxlength: 300
  }, 
  Choose: {
    required: true,
    maxlength: 300
  },
  qty: {
    required: true,
    maxlength: 300
  },
  description: {
    required: true,
    maxlength: 300
  },    
  },
  messages: {
    name: {
    required: true,
    maxlength: 50
  },
    
    mobile: {
    required: "Please Enter Name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please Enter Email",
    maxlength: "Your name maxlength should be 100 characters long."
  },
  type: {
    required: "Please Enter Pump",
    maxlength: "The email name should less than or equal to 50 characters",
  },
  capacity: {
    required: "Please Enter Address",
    maxlength: "Your subject maxlength should be 100 characters long."
  },    
  pump: {
    required: "Please Enter Mobile No.",
    maxlength: "Your subject maxlength should be 10 characters long."
  },    
  Choose: {
    required: "Please Enter Problem",
    maxlength: "Your subject maxlength should be 100 characters long."
  }, 
  qty: {
    required: "Please Enter Problem",
    maxlength: "Your subject maxlength should be 100 characters long."
  },
  description: {
    required: "Please Enter Description ",
    maxlength: "Your description  maxlength should be 300 characters long."
  },    
  
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);
  $.ajax({
    url: "{{url('insertfab')}}",
    type: "POST",
    data: $('#fab_form').serialize(),
    success: function( response ) {
      $('#submit').html('Submit');
      $("#submit"). attr("disabled", false);
      alert('Fabrication Form has been submitted successfully');
      document.getElementById("fab_form").reset(); 
    }
   });
  }
  });
}
</script>
 <!-- Fabrication Form end -->
<!-- serviceform -->
<!-- automation Form start -->
<script>
if ($("#automation").length > 0) {
$("#automation").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
  email: {
    required: true,
    maxlength: 100
  },
  pump: {
    required: true,
    maxlength: 100
  },  
  address: {
    required: true,
    maxlength: 300
  },  
  problem_since: {
    required: true,
    maxlength: 300
  }, 
 
  nature: {
    required: true,
    maxlength: 300
  },
  description: {
    required: true,
    maxlength: 300
  },    
  },
  messages: {
    name: {
    required: "Please Enter Name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please Enter Email",
    maxlength: "Your name maxlength should be 100 characters long."
  },
  pump: {
    required: "Please Enter Pump",
    maxlength: "The email name should less than or equal to 50 characters",
  },
  address: {
    required: "Please Enter Address",
    maxlength: "Your subject maxlength should be 100 characters long."
  },    
  problem_since: {
    required: "Please Enter Mobile No.",
    maxlength: "Your subject maxlength should be 10 characters long."
  },    
  nature: {
    required: "Please Enter Problem",
    maxlength: "Your subject maxlength should be 100 characters long."
  }, 
  description: {
    required: "Please Enter Description ",
    maxlength: "Your description  maxlength should be 300 characters long."
  },    
  
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);
  $.ajax({
    url: "{{url('insert')}}",
    type: "POST",
    data: $('#automation').serialize(),
    success: function( response ) {
      $('#submit').html('Submit');
      $("#submit"). attr("disabled", false);
      alert('Automation Form has been submitted successfully');
      document.getElementById("automation").reset(); 
    }
   });
  }
  });
}
</script>
<!-- automation Form end -->
<!-- fabrication Form start -->
<script>
if ($("#main_form").length > 0) {
$("#main_form").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
  email: {
    required: true,
    maxlength: 100
  },
  pump: {
    required: true,
    maxlength: 50,
  },
  address: {
    required: true,
    maxlength: 100
  },  
  mobile: {
    required: true,
    maxlength: 300
  },  
  problem_since: {
    required: true,
    maxlength: 300
  }, 
  description: {
    required: true,
    maxlength: 300
  },    
  },
  messages: {
  name: {
    required: "Please Enter Name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please Enter Email",
    maxlength: "Your name maxlength should be 100 characters long."
  },
  pump: {
    required: "Please Enter Pump",
    maxlength: "The email name should less than or equal to 50 characters",
  },
  address: {
    required: "Please Enter Address",
    maxlength: "Your subject maxlength should be 100 characters long."
  },    
  mobile: {
    required: "Please Enter Mobile No.",
    maxlength: "Your subject maxlength should be 10 characters long."
  },    
  problem_since: {
    required: "Please Enter Problem",
    maxlength: "Your subject maxlength should be 100 characters long."
  },   
  description: {
    required: "Please Enter Description ",
    maxlength: "Your description  maxlength should be 300 characters long."
  },    
  
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);
  $.ajax({
    url: "{{url('save')}}",
    type: "POST",
    data: $('#main_form').serialize(),
    success: function( response ) {
      $('#submit').html('Submit');
      $("#submit"). attr("disabled", false);
      alert('Fabrication Form has been submitted successfully');
      document.getElementById("main_form").reset(); 
    }
   });
  }
  });
}
</script>
<!-- fabrication Form end -->