<?php include 'header.html'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Viết Nhật Ký</title>
    <link rel="stylesheet" href="writeeee.css">
</head>
<body>
    <div class="journal-form-container">
        <h2>Viết Nhật Ký</h2>
        <form class="journal-form" method="post" action="save_journal.php">
            <label for="title">Tiêu đề:</label>
            <input type="text" id="title" name="title" required><br><br>
            <label for="content">Nội dung:</label>
            <textarea id="content" name="content" required></textarea><br><br>
            <label for="image">Đường dẫn ảnh (tùy chọn):</label>
            <input type="text" id="image" name="image"><br><br>
            <label for="video">Đường dẫn video (tùy chọn):</label>
            <input type="text" id="video" name="video"><br><br>
            <input type="submit" value="Lưu Nhật Ký">
        </form>
    </div>
</body>
</html>
<?php include 'footer.html'; ?>

<!--


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết Nhật Ký</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="STYLESwriting.css">
</head>
<body>

<header class="bg-dark text-white py-4">
    <div class="container">
        <h1>Trang Web Của Tôi</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="#">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Nhật Ký</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Lịch</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Liên Hệ</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container my-4">
    <h2 class="mb-4">Viết Nhật Ký</h2>
    <form action="save_journal.php" method="post">
        <div class="form-group">
            <label for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề" required>
        </div>
        <div class="form-group">
            <label for="content">Nội dung:</label>
            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Nhập nội dung" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Thêm Ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="video">Thêm Video:</label>
            <input type="file" class="form-control-file" id="video" name="video">
        </div>
        <button type="submit" class="btn btn-primary">Đăng Nhật Ký</button>
    </form>
</main>

<footer class="bg-dark text-white py-3">
    <div class="container text-center">
        <p>&copy; 2024 Trang Web Của Tôi. Bản quyền đã được bảo lưu.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
-->


