<!DOCTYPE html>
<html lang="vi">

<head>

</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Của Tôi</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
    <link rel="stylesheet" href="css/STYLESheader.css">
</head>

<body >
    

<img class="background" src="image/tr.webp" alt="Mô tả ảnh">

<header>
    <div class="container">
      <!--   <div class="header-overlay"></div> Thêm phần tử overlay -->
        <div>
            <img src="logo.png" alt="con cho">
            <h3 class="nameweb">INHG</h3>
            <h1>Homepage of ING</h1>
           

<section class="search-h" id="trangchu">
    <!---------------trang chu timkiem------------------>
    <div class="search-bar">
        <i class="uil uil-search"></i>
        <input type="search" id="searchInput" placeholder="tìm kiếm" class="heo">
    </div>
    <div id="suggestions" class="suggestions"></div>
</section>
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










<div class="intro-container">
    <fieldset>
    <h1>Chào mừng bạn đến với IHNGH!</h1>
    
    <p>IHNG được thiết kế để trở thành người bạn đồng hành đáng tin cậy của bạn trong việc ghi lại những khoảnh khắc quan trọng và quản lý thời gian một cách hiệu quả. Với giao diện thân thiện và tính năng đa dạng, chúng tôi cam kết mang lại cho bạn trải nghiệm tuyệt vời nhất.</p>
    <h2>Nhật Ký Cá Nhân</h2>
    <div class="cho">
    <img src="image/nk1.jpg" alt="Giới thiệu hình ảnh" class="intro-image">
    <img src="image/nk2.jpg" alt="Giới thiệu hình ảnh" class="intro-image">
</div>
    <ul>
        <li><strong>Ghi Chép Mỗi Ngày:</strong> Bạn có thể dễ dàng viết nhật ký hàng ngày, ghi lại những suy nghĩ, cảm xúc và những sự kiện đặc biệt trong cuộc sống của mình. Chúng tôi cung cấp các mẫu nhật ký đa dạng để bạn lựa chọn, từ nhật ký truyền thống đến nhật ký theo chủ đề (sức khỏe, du lịch, học tập, v.v.).</li>
        <li><strong>Bảo Mật & Riêng Tư:</strong> Bảo mật thông tin cá nhân của bạn là ưu tiên hàng đầu của chúng tôi. Tất cả các bài viết nhật ký đều được mã hóa và chỉ bạn mới có thể truy cập được.</li>
        <li><strong>Tích Hợp Hình Ảnh & Video:</strong> Làm phong phú thêm bài viết của bạn bằng cách thêm hình ảnh và video. Bạn có thể lưu giữ những kỷ niệm đẹp một cách sinh động nhất.</li>
    </ul>
    <h2>Đặt Lịch Hẹn</h2>
    <div class="cho">
    <img src="image/lh1.jpg" alt="Giới thiệu hình ảnh" class="intro-image">
    <img src="image/lh2.jpg" alt="Giới thiệu hình ảnh" class="intro-image">
    </div>
    <ul>
        <li><strong>Quản Lý Thời Gian Hiệu Quả:</strong> Với tính năng đặt lịch hẹn, bạn có thể dễ dàng quản lý và sắp xếp các cuộc hẹn, sự kiện và công việc hàng ngày. Không bao giờ lo lắng về việc quên một cuộc hẹn quan trọng nữa!</li>
        <li><strong>Nhắc Nhở Thông Minh:</strong> Hệ thống nhắc nhở thông minh sẽ gửi thông báo cho bạn trước mỗi cuộc hẹn, giúp bạn luôn sẵn sàng và đúng giờ.</li>
        <li><strong>Đồng Bộ Hoá Với Lịch Số:</strong> Tích hợp dễ dàng với các ứng dụng lịch khác như Google Calendar, Outlook, giúp bạn quản lý thời gian một cách thuận tiện nhất.</li>
    </ul>
    </fieldset>
</div>



<section id="services" class="container mt-5">
    <h2>Chức Năng Chính</h2>
    <div class="row">
        <div class="col-md-3">
            <img src="image/vnk.png" alt="Viết Nhật Ký" class="service-img">
            <h3>Viết Nhật Ký</h3>
            <p>Chức năng này cho phép người dùng tạo và quản lý các bản ghi, ghi lại các sự kiện hoặc ghi chú hàng ngày về công việc, sức khỏe, hoặc mục tiêu cá nhân.</p>
        </div>
        <div class="col-md-3">
            <img src="image/xtd.png" alt="Xem Nhật Ký" class="service-img">
            <h3>Xem Nhật Ký</h3>
            <p>Người dùng có thể xem lại các bản ghi đã tạo trong nhật ký của mình. Chức năng này giúp họ theo dõi tiến triển, đánh giá hoạt động và phát hiện xu hướng trong cuộc sống hàng ngày.

</p>
        </div>
        <div class="col-md-3">
            <img src="image/dlh.png" alt="Đặt Lịch Hẹn" class="service-img">
            <h3>Đặt Lịch Hẹn</h3>
            <p>Chức năng này cho phép người dùng lên kế hoạch và đặt lịch hẹn cho các sự kiện quan trọng như cuộc họp, bác sĩ, hoặc các hoạt động giải trí. Họ có thể thiết lập thời gian, địa điểm và nhắc nhở.</p>
        </div>
        <div class="col-md-3">
            <img src="image/xlh.png" alt="Xem Lịch Hẹn" class="service-img">
            <h3>Xem Lịch Hẹn</h3>
            <p> Người dùng có thể xem và quản lý tất cả các lịch hẹn đã đặt trong một giao diện dễ sử dụng. Chức năng này giúp họ tổ chức thời gian hiệu quả và tránh việc trùng lặp lịch trình.</p>
        </div>
    </div>
</section>




    
    <main class="mt-4">
        
        <section id="products" class="container mt-5">
            <h2 class="section-title">Sản Phẩm</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/c1.png" class="card-img-top" alt="Sản Phẩm 1">
                        <div class="card-body">
                            <h3 class="card-title">Bảng tiêu đề nhật ký đã viết của một người dùng</h3>
                            <p class="card-text">Sao khi viết và đăng nhật ký vào trang web, bạn có thể xem lại danh mục tiêu đề, và thông qua tiêu đề bạn có thể xem lại kĩ niệm của mình</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/c2.png" class="card-img-top" alt="Sản Phẩm 2">
                        <div class="card-body">
                            <h3 class="card-title">Một trang nhật ký bất kỳ đã được lưu</h3>
                            <p class="card-text">Bạn có thể thỏa sức ghi lại những kỹ niệm, mà không cần lo lắng về vấn đề riêng tư, vì nó được bảo mật tuyệt đối, chỉ người viết mới có quyền truy cập.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/c3.png" class="card-img-top" alt="Sản Phẩm 2">
                        <div class="card-body">
                            <h3 class="card-title">Một nhật ký khác</h3>
                            <p class="card-text">Viết nhật ký với số lượng không giới hạn, bạn không cần tốn tiền để mua thêm dung lượng, mà còn có thể thêm ảnh và video.</p>
                        </div>
                    </div>
                </div>
                <!-- Thêm nhiều sản phẩm khác ở đây -->
            </div>
        </section>
    </main>

 

    

    <section id="portfolio" class="container mt-5">
        <h2>Đặt thông báo cho gmail của bạn</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/ngay.jpeg" class="card-img-top" alt="Mục Portfolio 1">
                    <div class="card-body">
                        <h3 class="card-title">Thông báo theo ngày( Tính năng đang phát triển).</h3>
                        <p class="card-text">Lịch hẹn sẽ được nhắc nhở vào 8:00 am mối ngày.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/tuan.jpeg" class="card-img-top" alt="Mục Portfolio 2">
                    <div class="card-body">
                        <h3 class="card-title">Thông Báo theo tuần( Tính năng đang phát triển).</h3>
                        <p class="card-text">Mỗi thứ 2 đầu tuần bạn sẽ nhận được một bàng ghi chú công việt mới( Tính năng đang phát triển).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/banbe.jpeg" class="card-img-top" alt="Mục Portfolio 3">
                    <div class="card-body">
                        <h3 class="card-title">Thông báo dó người khác liên kết cho bạn( Tính năng đang phát triển).</h3>
                        <p class="card-text">Với những tài khoảng liên kết với nhau, có thể tạo lịch hẹn cho nhau.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="container mt-5">
        <h2>Nhận Xét</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="image/cothanh.png" class="rounded-circle mb-3" alt="Khách hàng 1">
                <p>"Xịn! 10 điểm."</p>
                <cite>Nguyễn Ngọc Đan Thanh</cite>
            </div>
            <div class="col-md-4 text-center">
                <img src="image/diemmy.png" class="rounded-circle mb-3" alt="Khách hàng 2">
                <p>"Trang web rất ý nghĩa, tôi có thể liên kết với bemy."</p>
                <cite>Nguyễn Thị Diểm My</cite>
            </div>
            <div class="col-md-4 text-center">
                <img src="image/kiet.png" class="rounded-circle mb-3" alt="Khách hàng 3">
                <p>"Very good."</p>
                <cite>Huỳnh Quốc Kiệt</cite>
            </div>
        </div>
    </section>

    <section id="contact" class="container mt-5 mb-5">
        <h2>Liên Hệ</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                <p>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://maps.app.goo.gl/m8wBmnr52LLsWAQL6">Số 126 Nguyễn Thiện Thành - Khóm 4, Phường 5, Thành phố Trà Vinh, tỉnh Trà Vinh</a>
            </p>
            
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-envelope fa-2x mb-2"></i>
                <p>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://mail.google.com/">nguyenleduydhtv@gmail.com</a>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-phone fa-2x mb-2"></i>
                <p>0353265654</p>
            </div>
        </div>
        <form action="#" method="post" class="mt-4">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Tên của bạn" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email của bạn" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Tin nhắn của bạn" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi Tin Nhắn</button>
        </form>
    </section>

<footer>
    <div class="containerft">
        <div class="footer-section">
            <div class="row">
                <!-- Phần liên kết -->
                <div class="col">
                    <img src="logo.png" alt="Logo" height="40">
                </div>
                <div class="col">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link text-white" href="#home">Trang Chủ</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#about">Về Chúng Tôi</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#services">Dịch Vụ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="divider"></div> <!-- Đường kẻ phân tách -->
        <div class="footer-section text-md-rightft">
            <!-- Phần liên hệ -->
            <div class="social-icons">
                <a href="#"><img src="image/facebook" alt="Facebook"></a>
                <a href="#"><img src="image/x.jpeg" alt="Twitter"></a>
                <a href="#"><img src="image/intagram.jpeg" alt="Instagram"></a>
                <a href="#"><img src="image/link.jpeg" alt="LinkedIn"></a>
            </div>
            <p>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://maps.app.goo.gl/m8wBmnr52LLsWAQL6">Số 126 Nguyễn Thiện Thành - Khóm 4, Phường 5, Thành phố Trà Vinh, tỉnh Trà Vinh</a>
            </p>
            
            <p><i class="fas fa-phone"></i> 0353265654</p>
            <p><i class="fas fa-envelope"></i> nguyenleduydhtv@gmail.com</p>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
    <script src="SCRIPT.js"></script>
    <script src="background.js"></script>
    
  </body>
  
  <style>
    
/* Reset CSS */
body, h1, h2, h3, h4, h5, h6, p, ul, ol, li, form, input, textarea, button {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Arial', sans-serif; /* Sử dụng font chữ hiện đại */
}
.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow-y: scroll; /* Kích hoạt thanh trượt dọc */
    
    width: 100%;
    height: 100%;
}


/* CSS for Header */
header {
     background-color: rgba(0, 0, 0, 0.5); /* Lớp phủ màu đen với độ mờ 50% */
    position: relative;
    height: 30vh; /* Chiều cao của header */
    background-image: url('image/cuuu.jpg');
    
    background-size: cover;
    background-position: center;
    text-align: center;
   
}
.header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 200vh;
    height: 100%;
    background-color: rgba(0, 0, 0.5, 0.5); /* Màu nền đen với độ mờ 70% */
    z-index: -1; /* Đảm bảo nằm trên header content */
    margin-left: -400px;
}


.header-background {
 
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    filter: blur(10px); /* Hiệu ứng mờ */
    transition: filter 0.5s ease; /* Thời gian và hiệu ứng chuyển đổi */
}


.container {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    z-index: 1;
}

header img {
    top: 20px;
    width: 50px; /* Điều chỉnh kích thước theo ý bạn */
    position: absolute;
    left: -80px;
}

header h3 {
    top: 20px;
    margin-left:0px;
    position: absolute;
    font-size: 2em;
    color: rgb(247, 253, 253);
    left: 0px;
}

header h1 {
    font-size: 3em;
    color:  rgb(247, 253, 253);
    text-align: center;
}

nav {
    position: absolute;
    bottom: 10px;
    right: -80px;
    z-index: 1; /* Đảm bảo menu hiển thị trên phần background */
    top: 20px;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
}

nav ul li {
    position: relative; /* Cần thiết để định vị menu con */
    margin-right: 10px;
}

nav ul li a {
    color:  rgb(247, 253, 253);
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s; /* Hiệu ứng màu chữ khi hover */
}

nav ul li a:hover {
    color: rgb(247, 253, 253); /* Màu vàng khi hover */
}

/* Ẩn các menu con theo mặc định */
.hidden {
    display: none;
}







/* Hiển thị menu con khi rê chuột vào phần tử cha */
#write-journal:hover #journal-options,
#appointment:hover #appointment-options {
    display: block;
}

/* Đảm bảo các menu con được hiển thị dưới mục cha */
#journal-options,
#appointment-options {
    position: absolute;
    background-color: #fff; /* Màu nền của menu con */
    box-shadow: 0 8px 16px rgba(0,0,0,0.2); /* Đổ bóng cho menu con */
    margin-top: 8px;
    padding: 8px;
    border-radius: 4px;
    min-width: 150px; /* Đặt chiều rộng tối thiểu cho menu con */
}

#journal-options li,
#appointment-options li {
    list-style: none;
}

#journal-options a,
#appointment-options a {
    display: block;
    padding: 8px 16px;
    text-decoration: none;
    color: #333; /* Màu chữ của menu con */
}

#journal-options a:hover,
#appointment-options a:hover {
    background-color: #ddd; /* Màu nền khi rê chuột vào tùy chọn */
}




.card-body {
    padding: 15px;
    border-radius: 5px; /* Tùy chọn: bo tròn các góc */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tùy chọn: thêm bóng để nội dung nổi bật hơn */
    color: #000; /* Màu chữ đen để dễ đọc trên nền trong suốt */
    background-color: rgba(255, 255, 255, 0.7); /* Màu trắng trong suốt */
}
.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.5); /* Màu trắng trong suốt */
    pointer-events: none; /* Ngăn card-overlay chiếm dụng sự kiện */
}
/* Đảm bảo văn bản và các phần tử bên trong vẫn rõ ràng */
.card-title,
.card-text {
    color:red; /* Màu chữ đen để dễ đọc trên nền trong suốt */
}









/* CSS for Contact section */
#contact {
    
padding: 50px 0;
background-color:#e29797;
text-align: center;
}


.contact-info {
margin-bottom: 30px;
}

.contact-form {
max-width: 600px;
margin: 0 auto;

}

.contact-form h3 {
margin-bottom: 20px;
font-size: 24px;
color: #333; /* Màu chữ đậm */
}

.contact-form label {
font-weight: bold;
margin-bottom: 10px;
}

.contact-form input,
.contact-form textarea {
width: 100%;
padding: 10px;
margin-bottom: 20px;
border: 1px solid #ccc;
border-radius: 5px;
}

.contact-form button {
padding: 10px 20px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
}

.contact-form button:hover {
background-color: #45a049;
}

/* Hiệu ứng xuất hiện */
@keyframes fadeIn {
from {
opacity: 0;
}
to {
opacity: 1;
}
}

.fade-in {
animation: fadeIn 1s ease-in-out;
}

/* Hiệu ứng khi rê chuột */
.hover-effect {
transition: transform 0.3s;
}

.hover-effect:hover {
transform: scale(1.1); /* Phóng to phần tử khi hover */
}


    
    
/* Định dạng chung cho footer */
footer {
   
    bottom: 0;
    width: 100%;
    background-color:#d16767;
    color: #fff;
    padding: 20px 0;
    color:  rgb(247, 253, 253);
}

/* Định dạng cho phần container */
.containerft {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
   
}

/* Định dạng cho phần liên kết và liên hệ */
.footer-section {
    flex: 1; /* Chia đều chiều rộng giữa hai phần */
    margin-right: 20px;
    text-align: center;
   
}

/* Định dạng cho phần liên kết */
.nav li {
    display: inline-block;
    margin-right: 20px;
}

.nav li:last-child {
    margin-right: 0;
}

.nav-link {
    color: rgb(247, 253, 253);
    text-decoration: none;
}

.nav-link:hover {
    color: #ffd700;
}

/* Định dạng cho phần liên hệ */
.text-md-rightft {
    margin-left: 20px;
    text-align: center;
    color:  rgb(247, 253, 253);
}

/* Định dạng cho biểu tượng mạng xã hội */
.social-icons {
   
    display: flex;
    justify-content: center;
    align-items: center;
    
    
}

.social-icons a img {
    width: 30px;
    height: auto;
    margin-left: 10px; /* Khoảng cách giữa các biểu tượng */
    
}

/* Định dạng cho đường kẻ phân tách */
.divider {
    border-left: 1px solid #fff;
    height: 40px; /* Chiều cao tùy chỉnh */
    margin: 0 20px; /* Khoảng cách với hai phần khác */
    left: 50%;
}













.intro-container {
    background-color: rgba(0, 0, 0, 0.1); /* Màu nền đen với độ mờ 70% */
    margin-top: 30px;
    width: 100%;
    height: 80%;
    padding: 20px;
  
  
   
    font-family: Arial, sans-serif;
}

.intro-container h1 {
    font-size: 2.5em;
    color: #003366;
    text-align: center;
    margin-bottom: 20px;
}

.intro-container .intro-image {
    margin-top: 20px;
    width: 100vh;
    height: 80%;
    border-radius: 10px;
    margin-bottom: 20px;
}

.intro-container p {
    font-size: 1.2em;
    color: #34495e;
    line-height: 1.6;
    text-align: justify;
    margin-bottom: 20px;
}

.intro-container h2 {
    text-align: center;
    font-size: 1.8em;
    color: #2980b9;
    margin-top: 20px;
    margin-bottom: 10px;
}

.intro-container ul {
    list-style: none;
    padding: 0;
}

.intro-container ul li {
    font-size: 1.1em;
    color: #34495e;
    line-height: 1.6;
    margin-bottom: 10px;
}

.intro-container ul li strong {
    color: #2c3e50;
}




.image-grid {
   
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px; /* Khoảng cách giữa các ảnh */
    margin-bottom: 20px;
}

.intro-image {
    
    flex: 1 1 calc(25% - 10px); /* Mỗi ảnh chiếm 25% chiều rộng, trừ khoảng cách */
    max-width: calc(25% - 10px);
    height: auto; /* Giữ tỉ lệ khung hình của ảnh */
    
    border-radius: 10px;
}
.cho{
  margin-left: 35%;
}
















/* CSS cho phần Sản Phẩm */
#products {
    padding: 40px 0;
}

.section-title {
    color: #333;
    font-size: 32px;
    text-align: center;
    margin-bottom: 40px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.card:hover .card-img-top {
    transform: scale(1.05);
}

.card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.card-body {
    padding: 20px;
}

.card-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}

.card-text {
    color: #666;
}





















/* CSS cho phần Dịch Vụ */
#services {
    padding: 40px 0;
}

#services h2 {
    color: #333;
    font-size: 32px;
    text-align: center;
    margin-bottom: 40px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.col-md-3 {
    margin-bottom: 30px;
    padding: 0 15px;
    text-align: center;
}

.service-img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}

h3 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    color: #666;
}














#testimonials {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
}

#testimonials .col-md-4 {
    flex: 1;
    margin: 10px;
}

#testimonials img {
    max-width: 100px; /* Điều chỉnh kích thước tối đa theo chiều rộng */
    max-height: 100px; /* Điều chỉnh kích thước tối đa theo chiều cao */
}

#testimonials p {
    font-size: 16px;
    color: #333;
}

#testimonials cite {
    font-style: normal;
    font-size: 14px;
    color: #666;
}
#testimonials img {
    max-width: 100px; /* Điều chỉnh kích thước tối đa theo chiều rộng */
    max-height: 100px; /* Điều chỉnh kích thước tối đa theo chiều cao */
}









/*------------chỉnh thanh search----------*/

body .search-h{
    
    position: relative;
    color: #fff;
    margin-top: 30px;
}

.search-h .search-bar {
   background-color: #d16767;
    display: flex;
    align-items: center;
    background: hsla(0, 0%, 41%, 0.4);
    border-radius: 2rem;
    padding: 0.2rem 1rem;
    color: #000;
    width: 100%;
    text-align: center;
    height: 30px;
    margin-top: 4px;
    font-size: 0.9rem;

}

.search-h .search-bar input[type="search"] {
    color: #000;
  
    width: 100%; 
    font-size: 0.9rem;
    border: none; 
    outline: none;
    margin-left: 0.5rem;
}

    /* CSS cho phần tử input */
    .heo {
        color: white; /* Đặt màu chữ thành trắng */
    }
</style>

  </style>
<script src="amazon.js"></script>
</html>
