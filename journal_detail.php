<?php include 'header.html'; ?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Nhật ký</title>
    
</head>
<body>
   
<div class="content">
    <div class="container-detail">
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

        $username = $_SESSION["username"];

        // Truy vấn SQL để lấy các tiêu đề từ bảng journals dựa trên tên đăng nhập của người dùng
        $sql = "SELECT id, title FROM journals WHERE username='$username'";
        $result = mysqli_query($con, $sql);

        // Kiểm tra xem có bất kỳ tiêu đề nào được tìm thấy không
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Nhật ký của bạn</h2>";
            // Hiển thị các tiêu đề và nút "Xem chi tiết" tương ứng trong bảng form
            echo "<form class='journal-form' action='view_journal.php' method='GET'>";
            echo "<table>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
                echo "<td><button type='submit' name='id' value='" . $row['id'] . "'>Xem chi tiết</button></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</form>";
        } else {
            echo "<p>Không có nhật ký nào cho tài khoản của bạn.</p>";
        }

        // Đóng kết nối CSDL
        mysqli_close($con);
        ?>
    </div>
</div>

</body>
<link rel="stylesheet" href="journal-detail.css">
</html>
<?php include 'footer.html'; ?>
