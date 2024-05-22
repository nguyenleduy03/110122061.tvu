<?php include 'header.html'; ?>

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

// Lấy ngày hiện tại
$current_date = date('Y-m-d');
$username = $_SESSION["username"];

// Truy vấn để lấy các lịch hẹn của hôm nay
$sql_today = "SELECT date, description FROM appointments WHERE username='$username' AND date='$current_date'";
$result_today = mysqli_query($con, $sql_today);

// Truy vấn để lấy các lịch hẹn sắp tới
$sql_upcoming = "SELECT date, description FROM appointments WHERE username='$username' AND date > '$current_date'";
$result_upcoming = mysqli_query($con, $sql_upcoming);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông Báo Lịch Hẹn</title>
    
</head>
<body>
    <div class="notification-container">
        <h2>Thông báo cho hôm nay</h2>
        <?php
        if (mysqli_num_rows($result_today) > 0) {
            while ($row = mysqli_fetch_assoc($result_today)) {
                echo "<p>" . htmlspecialchars($row['date']) . ": " . htmlspecialchars($row['description']) . "</p>";
            }
        } else {
            echo "<p>Không có lịch hẹn nào hôm nay.</p>";
        }
        ?>

        <h2>Thông báo sắp tới</h2>
        <?php
        if (mysqli_num_rows($result_upcoming) > 0) {
            while ($row = mysqli_fetch_assoc($result_upcoming)) {
                echo "<p>" . htmlspecialchars($row['date']) . ": " . htmlspecialchars($row['description']) . "</p>";
            }
        } else {
            echo "<p>Không có lịch hẹn sắp tới.</p>";
        }
        ?>

        <br>
        <a href="appointment.php" class="new-appointment-link">Đặt lịch hẹn mới</a>
    </div>
</body>
<link rel="stylesheet" href="notifications.css">
</html>

<?php
// Đóng kết nối CSDL
mysqli_close($con);
?>

<?php include 'footer.html'; ?>
