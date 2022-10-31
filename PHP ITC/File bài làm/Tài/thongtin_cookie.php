<html>
 <head>
   
 </head>
<body>

    <?php
      $n=$_COOKIE['name'];
      $e=$_COOKIE['email'];
      $d=$_COOKIE['diachi'];
      echo "Thong tin khach hang. <br>";
      echo "<b>$n</b>"." - ";
      echo "<b>$e</b>"." - ";
      echo "<b>$d</b>";
      echo "<br>";
      echo "<a href='khachhang_cookie.php'>Quay ve trang thong tin khac hang</a>";
   ?>
</body>

</html>