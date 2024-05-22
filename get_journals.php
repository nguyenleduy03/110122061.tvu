<!-- get_journals.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Nhật Ký</title>
</head>
<body>
    <h1>Danh Sách Nhật Ký</h1>

    <?php
    // Kết nối đến cơ sở dữ liệu
    $servername = "localhost";
    $username = "username"; // Thay username bằng username của bạn
    $password = "password"; // Thay password bằng password của bạn
    $database = "myDB";

    $conn = new mysqli($servername, $username, $password, $database);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Truy vấn để lấy danh sách tiêu đề nhật ký
    $sql = "SELECT id, title FROM journals";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Hiển thị tiêu đề nhật ký dưới dạng danh sách
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='journal_detail.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Không có nhật ký nào.";
    }

    // Đóng kết nối
    $conn->close();
    ?>
</body>
</html>
