<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(( 'assets/css/style.css' )); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Web Aplication</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
  <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" style="height: 90px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                    <button type="button" class="btn "><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></button>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                    <button type="button" class="btn "><a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a></button>
                    </li>
                <?php endif; ?>
                    </ul>
        </div>
    </div> 
</nav>
<?php /**PATH C:\Biodiesel\resources\views/Biodiesel/header.blade.php ENDPATH**/ ?>