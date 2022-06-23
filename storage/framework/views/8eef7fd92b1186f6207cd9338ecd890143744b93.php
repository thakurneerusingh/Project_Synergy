<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
  </body>
</html>
</head>
<body>
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
</script><?php /**PATH C:\Biodiesel\resources\views/Biodiesel/footer.blade.php ENDPATH**/ ?>