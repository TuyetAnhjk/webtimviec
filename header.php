<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="w3.css">  
    <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Lato", sans-serif;
    }

    body,
    html {
      height: 100%;
      color: #777;
      line-height: 1.8;
      background: white;
    }

    /* Create a Parallax Effect */
    .bgimg-1 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
      background-image: url('./img/anhbia5.jpg');
      min-height: 100%;
    }


    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {

      .bgimg-1 {
        background-attachment: scroll;
        min-height: 450px;
      }
    }
  
    
  </style>
</head>
<body>
<!--NAV BAR-->
<div class="w3-top">
    <div class="w3-bar" style="font-size: 18px;color: #BBBBBB;">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Trang Chủ</a>
      <a href="khdohoa.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Danh sách công việc</a>
      <a href="allkhoahoc.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Cộng đồng</a>
      <a href="lienhe.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Liên Hệ</a>
     

      <div class="w3-right  w3-margin-right">
        <?php
        error_reporting(0);
        if (isset($_SESSION['user'])) {
          $id=$_SESSION['user'];
          echo "<div class='w3-dropdown-hover '>";
          echo "<button class='w3-button w3-black w3-opacity-min'>" . "Chào " . $_SESSION['user'] . "</button>";
          echo "<div class='w3-dropdown-content w3-bar-block '>";
          echo "<a  href='thongtinuser.php?id=$id' class='w3-bar-item w3-button'>Thông Tin</a>";
          echo "<a  href='cart.php' class='w3-bar-item w3-button'>Giỏ Hàng</a>";
          echo "<a  href='logout.php' class='w3-bar-item w3-button'>Đăng Xuất</a>";
          echo "</div>";
          echo "</div>";
        } elseif (isset($_SESSION['admin'])) {
          echo "<div class='w3-dropdown-hover '>";
          echo "<button class='w3-button w3-black w3-opacity-min'>" . "Chào " . $_SESSION['admin'] . "</button>";
          echo "<div class='w3-dropdown-content w3-bar-block '>";
          echo "<a href='adminindex.php' class='w3-bar-item w3-button'>Khóa học</a>";
          echo "<a href='adminhoadon.php' class='w3-bar-item w3-button'>Hóa đơn</a>";
          echo "<a href='admintaikhoan.php' class='w3-bar-item w3-button'>Tài khoản</a>";
          echo "<a href='cart.php' class='w3-bar-item w3-button'>Giỏ Hàng</a>";
          echo "<a  href='logout.php' class='w3-bar-item w3-button'>Đăng Xuất</a>";
          echo "</div>";
          echo "</div>";
        } else {
          echo " <a href='login.php' class='w3-bar-item w3-button w3-hide-small'><i class='fa fa-user'></i> Đăng Nhập</a>";
        }
        ?>
      </div>

      
    </div>
  </div>

  <div class="bgimg-1 w3-display-container w3-hover-opacity w3-sepia-min" >
    <div class="w3-display-middle" style="white-space:nowrap;">
      <i><span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Tim<span class="w3-hide-small">viec</span>nhanh</span></i>
      <br>
      <?php
        if (isset($_POST["txtTK"])) {
          $tk = $_POST["txtTK"];
          header("Location: timkiem.php?id=$tk ");
          if(isset($_SESSION['admin']))
          {
            $tk = $_POST["txtTK"];
            header("Location: admintimkiem.php?id=$tk ");
          }
        }
        ?>
      <form action method="post" action="timkiem.php">
      <input class="w3-round" placeholder="Nhập công việc muốn tìm...." type="text" style="width: 400px;height: 40px;">
        <select class="w3-select" name="option" style="width: 110px">
      <option value="" disabled selected>Địa điểm</option>
      <option value="1">Hà Nội</option>
      <option value="2">Hồ Chí Minh</option>
      <option value="3">Khác</option>
    </select>
      <a class=" w3-margin-left w3-opacity-min w3-round  w3-right"  href="timkiem.php?id=<?php echo $tk ?> "><button type="submit" style="height: 40px">Tìm kiếm</button></a>
    </form>
  </div>
  </div>

 
  </div>
</body>
</html>