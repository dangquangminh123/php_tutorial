<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 6</title>
</head>
    <style>
        .error {
            color: red;
        }
    </style>
<body>  
        
        <form action="welcome.php" method="get">
        Name:   <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>


        <h1>PHƯƠNG THỨC POST </h1>
        <!-- Phương thức POST sẽ không xuất dữ liệu trên URL -->
        <form action="" method="POST">
        Username:
        <input type="text" name="username" value=""> <br>
        Password:
        <input type="password" name="pass" value=""> <br>
        <input type="submit" name="form_submit" value="Gửi dữ liệu">

    <?php 
        //Kiểm tra dữ liệu trong user có tồn tại không ?
        if(isset($_POST['form_submit'])) {
            echo "<br> Họ và tên:" .$_POST['username'] .'<br>';
            echo "Mật khẩu:" .$_POST['pass'];
        
        }
    ?>
    </form>
    <!-- Ví dụ 1 -->
    <p>Ví dụ 1</p>
    <form action="" method="POST">
    <input type="radio" name="card_type" value="visa" checked="checked">Visa </br>
    <input type="radio" name="card_type" value="mastercard" >Mastercard </br>
    <input type="radio" name="card_type" value="discover" >Discover </br>
    <button type="submit">Gửi </button>
    <?php 

        if(isset($_POST['card_type'])) {
            $card_type = $_POST['card_type'];
            echo $card_type;
        }
        else {
            $card_type = 'unknown';
        }
    ?>
    </form>

    <!-- Ví dụ 2 -->
    <p>Ví dụ 2</p>
    <form action="" method="POST">
    <input type="checkbox" name="pep" value="pepperonis" checked="checked">Pepperonis<br>
    <input type="checkbox" name="msh" value="mushrooms">Mushrooms<br>
    <input type="checkbox" name="olv" value="olives">Olives<br>
    <button type="submit">In </button>
    <?php
        $pepperonis=null;
        $mushrooms=null;
        $olives=null;
        $pepperonis = isset($_POST['pep']);
        $mushrooms = isset($_POST['msh']);
        $olives = isset($_POST['olv']);
        if(isset($_POST['pep'])) {
            echo $_POST['pep'];
        }
        if(isset($_POST['msh'])) {
            echo $_POST['msh'];
        }
        if(isset($_POST['olv'])) {
            echo $_POST['olv'];
        }
    ?>
    </form>

    <!-- Ví dụ 3 -->
    <p>Ví dụ 3</p>
    <form action="" method="POST">
        <input type="checkbox" name="top[]" value="pep">Pepperonis<br>
        <input type="checkbox" name="top[]" value="msh">Mushrooms<br>
        <input type="checkbox" name="top[]" value="olv">Olives<br>
        <button type="submit">Xuất </button>
    </form>
    <?php
    //Dùng cách in bình thường
    // $toppings = $_POST['top'];
    // $top1 = $toppings [0]; //$stop 1= pep
    // $top2 = $toppings [1]; //$stop 2= olv
    // $top3 = $toppings [2]; //$stop 3 không được thiết lập
    // echo $top1 . $top2 . $top3;
    //cách 2 dùng vòng lặp foreach
    echo "cách 2 vòng lặp foreach <br>";
    if(isset($_POST['top'])) {
    $topings = $_POST['top'];
        foreach ($topings as $key => $value) 
            echo $key . ' = ' .$value .'<br>';
        
    }
    else {echo 'Không có topping được chọn ';}
    ?>

    <!-- Ví dụ 4 -->
    <p>Ví dụ 4</p>
    <form action="" method="POST">
        <select name="card_type2">
            <option value="visa">Visa</option>
            <option value="mastercard">Mastercard</option>
            <option value="discover">Discover</option>
        </select>
        <button type="submit">Xuất</button>
    </form>

    <?php 
    if(isset($_POST['card_type2'])) {
         echo $card_type2 = $_POST['card_type2'];
    }
    ?>

    <!-- Ví dụ 5 -->
    <p>Ví dụ 5</p>
    <form action="" method="POST">
        <select name="card_type" size="3">
            <option value="visa">Visa</option>
            <option value="mastercard">Mastercard</option>
            <option value="discover">Discover</option>
        </select>
        <select name="top[]" size="3" multiple="multiple">
            <option value="pep" selected="selected">Pepperoni</option>
            <option value="msh">Mushrooms</option>
            <option value="olv">Olives</option>
        </select>
        <button type="submit">Xuất hàng loạt</button>
    </form>
    <?php 
        if(isset($_POST['top'])) {
            $toppings = $_POST['top'];
            foreach ($toppings as $key => $value) {
                echo $key. ' = ' .$value. '<br>';
            }
        }        
        else {echo 'No topping selected';}
    ?>

    <!-- Ví dụ 6 -->
    <p>Ví dụ 6</p>
    <form action="" method="POST">
        <textarea name="comment" rows="4" cols="50">Welcome to PHP and MySQL! </textarea>
        <button type="submit">Xuất nội dung bản </button>
    </form>
    <?php 
        if(isset($_POST['comment'])) {
            $comment = $_POST['comment'];
            echo $comment;
        }
    ?>

    <!-- Ví dụ 7 -->
    <p>Ví dụ 7</p>
    <?php 
        $nameErr = $emailErr = $websiteErr = "";
        $name = $email = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } 
            else {
                $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["email"])) {
                 $emailErr = "Email is required";
            } 
            else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
        

        if (empty($_POST["website"])) {
                $website = "";
        } 
        else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)
            [-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-
            9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }
    }
    ?>
    <form method="post" action="">
        Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website">
            <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <!-- Ví dụ 8 -->
   <p>Ví dụ 8 Phương trình bậc 1</p>
   <?php 
     $a=$b=$c=null;
     $aerr=$berr=$cerr="";
     $a= isset($_POST['a'])? $_POST['a']:'';
     if($a=='') {
         $aerr="Bạn chưa nhập a!";
     }
     else {
         $aerr="";
     }
     $b= isset($_POST['b'])? $_POST['b']:'';
     if($b=='') {
         $berr="Bạn chưa nhập b!";
     }
     else {
         $berr="";
     }
   ?>
   <form action="" method="post">
        <table border=0 align=center>
            <tr>
                <th></th>
                <th>Phương Trình</th>
            </tr>
            <tr>
                <td>Hệ Số a:</td>
                <td><input type="text" name="a" value="<?php echo $a?>"></td>
                <td><div class="error"> * <?php echo $aerr;?></div></td>
            </tr>
            <tr>
                <td>Hệ Số b:</td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
                <td><div class="error"> * <?php echo $berr;?></div></td>
            </tr>
            <tr>
                <td>Hệ Số c:</td>
                <td><input type="text" name="c"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit">Tính</td>
            </tr>
        </table>

    </form>
    
    <?php  
     if(isset($_COOKIE['name2'])) {
        echo "<br> Tên cookie:". $_COOKIE['name2']; 
        var_dump($_COOKIE['name2']);
     }
     if(isset($_COOKIE['name'])) {
        echo "<br> Tên cookie:". $_COOKIE['name'] ."<br>"; 
        var_dump($_COOKIE['name']);
     }
     
    
    
    ?>
    
</body>
</html>