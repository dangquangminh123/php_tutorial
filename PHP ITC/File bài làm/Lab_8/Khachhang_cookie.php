<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
</head>
    <style>
       .error {
           color: red;
       }
       .thongtin{
           background: yellow;
       }
       
    </style>
<body>
    <?php 
        //Ví dụ 1
    $Ten=isset($_POST['HoTen'])? $_POST['HoTen']:'';
    $email="";
    $emailerr="";
    $DiaChi=isset($_POST['DiaChi'])? $_POST['DiaChi']:'';
   
    function trong($ten,$diachi) {
        $err="";
        if($ten=='' && $diachi=='') {
            $err="*";
        }
        else {
            $err="";
        }
        return $err;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailerr = "";
        } else {
            $email = test_input($_POST["email"]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>
    <form action="" method="POST">
        <p>Ví dụ 1</p>
        <h3 align="center">THÔNG TIN KHÁCH HÀNG </h3>
        <table class="thongtin" border=0 align="center">
            
            <tr>
                <td>Họ và tên:</td>
                <td><input type="text" name="HoTen" value="<?php echo $Ten;?>"></td>
                <td><div class="error"><?php echo $loi=trong($Ten,$DiaChi); ?></div></td>
            </tr>
            <tr >
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
                <td><span class="error">*<?php echo $emailerr;?></span></td>
            </tr>
            <tr>
                <td>Địa Chi</td>
                <td><input type="text" name="DiaChi" value="<?php echo $DiaChi;?>"></td>
                <td><div class="error"><?php echo $loi=trong($Ten,$DiaChi); ?></div></td>
            </tr>
            
            <tr>
                <td> </td>
                <td><button type="submit">Xác nhận</td>
                <td></td>
            </tr>

            <tr>
                <td><?php 
                    if($Ten!='' && $email!='' && $DiaChi!='') {
                        echo  "Thông tin khách hàng";
                    }
                    else {
                        echo  "";
                    }
                ?></td>
            </tr>
            <tr>
                <td><?php 
                if($Ten!='' && $email!='' && $DiaChi!='') {
                    echo $Ten. " - " .$email. " - " .$DiaChi;
                }
                else {
                    echo ""; 
                }
                ?></td>
            </tr>
            <tr>
                <td><?php 
                if($Ten!='' && $email!='' && $DiaChi!='') {
                    echo "<a href='thongtin_cookie.php'>Click here</a>";
                }
                else {
                    echo"";
                }
                ?></td>
            </tr>
        </table>
    </form>

    <?php 
        echo "Ví dụ 2 <br>";
        session_start();
        if( isset( $_SESSION['counter'])) {
            $_SESSION['counter'] +=1;
        }
        else {
            $_SESSION['counter'] = 1;
        }
        $msg = "Bạn đã truy cập trang này ". $_SESSION['counter'];
        $msg .= " lần trong session này.";
    ?>
    
    <?php echo ($msg) .'<br>'; ?>


    
    <?php
    //3 
        $user=$pass=null;
        $userempty=$passempty="";
        $user= isset($_POST['username'])? $_POST['username']:'';
        if($user=='') {
            $userempty="*Vui lòng nhập Tên Đăng nhập";
        }
        else {
            $userempty="";
        }
        $pass= isset($_POST['pass'])? $_POST['pass']:'';
        if($pass=='') {
            $passempty="*Vui lòng nhập Mật Khẩu";
        }
        else {
            $passempty="";
        }
    ?>

    <form action="" method="POST">
        <p>Ví dụ 3</p>
        <h3 align="center">ĐĂNG NHẬP </h3>
        <table class="thongtin" border=0 align="center">
             <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username" value="<?php echo $user; ?>"></td>
                <td><div class="error">  <?php echo $userempty;?></div></td>
            </tr>
            <tr>
                <td>Mật Khẩu:</td>
                <td><input type="password" name="pass" value="<?php echo $pass; ?>"></td>
                <td><div class="error">  <?php echo $passempty;?></div></td>
            </tr>
            
            <tr>
                <td></td>
                <td> <input type="submit" name="form_submit" value="Đăng Nhập"></td>
                <td></td>
            </tr>
        </table>
    </form>
    
    <?php 
        if(isset($_POST['form_submit'])) {
            echo "Đăng nhập thành công! <br>";
            echo "<br> Xin chào" .$_POST['username'] .'<br>';
            echo "<a href='dathang_session.php'>Qua trang đặt hàng!</a>";
        }
    ?>


</body>
</html>