<?php

session_start();

if (!isset($_SESSION["username"])) {
    header('Location: login.php');
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến server" . mysqli_error($con));
    $csdl = mysqli_select_db($con, "mydb") or die("Không thể chọn được csdl" . mysqli_error($con));
    mysqli_query($con, "SET NAMES 'utf8'");

    $username = $_SESSION["username"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $image = $_POST["image"];
    $video = $_POST["video"];

    $sql = "INSERT INTO journals (username, title, content, image, video) VALUES ('$username', '$title', '$content', '$image', '$video')";
    if (mysqli_query($con, $sql)) {
        $message = "Nhật ký đã được lưu thành công!";
    } else {
        $message = "Lỗi: " . mysqli_error($con);
    }

    $con->close();
}

/*
// Kiểm tra xem có dữ liệu được gửi từ form hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem các trường dữ liệu có tồn tại hay không
    if (isset($_POST['title']) && isset($_POST['content'])) {
        // Lấy dữ liệu từ form
        $title = $_POST['title'];
        $content = $_POST['content'];
        
        // Kiểm tra xem có file hình ảnh được tải lên không
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_name = basename($_FILES['image']['name']);
            move_uploaded_file($image_tmp, 'uploads/' . $image_name);
        }
        
        // Kiểm tra xem có file video được tải lên không
        if(isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
            $video_tmp = $_FILES['video']['tmp_name'];
            $video_name = basename($_FILES['video']['name']);
            move_uploaded_file($video_tmp, 'uploads/' . $video_name);
        }

        // Lưu nhật ký vào cơ sở dữ liệu hoặc tập tin khác tùy thuộc vào logic của bạn
        // ...
        
        echo "Nhật ký đã được lưu thành công!";
    } else {
        echo "Lỗi: Không thể lưu nhật ký!";
    }
}
*/
?>
