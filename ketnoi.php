<?php
    $con = mysqli_connect("localhost", "root", "" )or die ("Không thể kết nối đến server" .mysqli_error());
    $csdl = mysqli_select_db($con, "mydb") or die ("Không thể chọn được csdl" .mysqli_error());
    mysqli_query($con, "SET NAMES 'utf8'");
    ?>