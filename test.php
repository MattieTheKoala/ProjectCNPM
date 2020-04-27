<?php 
    $conn= mysqli_connect("localhost","root","","minhan motel");
    $sql = "SELECT IDfilm,nameOfFilm,dayStart,duration,imgPoster,price,description FROM filmdetail";
    $result = $conn->query($sql);
    $count=0;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
  ?>          
      <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="<?php echo "{$row['description']}"; ?>">
                  <img class="card-img-top" <?php echo "src='{$row['imgPoster']}'"; ?> alt="imgPoster err">
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="<?php echo "{$row['description']}"; ?>"> 
                      <?php echo "{$row['nameOfFilm']}"; ?>
                    </a>
                  </h4>
                  <h5 style="color: #f47442">Lịch chiếu: <?php echo "{$row['dayStart']}"; ?></h5>
                  <p class="card-text"></p>
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>

                <div class="card-footer">
                  <a href="<?php echo "{$row['description']}"; ?>" class="btn btn-primary">Xem chi tiết | Trailer</a>
                </div>
              </div>
            
            </div>
        <?php
      }
    }
      $conn->close();
        ?>

          

  <div class="container">

        <div class="row">

          <div class="col-lg-3">

            <h1 class="my-4" style="text-align: center;text-shadow:2px 2px 2px black"><b>MinhBảo Cinema</b></h1>

            <div class="list-group">
              <a href="BookTickets.php" class="list-group-item">Đặt Vé Phim</a>
              <a href="AvailableFilms.php" class="list-group-item">Phim Đang Chiếu</a>
              <a href="UnAvailableFilms.php" class="list-group-item">Phim Sắp Chiếu</a>
              <a href="ContactUs.php" class="list-group-item">Thông Tin Liên Hệ</a>
            </div>

        </div>
            <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <br>
        <h3 align="center"><b>PHIM ĐANG CHIẾU</b></h3>
          <div class="row">
          <?php 
          $conn= mysqli_connect("localhost","root","","minhan motel");
          $sql = "SELECT IDfilm,nameOfFilm,dayStart,duration,imgPoster,price,description FROM filmdetail";
          $result = $conn->query($sql);
          $count=0;
          if ($result->num_rows > 0) {// check every row in database
            while($row = $result->fetch_assoc()) {
              if ($row['price']!=0) { 
        ?>          
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="<?php echo "{$row['description']}"; ?>">
                      <img class="card-img-top" <?php echo "src='{$row['imgPoster']}'"; ?> alt="imgPoster err">
                    </a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="<?php echo "{$row['description']}"; ?>"> 
                          <?php echo "{$row['nameOfFilm']}"; ?>
                        </a>
                      </h4>
                      <h5 style="color: #f47442">Lịch chiếu: <?php echo "{$row['dayStart']}"; ?></h5>
                      <p class="card-text"></p>
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>

                    <div class="card-footer">
                      <a href="<?php echo "{$row['description']}"; ?>" class="btn btn-primary">Xem chi tiết | Trailer</a>
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