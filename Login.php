<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập tài khoản</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style-images.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<style type="text/css">
	#style1{
		background: green;
		color:white;
		font-size:20px;
	}
	#font{
		border-style: green;
		border: groove;
		border-radius: 15px;
		margin-left: 5px;
		text-align: center;
	}
	#style3{
		background: red;
		color:white;
		font-size:13px;
	}
	#style4{
		background:#A9A9A9;
		
	}
	#hr1{
		width: 200px;
	}
	</style>

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
	            	<!--</li> -->
	              	<!--<li class="nav-item"> -->
	                	<a class="nav-link" href="Login.php">Đăng nhập</a>
	              	<!-- </li> -->
	            	<!-- <li class="nav-item"> -->
	              		<a class="nav-link" href="Register.php">Đăng Kí</a>
	            	<!-- </li> -->
	          	</ul>

	        </div>
      	</div>
    </nav>
    <!---------------------------------------------------------------------->
    <!-- Page Content -->
    <!---------------------------------------------------------------------->
    <div class="container">
    	<div class="row">
    		<div class="col-lg-9">
    			<br>
		    	<form method ="POST" action="">
					<table align="center">
						<td>
							<button type="button" class="btn btn-default" name="đăng nhập">Đăng nhập</button>
						</td>
						<td>
							<a href="Register.php">
								<button type="button" class="btn btn-danger" namge="đăng ký">Đăng ký</button>
							</a>
						</td>
					</table>
					<table align="center" align="text-center">
						<hr id="hr1" />
						<br>
							<p align="center"> Nếu chưa có tài khoản vui lòng nhấn đăng ký ở phía trên...</p>
						<p align="center"> Vui lòng nhập tên tài khoản và mật khẩu của bạn... </p>
						
						<tr>
							<td><i><b>Tài khoản</b></i></td>
							<td><input id="font" type="text" name="Username" size="20"></td>
						</tr>
						<tr>
							<td><i><b>Mật khẩu</b></i></td>
							<td><input id="font" type="password" name="Password" size="20"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><br>
								<a>
									<input type="submit" name="submit" placeholder="Login" value="Đăng Nhập">
					<?php 
					$conn= mysqli_connect("localhost","root","","minhan motel");
					    if (isset($_POST["submit"])) { 
					    	$username=mysqli_real_escape_string($conn,$_POST['Username']);
					      	$password=mysqli_real_escape_string($conn,$_POST['Password']);

					      	$sql = "SELECT username,pass,name FROM userdb "; // chọn data cần lấy ra so sánh
					      
					      	$result = $conn->query($sql);
					      	$count=0;
					      	if ($result->num_rows > 0) { // đi hết từng cột từng dòng trên database
					       		while($row = $result->fetch_assoc()) {
					            	if ($username == $row['username'] && $password==$row['pass']) 
					            	{
				            			$_SESSION['name']=$row['name'];
				            			$_SESSION['username']=$row['username'];
				            		ob_start();
				                    echo "<script type='text/javascript'>window.location.href ='index.php';</script>";
					            	}
					       		}
					       		echo "<p class='text-danger'> Invalid Password or username </p>";   
					       	}
					    $conn->close();     
					    }
				  
				    ?>
								</a>
							</td>
						</tr>
					</table>
					
				</form>
			</div>
		</div>
    </div>

    <br><br><br><br><br><br>
   
    <!--------------------------------------------------------------------------->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
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
        <p class="m-0 text-center text-white">Copyright &copy; MinhAn Website | All rights reserved.</p>
      </div>
      <!-- /.container -->
    </footer>
    <!---------------------------------------------------------------------------->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script></body>
</html>