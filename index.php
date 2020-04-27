<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MinhAn Motel</title>
	<link rel="stylesheet" type="text/css" href="css/style-images.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
</head>
<body>
    <!-- Navigation -->
    <!-- Header -->
    <!----------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      	<div class="container">
	        <a class="navbar-brand" href="index.php">
	        	<img class="imgLogo" src="images/logo1.png">
	        </a>
	        <div class="collapse navbar-collapse" id="navbarResponsive">

	          	<ul class="navbar-nav ml-auto">
	            	<!--<li class="nav-item"> -->
	              	<div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Tìm kiếm.." name="search-bar" style=";padding-left:15px;border-top-left-radius:8px;border-bottom-left-radius:8px">
                        <button type="submit" style="border-top-right-radius:8px;border-bottom-right-radius:8px;float:right;background-color: white">
                          <img style=" width:21px;height:21px;"
                          src="images/find-icon.jpg">
                        </button>
                    </form>
                  </div>

                <?php
                  if (isset($_SESSION['name'])) {//hien ten nguoi dung khi da dang nhap

                    if ($_SESSION['name']=="admin"){
                      ob_start();
                      echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
                    }
                ?>
                    <a class="nav-link" href="Customer.php">
                    <?php echo $_SESSION['name']; ?>
                    </a>

                    <a class="nav-link" href="Logout.php">
                      Đăng Xuất
                    </a>
                <?php
                  }
                ?>

                <?php
                 if (!isset($_SESSION['name'])){//hien dang nhap va dang ki khi chua co dang nhap
                ?>
                    <a class="nav-link" href="Login.php">Đăng Nhập</a>
                      
                    <a class="nav-link" href="Register.php">Đăng Kí</a>
                <?php
                  }
                ?>

	          	</ul>
	        </div>
      	</div>
    </nav>
    <!---------------------------------------------------------------------->
    <!-- Page Content -->
    <!---------------------------------------------------------------------->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4" style="text-align: center;text-shadow:2px 2px 2px black"><b>MinhAn Motel</b></h1>
          <div class="list-group">
              <a href="CheckRent.php" class="list-group-item">Kiểm Tra Phí Tháng</a>
              <a href="SharedRoom.php" class="list-group-item">Thông Tin Các Phòng Thuê Chung</a>
              <a href="FullRentRoom.php" class="list-group-item">Thông Tin Các Phòng Thuê Nguyên Căn</a>
              <a href="ContactUs.php" class="list-group-item">Thông Tin Liên Hệ</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images1/bigPicture6.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images1/bigPicture5.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images1/bigPicture7.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <h3 align="center"><b>CÁC QUY ĐỊNH VÀ LUẬT LỆ CỦA PHÒNG TRỌ</b></h3>
          <div class="row">
            <p><b>1. </b>Tự bảo quản tài sản cá nhân, <b>chủ nhà không chịu trách nhiệm</b> nếu xảy ra sự cố mất mát do lỗi sơ xuất hoặc cố ý của người thuê.</p>
            <p><b>2. </b><b>Không được để rác và những vật dụng ngoài hành lang khi không được sự đồng ý của bên cho thuê</b>. Rác mang xuống phải để đúng giờ và đúng nơi quy định. trước khi ký Hợp đồng này, bên cho thuê đã thông báo giờ bỏ rác và nơi để rác để người thuê phòng nắm rõ.</p>
            <p><b>3. </b>Người bên thuê phòng chỉ được phép sữ dụng bếp từ, bếp điện nấu ăn. <b>Nghiêm cấm sử dụng bếp ga trong phòng</b>.</p>
            <p><b>4. </b>Hoàn toàn chịu trách nhiệm trước pháp luật về người và của khi có hỏa hoạn xảy ra trong khu vực thuê xuất phát từ bất cứ lý do gì gây ra sự cố cháy nổ, hỏa hoạn.</p>
            <p><b>5. </b>Không có hành động gây mất trật tự, tụ tập bạn bè về phòng gây ồn ào làm ảnh hưởng đến các phòng khác trong nhà.</p>
            <p><b>6. </b>Không được nhượng phòng cho thuê cho người khác.</p>
            <p><b>7. </b>Không tàng trữ và sử dụng: các thiết bị gây cháy nổ, chất độc, chất nổ, vũ khí, ma túy, chất kích thích và các chất cấm khác theo quy định của pháp luật.</p>
            <p><b>Để kham khảo và biết thêm về các điều khoản và luật lệ thuê phòng, xin vui lòng liên hệ với quản lí.</b></p>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  


    <!--------------------------------------------------------------------------->
    <!-- Footer -->
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="m-0 text-center text-white"><b>Chăm sóc khách hàng</b></p>
            <p class="m-0 text-center text-white">Hotline: 1900 6017</p>
            <p class="m-0 text-center text-white">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết</p>
            <p class="m-0 text-center text-white">Email hỗ trợ: hoidap@minhanmotel.vn</p>
          </div>
          <div class="col-lg-3">
            <p class="m-0 text-center text-white"><b>CÔNG TY TNHH MinhAn</b></p>
            <p class="m-0 text-center text-white">Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008 cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</p>
            <p class="m-0 text-center text-white">Địa Chỉ: Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, TPHCM.</p>
          </div>
          <div class="col-lg-3">
            <p class="m-0 text-center text-white"><b>MBC Việt Nam</b></p>
            <p class="m-0 text-center text-white">Giới Thiệu</p>
            <p class="m-0 text-center text-white">Tiện Ích </p>
            <p class="m-0 text-center text-white">Thẻ Quà Tặng </p>
            <p class="m-0 text-center text-white">Tuyển Dụng </p>
          </div>
          <div class="col-lg-3">
            <p class="m-0 text-center text-white"><b>Điều khoản sử dụng</b></p>
            <p class="m-0 text-center text-white">Điều Khoản Chung</p>
            <p class="m-0 text-center text-white">Điều Khoản Giao Dịch</p>
            <p class="m-0 text-center text-white">Chính Sách Thanh Toán</p>
            <p class="m-0 text-center text-white">Chính Sách Bảo Mật</p>
          </div>
        </div>
        &nbsp;
      </div>
      <!-- /.container -->
    </footer>

    <!---------------------------------------------------------------------------->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>