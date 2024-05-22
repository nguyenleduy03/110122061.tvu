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

// Lấy ID của nhật ký từ URL
$journal_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Truy vấn SQL để lấy nội dung nhật ký dựa trên ID
$sql = "SELECT title, content FROM journals WHERE id='$journal_id' AND username='{$_SESSION['username']}'";
$result = mysqli_query($con, $sql);

// Kiểm tra xem có nhật ký nào được tìm thấy không
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = htmlspecialchars($row["title"]);
    $content = nl2br(htmlspecialchars($row["content"]));
} else {
    $title = "Không tìm thấy nhật ký.";
    $content = "";
}

// Đóng kết nối CSDL
mysqli_close($con);
?>

<div class="main-content-journal">
    <div class="container-journal">
        <h2>Chi tiết nhật ký</h2>
        <div class="journal-details">
            <div class="journal-detail">
                <label for="journal_title">Tiêu đề:</label>
                <p id="journal_title"><?php echo $title; ?></p>
            </div>
            <div class="journal-detail">
                <label for="journal_content">Nội dung:</label>
                <div id="journal_content" class="scrollable-content-journal"><?php echo $content; ?></div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="view_journal.css">
<?php include 'footer.html'; ?>
