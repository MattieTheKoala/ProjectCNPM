<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MinhAn Motel- Admin page</title>
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
	        <!--
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	    	-->
	        <div class="collapse navbar-collapse" id="navbarResponsive">

	          	<ul class="navbar-nav ml-auto">
	            	<!--<li class="nav-item"> -->
	              	<div class="search-container">
	                    <form action="/action_page.php">
	                      <input type="text" placeholder="Tìm kiếm.." name="search-bar" style="padding-left:15px;border-top-left-radius:8px;border-bottom-left-radius:8px">
	                        <button type="submit" style="border-top-right-radius:8px;border-bottom-right-radius:8px;float:right;background-color: white">
	                          <img style=" width:21px;height:21px;"
	                          src="images/find-icon.jpg">
	                        </button>
	                    </form>
                  	</div>
	            	<a class="nav-link" href="Logout.php">
                      Đăng Xuất
                    </a>
	          	</ul>

	        </div>
      	</div>
    </nav>
    <br>
    <h1 align="center">WELCOME BOSS</h1>
    <!---------------------------------------------------------------------->
    <!-- Page Content -->
    <!---------------------------------------------------------------------->
    	<!-- Write your code here -->
      <div class="container">
        <h3 align="center"><b>DANH SÁCH CÁC KHÁCH HÀNG ĐANG SỬ DỤNG DỊCH VỤ</b></h3>
        <br>
          <div class="row">
            <!-- take out the database -->
          <?php 
          $conn10= mysqli_connect("localhost","root","","minhan motel");
          $sql10 = "SELECT username,pass,name,request,adminchat,roomtype,roomid,internet,vehicle,water,electric FROM userdb";
          $result10 = $conn10->query($sql10);
          $count=0;
            // check every row in database

          if ($result10->num_rows > 0) {
              while($row = $result10->fetch_assoc()) {
                if ($row['username']!='admin') {  
          ?>          
              <p>- <b>Username:</b><?php echo "'{$row['username']}'"; ?>,<b>Pass:</b><?php echo "'{$row['pass']}'"; ?>, <b>Name:</b><?php echo "'{$row['name']}'"; ?>, <b>Request:</b><?php echo "'{$row['request']}'"; ?>
                , <b>Admin Notification:</b><?php echo "'{$row['adminchat']}'"; ?>, <b>Roomtype:</b><?php echo "'{$row['roomtype']}'"; ?>, <b>RoomID:</b><?php echo "'{$row['roomid']}'"; ?>, <b>Internet:</b><?php echo "'{$row['internet']}'"; ?>
                ,<b> Vehicle:</b><?php echo "'{$row['vehicle']}'"; ?>, <b>Water:</b><?php echo "'{$row['water']}'"; ?>, <b>Electric:</b><?php echo "'{$row['electric']}'"; ?><br>
              </p>
              <?php
            }
            }
          }
              ?>
          </div>
          <h3 align="center"><b>THÔNG BÁO PHÍ THUÊ PHÒNG HẰNG THÁNG CHO KHÁCH HÀNG</b></h3>
          <table align="center">
          <hr id="hr" />
          <tr>
            <td><b>UserName</b><span style="color:red">*</span></td>
            <tr></tr>
            <td><input type="text" id="font" name="Username" ></td>
          </tr>
            <td><b>Loại phòng thuê của khách</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Roomtype"></td>
          </tr>
          <tr>
            <td><b>Giá thuê cơ bản</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Baseprice"></td>
          </tr>
          <tr>
            <td><b>Khách đăng kí internet</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Internet"></td>
          </tr>
          <tr>
            <td><b>Khách đăng kí gửi xe riêng</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Vehicle"></td>
          </tr>
          <tr>
            <td><b>Khách Đăng kí dùng chung nguồn nước của trọ</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Water"></td>
          </tr>
          <tr>
            <td><b>Khách Đăng kí dùng chung lưới điện của trọ</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Electric"></td>
          </tr>
          <tr>
            <td><b>Tháng</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Month"></td>
          </tr>
          <tr>
            <td><b>Năm</b></td>
            <tr></tr>
            <td><input type="text" id="font" name="Year"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><br>
              <a>
                <input type="submit" name="submit" placeholder="Register" value="Gửi giá phí">
              </a>
          <?php 
          //conect to database
          $db= mysqli_connect('localhost','root','','minhan motel');
          if (isset($_POST['submit'])) {
            $username=mysqli_real_escape_string($db,$_POST['Username']);
            $roomtype=mysqli_real_escape_string($db,$_POST['Roomtype']);
            $baseprice=mysqli_real_escape_string($db,$_POST['Baseprice']);
            $internet=mysqli_real_escape_string($db,$_POST['Internet']);
            $vehicle=mysqli_real_escape_string($db,$_POST['Vehicle']);
            $water=mysqli_real_escape_string($db,$_POST['Water']);
            $electric=mysqli_real_escape_string($db,$_POST['Electric']);
            $month=mysqli_real_escape_string($db,$_POST['Month']);
            $year=mysqli_real_escape_string($db,$_POST['Year']);
            // chọn data cần đưa vào

            $sql="INSERT INTO billdb (username,roomtype,baseprice,internet,vehicle,water,electric,month,year) 
            VALUES ('$username','$roomtype','$baseprice','$internet','$vehicle','$water','$electric','$month','$year')";
            
            mysqli_query($db,$sql); 
            //echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
            }
              
          ?>

            </td>
          </tr>
        </table>

        </div>
    <!--------------------------------------------------------------------------->
    <!-- Footer -->
    <br>
    <footer class="py-5 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="m-0 text-center text-white"><b>Chăm sóc khách hàng</b></p>
            <p class="m-0 text-center text-white">Hotline: 1900 6017</p>
            <p class="m-0 text-center text-white">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết</p>
            <p class="m-0 text-center text-white">Email hỗ trợ: hoidap@minhbaocinema.vn</p>
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
        <p class="m-0 text-center text-white">Copyright &copy; MinhAn Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>
    <!---------------------------------------------------------------------------->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>