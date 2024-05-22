<?php
session_start();

if (!isset($_SESSION["username"])) {
    header('Location: login.php');
    exit();
}

// Kết nối CSDL
$con = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến server" . mysqli_error($con));
$csdl = mysqli_select_db($con, "mydb") or die("Không thể chọn được csdl" . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8'");

// Lấy dữ liệu từ form
$username = $_SESSION["username"];
$date = $_POST['date'];
$description = $_POST['description'];

// Lưu thông tin lịch hẹn vào CSDL
$sql = "INSERT INTO appointments (username, date, description) VALUES ('$username', '$date', '$description')";
if (mysqli_query($con, $sql)) {
    echo "Đặt lịch hẹn thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($con);
}

// Đóng kết nối CSDL
mysqli_close($con);
?>
