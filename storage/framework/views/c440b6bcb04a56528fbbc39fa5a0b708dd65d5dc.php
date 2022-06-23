<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="mySidenav" class="sidenav">
 
  <!-- <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->

  <div class="admin_list">
  <a href="javascript:void(0)" class="closebtn mb-5" onclick="closeNav()" style="margin-top:-50px;">&times;</a>
    <ul>
        <li class="home_dash"><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-home mr-4"></i>Dashboard</a> </li>
        <li><a href="#"><i class="fa fa-user-circle mr-4"></i>About</a> </li>
        <li><a href="<?php echo e(route('biodiesel')); ?>"><i class="fa fa-user-circle mr-4"></i>Add User</a> </li>
        <li><a href="#"><i class="fa fa-user-circle mr-4"></i> Login</a></li>
       
  </ul>

                       
  </div>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script><?php /**PATH C:\Laravel\Biodiesel\resources\views/auth/nav.blade.php ENDPATH**/ ?>