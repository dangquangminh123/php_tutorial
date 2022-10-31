<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 7</title>
</head>
<body>
    <?php 
        //Ví dụ 1
        echo "Tên bạn là:" .$_COOKIE['name']. "<br>";
        // Set cookie tên name, giá trị = tèo, Thời gian tồn tại 30 phút
        //Ví dụ 2
        echo "Ví dụ 2 <br>";
        if(!isset($_COOKIE['name2'])) {
            echo "<br> Tên truy cập" . $_COOKIE['name2']. "Không tồn tại";
        }
        else {
            echo "<br> Tên cookie: " . $_COOKIE['name2'] . "<br>";
        }

        var_dump(($_COOKIE['name2']));
        
        echo "<a href='del_cookie.php'>Hủy cookie</a>";
    ?>

    <!-- Ví dụ 3 -->
    <h1>
        <?php
        echo "Ví dụ 3 <br>";
        // Hiển thị thông tin lưu trong Session
        // phải kiểm tra có tồn tại không trước khi hiển thị nó ra
        if (isset($_POST['save-session']))
        {
        echo 'Tên Đăng Nhập Là: ' . $_SESSION['save-session']=$_POST['username'];
        }
        ?>
    </h1>
        <form method="POST" action="">
            <input type="text" name="username" value=""/> <br/>
            <input type="submit" name="save-session" value="Lưu Session"/>
        </form>

    <!-- Ví dụ 4 -->
    <?php
        echo "Ví dụ 4 <br>"; 
        setcookie("A[name]","CD20CT10_N2_N3",time()+60);
        setcookie("A[mail]","CD20CT10_N2_N@itc.edu.vn",time()+60);

        setcookie("B[name]","CD20CT12_N2_N3",time()+60);
        setcookie("B[mail]","CD20CT12_N2_N@itc.edu.vn",time()+60);
        if(isset($_COOKIE['A'])) {
            var_dump($_COOKIE['A']);
            echo '<br>';
            var_dump($_COOKIE['B']);

            foreach($_COOKIE['A'] as $key=>$value) {
                echo '<br>'. $key . "=>" .$value .'<br>';
            }
            
            //Cách 2
            // echo $_COOKIE['A']['name'];
        }
    ?>
</body>
</html>