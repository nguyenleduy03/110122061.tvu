<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Nền</title>
<link rel="stylesheet" href="STYLES.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="logo">
        <div class="content">
            <h1>INHGNHNAC</h1>
            <p>Đừng để ký ức bị mất đi</p>
        </div>
    </header>
   
    <form action="login.php" method="post">
        <p id="wc-message">Well comback</p>
        <fieldset>
            <label for="tendangnhap">Tên đăng nhập:</label>
            <input type="text" id="tendangnhap" placeholder="" name="username" required><br>
            <label for="matkhau">Mật khẩu</label>
            <input type="password" id="matkhau" placeholder="" name="password" required><!-- Sử dụng type="password" để ẩn mật khẩu -->
            <button type="submit" class="submit-btn">Đăng nhập</button>
        </fieldset>
    </form>
    
    
<div id="container">
    <video id="video" loop autoplay muted>
        <source src="backgrou.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ video.
    </video>
    <div class="overlay"></div>
   
</div>

<script src="SCRIPT.js"></script>
</body>

</html>
