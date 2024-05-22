<?php include 'header.html'; ?>



<?php

session_start();

if (!isset($_SESSION["username"])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đặt Lịch Hẹn</title>
    <link rel="stylesheet" href="appointment.css">
</head>
<body>
    <h2>Đặt Lịch Hẹn</h2>
    <form class="appointment-form" action="save_appointment.php" method="POST">
        <label for="date">Ngày hẹn:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <button type="submit">Đặt lịch</button>
    </form>
</body>
</html>

<?php include 'footer.html'; ?>
