
     
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ ( 'assets/css/style.css' )}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Web Aplication</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" style="height: 90px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
                @guest
                  
                @else
                    <li class="nav-item">
                    <button type="button" class="btn "><a class="nav-link" href="{{ route('logout') }}">Logout</a></button>
                    </li>
                @endguest
                <li class="nav-item">
                <button type="button" class="btn "><a class="nav-link" href="{{ route('home') }}">Home</a></button>
                </li>
            </ul>
  
  </div>
  </div> 
</nav>

@yield('content')
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
                    $(".table_test").hide();
                    $(eleBox).show();
                });
            });
        </script>
 <script type="text/javascript">
            $(document).ready(function () {
                $("#skill_dropdown_3").change(function () {
                    var inputVal = $(this).val();
                    var eleBox = $("." + inputVal);
                    $(".table_test_2").hide();
                    $(eleBox).show();
                });
            });
</script>