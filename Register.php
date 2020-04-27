<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style-images.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
	<style type="text/css">
	#lamdep3{
		background: red;
		color:white;
		font-size:13px;
	}
	#lamdep2{
		background:#A9A9A9;
		
	}
	#hr{
		width: 200px;
	}
	#lamdep{
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
		    	<form action="Register.php" method="POST">
				<table align="center">
					<tr>
					<td>
						<a href="Login.php">
						<button type="button" class="btn btn-danger" name="đăng nhập">Đăng nhập</button>
						</a>
					</td>
					<td>
						<button type="button" class="btn btn-default" name="đăng ký">Đăng ký</button>
					</td>
					</tr>

				</table>
				<table align="center">
					<hr id="hr" />
					<tr>
						<td><b>UserName</b><span style="color:red">*</span></td>
						<tr></tr>
						<td><input type="text" id="font" name="Username" ></td>
					</tr>
					<tr>
						<td><b>Password</b><span style="color:red">*</span></td>
						<tr></tr>
						<td><input type="password" id="font" name="Password"></td>
					</tr>
					<tr>
						<td><b>Nhập lại password</b><span style="color:red">*</span></td>
						<tr></tr>
						<td><input type="password" id="font" name="Password2"></td>
					</tr>
					<tr>
						<td><b>Tên người dùng</b><span style="color:red">*</span></td>
						<tr></tr>
						<td><input type="text" id="font" name="Name"></td>
					</tr>
					<tr>
						<td><b>Loại phòng thuê</b></td>
						<tr></tr>
						<td><input type="text" id="font" name="Roomtype"></td>
					</tr>
					<tr>
						<td><b>Tên phòng thuê</b></td>
						<tr></tr>
						<td><input type="text" id="font" name="Roomid"></td>
					</tr>
					<tr>
						<td><b>Đăng kí internet</b></td>
						<tr></tr>
						<td><input type="radio" id="Male" name="Internet" value="yes">Yes</td>
						<tr></tr>
						<td><input type="radio" id="Female" name="Internet" value="no">No</td>
					</tr>
					<tr>
						<td><b>Đăng kí gửi xe riêng</b></td>
						<tr></tr>
						<td><input type="radio" id="Male" name="Vehicle" value="yes">Yes</td>
						<tr></tr>
						<td><input type="radio" id="Female" name="Vehicle" value="no">No</td>
					</tr>
					<tr>
						<td><b>Đăng kí dùng chung nguồn nước của trọ</b></td>
						<tr></tr>
						<td><input type="radio" id="Male" name="Water" value="yes">Yes</td>
						<tr></tr>
						<td><input type="radio" id="Female" name="Water" value="no">No</td>
					</tr>
					<tr>
						<td><b>Đăng kí dùng chung lưới điện của trọ</b></td>
						<tr></tr>
						<td><input type="radio" id="Male" name="Electric" value="yes">Yes</td>
						<tr></tr>
						<td><input type="radio" id="Female" name="Electric" value="no">No</td>
					</tr>
					<tr>
						<td><b>Register Key</b></td>
						<tr></tr>
						<td><input type="text" id="font" name="RegisterKey"></td>
					</tr>
					<tr>
						<tr></tr>
						<td><span style="color:red">*: Để nhận được RegisterKey thì khách hàng phải là người đã ký kết các thỏa thuận thuê phòng với quản lí tòa nhà.</span></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><br>
							<a>
								<input type="submit" name="submit" placeholder="Register" value="Đăng Kí">
							</a>
					<?php 
					//conect to database
					$db= mysqli_connect('localhost','root','','minhan motel');
					if (isset($_POST['submit'])) {
						$username=mysqli_real_escape_string($db,$_POST['Username']);
						$password=mysqli_real_escape_string($db,$_POST['Password']);
						$password2=mysqli_real_escape_string($db,$_POST['Password2']);
						$name=mysqli_real_escape_string($db,$_POST['Name']);
						$roomtype=mysqli_real_escape_string($db,$_POST['Roomtype']);
						$roomid=mysqli_real_escape_string($db,$_POST['Roomid']);
						$internet=mysqli_real_escape_string($db,$_POST['Internet']);
						$vehicle=mysqli_real_escape_string($db,$_POST['Vehicle']);
						$water=mysqli_real_escape_string($db,$_POST['Water']);
						$electric=mysqli_real_escape_string($db,$_POST['Electric']);
						$registerkey=mysqli_real_escape_string($db,$_POST['RegisterKey']);
						// chọn data cần đưa vào
						$sqlselect= "SELECT username FROM userdb WHERE username='$username'"; 
						// đi hết từng cột từng dòng trên database 
				        $result = $db->query($sqlselect);
				        $sqlselect2 = "SELECT adminkey FROM registerkey"; 
				        $result2 = $db->query($sqlselect2);

				        while($row = $result2->fetch_assoc()) {
			      			if ($row['adminkey']!=$registerkey) {	
				        		echo "<p class='text-danger'>RegisterKey không hợp lệ</p>"; 
				        	}
				        }
				        // nếu $result có số dòng nằm trong trùng với $username
						if ($result->num_rows !=0 ) { 
				           echo "<p class='text-danger'>Username đã có sẵn</p>"; //nếu username đã có sẵn
				        }
				        
						else{
							//nếu đăng kí hợp lệ
							if($password == $password2 && $password!="" && $password2!="") {
								$_SESSION['name']=$name; // lưu tên người dùng đăng kí
								$sql="INSERT INTO userdb (username,pass,name,request,adminchat,roomtype,roomid,internet,vehicle,water,electric,visible) 
								VALUES ('$username','$password','$name','none','none','$roomtype','$roomid','$internet','$vehicle','$water','$electric','yes')";
								$sql3="UPDATE 'roomdb' SET 'userusing' = 'userusing'+1 WHERE 'roomid' = 'room01'";
								// $sql3 = "SELECT roomid,userusing FROM roomdb";
			    	// 			$result3 = $db->query($sql3);
								// while($row = $result3->fetch_assoc()) {
			     //  					if ($row['roomid']==$roomid) {	
				    //     				$sqlUpdate="UPDATE roomdb SET userusing = userusing + 1 WHERE roomid = $roomid";
				    //     			}
				    //     		}
								if($roomid == 'room01'){
									$sql3="UPDATE 'roomdb' SET 'userusing' = 'userusing'+1 WHERE 'roomid' = 'room01'";
									$sql4="INSERT INTO roomdb (roomid,roomtype,maxuser,userusing,picture) VALUES ('room11','1','4','0',null)";
								}

								if ($db->query($sql) === TRUE) {
    								echo "New record created successfully";
								} 
								else {
    								echo "Error: " . $sql . "<br>" . $db->error;
								}
								mysqli_query($db,$sql);	
								echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
							}
							//nếu pass 1 không bằng pass 2 
							else{
								echo "<p class='text-danger'>Vui lòng xem lại password </p>"; 

							}
						}
					}
				 	?>

						</td>
					</tr>
				</table>
				</form>
		</div>
    </div>
	</div>
 	<br>
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
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>