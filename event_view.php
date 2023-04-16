<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/event_view.css">
    <title>Sự Kiện | FreeFire League</title>
</head>
<body>

<!--Day la header website-->

<div class="header">
      <img class="header__image" src="./images/logo_ffl.png" alt="">
      <div class="header__info">
        <p class="header__info--title">FreeFire League</p>
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

    <h1 class="title__event">Mùa Thi Đấu</h1>


    <!--table of list-->
    <table id="alter">
        <tr>
            <th class="th__season">Mùa</th>
            <th class="th__name">Tên Giải Đấu</th>
            <th class="th__type">Loại</th>
            <th class="th__slot">Số Lượng</th>
            <th class="th__champion">Nhà Vô Địch</th>
            <th class="th__dienra">Diễn Ra</th>
        </tr>
        <tr>
            <td>2</td>
            <td>FreeFire League - SS2</td>
            <td>BR</td>
            <td>24</td>
            <td></td>
            <td class="td__dienra">
                <div class="td__group--dienra"></div>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>FreeFire League - SS1</td>
            <td>BR</td>
            <td>24</td>
            <td>BDĐH</td>
            <td class="td__dienra">
                <div class="td__group--dienra"></div>
            </td>
        </tr>
    </table>


    <!--footer and info-->

    <div class="footer">
      <div class="footer__top">
        <div class="footer__top--left">
          <img class="ffl_logo" src="./images/logo_ffl.png" alt="">
          <p class="x__text">X</p>
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