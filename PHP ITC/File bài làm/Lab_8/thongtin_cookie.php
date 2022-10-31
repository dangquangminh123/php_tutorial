<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin</title>
</head>
<style>
    .box{
        background-color: yellow;
    }
</style>
<body>
    <?php 
        
        setcookie("name","Thành Tài",time()+3600);
        setcookie("email","hoangnd@itc.edu.vn",time()+3600);
        setcookie("diachi","Linh Đông",time()+3600);
    ?>

    <form action="" method="post">
        <table class="box" align="center">
            <tr>
                <td><?php 
                    if(!isset($_COOKIE['info'])) {
                        echo "";
                    }
                    else {
                        echo  $_COOKIE['info'];
                    }
                ?></td>
            </tr>
            <tr>
                <td><b><?php 
                    if(!isset($_COOKIE['name'])) {
                        echo "";
                    }
                    else {
                        echo "Xin chào khách hàng" . $_COOKIE['name'] ." - ". $_COOKIE['email'] ." - ". $_COOKIE['diachi']  ;
                    }
                ?></b></td>
            </tr>
            <tr>
                <td><?php 
                    echo "<a href='Khachhang_cookie.php'>Quay về trang thông tin khách hàng</a>"
                ?></td>
            </tr>
        </table>
    </form>
</body>
</html>