<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
</head>
<body>
    <?php
    //Bài 1
    // echo "Bài 1 <br>";
    // $a=4; $b=6;
    // echo "Phần nguyên:" .(int)$a/$b . '<br>';
    // echo "Phần dư" . $a%$b . '<br>';

    //Bài 2
    // echo 'Bài 2 <br>';
    // $a=48;
    // $dv=$a%10;
    // echo $dv .'<br>';
    // $ch=($a/10)%10;
    // echo $ch .'<br>';
    // echo 'Tổng của 2 chữ số là:' .$dv+$ch .'<br>';
    
    //Bài 3
    //echo 'Bài 5 <br>';
    // $a=10;
    // $b=5;
    // $tong=$a+$b;
    // echo 'Tổng 2 số là:' .$tong .'<br>';
    // $hieu=$a-$b;
    // echo 'Hiệu 2 số là:' .$hieu .'<br>';
    // $tich=$a*$b;
    // echo 'Tích 2 số là:' .$tich .'<br>';
    // $thuong=$a/$b;
    // echo 'Thương 2 số là:' .$thuong .'<br>';

    //Bài 4
    //echo 'Bài 5 <br>';
    // $a=5;$b=10;$c=12;$d=14;
    // $trungbinh=($a+$b+$c+$d)/4;
    // echo 'Giá trị trung bình cộng của 4 số là:' .$trungbinh . '<br>';

    // Bài 5
    // echo 'Bài 5 <br>';
    // $a=10;
    // $b=20;
    // echo ($a>$b)? "Giá trị lớn nhất là $a" :"Giá trị lớn nhất là $b" .'<br>';
    // echo ($a<$b)? "Giá trị nhỏ nhất là $a" :"Giá trị nhỏ nhất là $b" .'<br>';

    //Bai 5 cách 2
    echo 'Bài 5 cách 2 <br>';
    $A=9;
    $B=7;
    if ($A>$B) {
        echo "Số  " . $A ." > " .$B .'<br>';
    }
    else {
        echo "Số" .$A. " < " .$B  .'<br>';
    }

    //Bài 6
    // echo 'Bài 6 <br>';
    // $a=7;$b=5;$c=6;$d=8;
    // if($d>$a && $d>$b && $d>$c){
    // echo "Giá trị lớn nhất trong 3 số là $d".'<br>';
    // }
    // else if ($c>$d && $c>$b && $c>$a) {
    //     echo "Giá trị lớn nhất trong 3 số là $c" .'<br>';
    // }
    // else if ($b>$d && $b>$c && $b>$a) {
    //     echo "Giá trị lớn nhất trong 3 số là $b" .'<br>';
    // }
    // else  {
    //     echo "Giá trị lớn nhất trong 3 số là $a" .'<br>';
    // }

    //Bài 6
    echo 'Bài 6 cách 2 <br>';
    $a=9;
    $b=7;
    $c=11;
    $max=$a;
    if($b>$max) {
        $max=$b;
    }
    if($c>$max) {
        $max=$c;
    }
    echo "Các số a = " .$a. "; b = ".$b. "; c = ".$c . '<br>';
    echo "Giá trị lớn nhất trong 3 chữ số đó là $max" .'<br>';

    //Bài 7
    // echo 'Bài 7 <br>';
    // $a=4;$b=5;$c=6;
    // if ($a>$b && $a>$c){
    //     echo ($b>$c)? "Giá trị tăng dần của 3 số là $c;$b;$a" : "Giá trị tăng dần của 3 số là $a;$b;$c" .'<br>';
    // }

    // else if ($b>$a && $b>$c) {
    //     echo ($a>$c)? "Giá trị tăng dần của 3 số là $c;$b;$a" : "Giá trị tăng dần của 3 số là $a;$b;$c" . '<br>';
    // }

    // else if ($c>$a && $c>$b ) {
    //     echo ($b>$a)? "Giá trị tăng dần của 3 số là $a;$b;$c" : "Giá trị tăng dần của 3 số là $c;$b;$a" . '<br>';
    // }
    
    //Bài 8
    // $a=3;$b=-4;
    //  if($a==0) {
    //     if($b != 0){
    //     echo "Phương Trình vô nghiệm";
    //     }
    //     if ($b == 0) {
    //         echo "Phương trình có vô số nghiệm!";
    //     };
    // else {
    //      $x=-$b/$a;
    //     echo "Phương Trình có 1 nghiệm duy nhất x=$x" . '<br>';
    // };
    // }

    //Bài 9
        // $a=1;$b=1;$c=-6;
        // if($a==0) {
        //     echo "Giá trị hệ số a phải lớn hơn 0" . '<br>';
        // }
        // else {
        //     $delta =$b*$b-4*$a*$c;
        //     if($delta>0) {
        //         $x1 =(-$b+sqrt($delta))/(2*$a);
        //         $x2 =(-$b-sqrt($delta))/(2*$a);
        //         echo "Phương trình có 2 nghiệm x1=$x1; x2=$x2";
        //     }
        //     else if ($delta==0) {
        //         $x=-$b/(2*$a);
        //         echo "Phương trình có nghiệm kép là: x1=x2=$x";
        //     }
        //     else
        //     echo "Phương Trình vô nghiệm";
        // }

    //Bài 10
    // echo "Bài 10 <br>";
    // $sokm=46;
    // if($sokm>0 && $sokm<2) {
    //     $sotien=13000;
    // }
    // else if ($sokm>=2 &&$sokm<=30) {
    //     $sotien=13000+(($sokm-1)*12000);
    // }
    // else if ($sokm>30) {
    //     $sotien =13000+((30-1)*12000)+(($sokm-30)*11000);
    // }
    // echo "Tổng số tiền cước cho TAXI là: $sotien" . '<br>';

     //Bài 11
    //  echo "Bài 11 <br>";
    //  $a=4; $b=5;$c=6;
    //     if($a<$b+$c && $b<$a+$c && $c<$a+$b)
    //     {
    //         if($a*$a==$b*$b+$c*$c || $b*$b==$c*$c+$a*$a || $c*$c==$a*$a + $b*$b)
    //         {
    //             echo "Đây là tam giác vuông";
    //         }
    //         else if($a==$b && $b==$c)
    //         {
    //             echo "Đây là tam giac đều";
    //         }
    //         else if( $a!=$b && $b!=$c && $a!=$c)
    //         {
    //             echo "Đây là tam giác thường.";
    //         }
    //         else if($a*$a > $b*$b+$c*$c || $b*$b > $c*$c + $a*$a ||$c*$c > $a*$a + $b*$b)
    //         {
    //             echo "Đây là tam giác tù.";
    //         }
    //         else
    //         {
    //             echo "Đây là tam giác nhọn";
    //         }
    //     }
    //     else
    //     {
    //         echo "Ba canh a , b, c không phai là ba cạnh của một tam giác";
    //     }

    ?>

</body>
</html>