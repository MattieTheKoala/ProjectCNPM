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
				<br><br><br>
				<h3 align="center"><b>DANH SÁCH CÁC PHÒNG THUÊ CHUNG</b></h3>
				<br>
		    	<div class="row">
		    		<!-- take out the database -->
		    	<?php 
			    $conn= mysqli_connect("localhost","root","","minhan motel");
			    $sql = "SELECT roomid,roomtype,maxuser,userusing,picture FROM roomdb";
			    $result = $conn->query($sql);
			    
			    	// check every row in database
			    if ($result->num_rows > 0) {
			      	while($row = $result->fetch_assoc()) {
			      		if ($row['roomtype']!=2) {	
                  

			 	?>          
			      	<div class="col-lg-4 col-md-6 mb-4">
		              	<div class="card h-100">
		                  	<img class="card-img-top" height="300" width="42" <?php echo "src='{$row['picture']}'"; ?> alt="imgPoster err">
		                </a>
			                <div class="card-body">
			                  	<h4 class="card-title">
			                  		<p>Tên Phòng: <?php echo "{$row['roomid']}"; ?></p>
			                    	</a>
			                  	</h4>
			                  	<h5 style="color: #f47442">Số người thuê tối đa: <?php echo "{$row['maxuser']}"; ?></h5>
			                  <p class="card-text"></p>
			                </div>
			                <div class="card-footer ">
                      			<a class="btn btn-primary text-white">
                      				Số người đang thuê : <?php echo "{$row['userusing']}"; ?>
                      			</a>
                    		</div>
		              	</div>
		            </div>
			        <?php
			    	}
			      }
			    }
			      $conn->close();
			        ?>
	        	</div>
	        </div>
    	</div>
	</div>
    <!---------------------------------------------------------------------->
    <div class="container">
    	<!-- Write your code here -->
    </div>
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