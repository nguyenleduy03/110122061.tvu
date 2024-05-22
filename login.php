
<?php
session_start();

$con = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến server" . mysqli_error($con));
$csdl = mysqli_select_db($con, "mydb") or die("Không thể chọn được csdl" . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8'");

$user = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM users WHERE username='" . $user . "' AND password='" . $pass . "'";
$result = mysqli_query($con, $sql) or die("Không thể mở bản users: " . mysqli_error($con));

if (mysqli_num_rows($result) > 0) {
    $_SESSION["username"] = $user;
    header('Location: amazon.php');
} else {
    echo "Tên đăng nhập hoặc mật khẩu không đúng!";
}

$con->close();



/*
<?php -->
session_start();

include("ketnoi.php");

$user = $_POST["username"];
$pass = $_POST["password"];

// Tạo truy vấn SQL để kiểm tra tài khoản
$sql = "SELECT * FROM users WHERE username='" . $user . "' AND password='" . $pass . "'";
$result = mysqli_query($con, $sql) or die ("Không thể mở bản users: " . mysqli_error($con));

if (mysqli_num_rows($result) > 0) {
    $_SESSION["users"] = $user;
    header('Location: welcome.php');
} else {
    echo "Tên đăng nhập hoặc mật khẩu không đúng!";
}

$con->close();
?>
*/


?>




