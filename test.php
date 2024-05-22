<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Của Tôi</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <header>
        <div class="container">
            <div>
                <img src="logo.png" alt="con cho">
                <h3 class="nameweb">INHG</h3>
                <h1>Trang Web Của Tôi</h1>
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#home">Trang Chủ</a>
                        </li>
                        <li class="nav-item" id="write-journal">
                            <a class="nav-link text-white" href="#products">Nhật ký</a>
                            <ul id="journal-options" class="hidden">
                                <li><a href="journal_detail.php">Xem Nhật Ký</a></li>
                                <li><a href="writing.php">Viết nhật ký</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" id="appointment">
                            <a class="nav-link text-white" href="#contact">Lịch hẹn</a>
                            <ul id="appointment-options" class="hidden">
                                <li><a href="appointment.php">Đặt lịch</a></li>
                                <li><a href="notifications.php">Xem lịch</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <img class="background" src="background.jpg" alt="Mô tả ảnh">

   

    <footer class="bg-dark text-white py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <img src="logo.png" alt="Logo" height="40">
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="#home">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#about">Về Chúng Tôi</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#services">Dịch Vụ</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Liên Hệ</a></li>
                </ul>
                <div class="social-icons">
                    <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white mr-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <p class="text-center mt-3">&copy; 2024 Công ty của bạn. Bản quyền đã được bảo lưu.</p>
        </div>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="SCRIPT.js"></script>
    <script src="background.js"></script>
</body>

</html>
