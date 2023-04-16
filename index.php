<?php
  $servername ="localhost";
  $username = "root";
  $password ="";
  $dbname = "ffl_db";

  // tạo connection
$conn = new mysqli($servername, $username, $password, $dbname);
// kiểm connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql = "SELECT * FROM ffl_event";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // output dữ liệu trên trang
    while($row = $result->fetch_assoc()) {
      
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<html lang="en">
  <head>
    <title>Home | Giải Đấu FreeFire League</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="" href="./css/reset.css">
  </head>
  <body>

    <!--Day la header website-->

    <div class="header">
      <img class="header__image" src="./images/logo_ffl.png" alt="">
      <div class="header__info">
        <p  class="header__info--title">FreeFire League</p>
        <p class="header__info--text">Uy Tín - Chất Luợng</p>
      </div>
    </div>

    <!--Day la phan menu-->

    <div class="menu">
      <div class="menu__item">
        <ion-icon class="menu__item--icon" name="home"></ion-icon>
        <a href="./index.php" class="menu__item--name">Trang Chủ</a>
      </div>
      <div class="menu__item">
        <ion-icon class="menu__item--icon" name="calendar-number"></ion-icon>
        <a href="./event_view.php" class="menu__item--name">Lịch Thi Đấu</a>
      </div>
    </div>

    <h1 class="title__event">Sự Kiện</h1>

    <!--Event card-->
    <div class="card__group">
    <?php
      $length_array = 3;
      for ($i=0; $i < $length_array; $i++) { 
        echo '
        <div class="card">
         <div class="card__image--group">
           <img class="card__image" src="./images/image_test.png" alt="">
         </div>
         <div class="card__info">
           <p class="card__info--title">',$i,'</p>
           <p class="card__info--description">Phụ đề ở đây</p>
         </div>
         </div>';
      }
    ?>
    

    </div>

    <!--footer and info-->

    <div class="footer">
      <div class="footer__top">
        <div class="footer__top--left">
          <img class="ffl_logo" src="./images/logo_ffl.png" alt="">
          <a href="./event_view.php" class="x__text">X</a>
          <img class="garena_logo" src="./images/garena_logo.png" alt=""> 
        </div>
        <div class="footer__top--right">
          
        </div>
      </div>
      <div class="footer__bottom">
        
      </div>
    </div>

    <!--Icon module-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
