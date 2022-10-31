<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online1</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
    <?php 
        // $firstname="John";
        // $lastname="Smith";
        // $fullname= $firstname . " ". $lastname;
        // echo $fullname . '<br>';
        // $number=12;
        // echo $number . '<br>';
        // var_dump($firstname) ; //string(4) "John"
        // echo  '<br>'.gettype($firstname) . '<br>'; //String

        // $num= 12.34;
        // echo (int)$num . '<br>';//12
        // settype($num, "integer");
        // echo $num .'<br>';//12

        // echo is_numeric(12) .'<br>';
        // echo is_float(3.05) .'<br>';
        // echo is_string("John") .'<br>';

        // define("PI",3.14);//Định nghĩa hằng số PI
        // echo PI .'<br>';
        // define("course","PHP Training");
        // echo course;

        // $x=10;
        // $y=$x++;
        // echo "Y:" . $y. '<br>';
        // echo "X: " . $x. '<br>';

        // $x=10;
        // $y=++$x;
        // echo "Y:" . $y. '<br>';
        // echo "X: " . $x. '<br>';
        //===:là bằng tuyệt đối
        //!===: So sánh khác tuyệt đối
        //<> : So sánh khác

        // $var= "PHP training";
        // $result = (is_string($var) == 1) ? "Chuỗi" : "Không phải chuỗi";
        // echo $result . "<br>";

        // $n =12;
        // $ketqua = ($n>0)? "Số dương" : "Số Âm" ;
        // echo $ketqua . "<br>";

        // $a=0;
        // $num = ($a>0)? "Số Dương" : (($a<0)? "Số Âm" : "Số 0");
        // echo $num;

        //Các kiểu điều kiện
        //Ví dụ 1
        // $number=21;
        // if($number %2 == 0) {
        //     echo "Là số chẵn";
        // }
        // else {
        //     echo "Là số lẻ";
        // }

        //Cách 2
        //  $result = ($number %2 ==0) ? "Số Chẵn" : "Số lẻ";
        // echo  $result

        //Ví dụ 2
        // $number=-11;
        // if($number >=0) {
        //     $result = "Nguyên Dương Chẵn";
        // }
        // else if($number >=0 && $number %2 != 0) {
        //     $result = "Nguyên Dương Lẻ";
        // } 
        // else if ($number <0 && $number %2 ==0) {
        //     $result = "Nguyên Âm Chẵn";
        // }
        // else {
        //     $result = "Nguyên Âm Lẻ";
        // }

        // echo $result . '<br>';

        //Cách 2
        // $number=-11;
        // $n=$number % 2;
        // $resultFrist = ($number >=0) ? "Nguyên Dương" : "Nguyên Âm" ;
        // $resultlast = ($n == 0) ? "Chẵn" : "Lẻ";
        // $result =$resultFrist .  " " . $resultlast;
        // echo $result . '<br>';

       $n1= "";
       $n2= "";
       $caculater = "";
       if(isset($_POST["number1"])==true && isset($_POST["number2"])==true && isset($_POST["caculater"])==true) //Xử lý dữ liệu cho từng nút 
       {
        $n1 = $_POST["number1"];
        $n2 = $_POST["number2"];
        $caculater = $_POST["caculater"];
        $flag = true;//kết quả cho việc người dùng nhập đúng hoặc sai

         if (is_numeric($n1) && is_numeric($n2) )//Kiểm tra xem liệu biến n1 và n2 có phải là kiểu dữ liệu số không {
            switch($caculater) {
                case "+":
                    $result = $n1 +$n2; break;
                case "-":
                    $result = $n1 -$n2; break;
                case "*":
                case "x":
                    $result = $n1 *$n2; break;
                case "/":
                case ":":
                    $result = $n1 /$n2; break;
                case "%":
                    $result = $n1 %$n2; break;
                default:
                    $result = $n1 + $n2;
                    $caculater = "+";
                break;
         }
         }
         else {
             $result = "Không thực hiện được";
             $flag = false;    
        }
    ?> 
    <div class="content">
     <h1>Mô phỏng máy tính điện tử </h1>
     <form action="#" method="post" name="main-form">
         <div class="row">
             <span>Số thứ nhất </span>
             <input type="text" name="number1" value="<?php echo $n1; ?>" />
        </div>
        <div class="row">
             <span>Phép toán </span>
             <input type="text" name="caculater" value="<?php echo $caculater; ?>"/>
        </div>
        <div class="row">
             <span>Số thứ hai </span>
             <input type="text" name="number2" value="<?php echo $n2; ?>"/>
        </div>
        <div class="row">
             <input type="submit" value="Xem kết quả" name="submit" />
        </div>
        <div class="row">
            <p>
            <?php
             if ($flag==true) {
                 echo "Kết Quả" . $n1 . " " . $caculater . " " . $n2 . " = " . $result;
             }
             else {
                 echo $result;
             }
               ?></p>
        </div>
        </form>
        </div>
</body>
</html>