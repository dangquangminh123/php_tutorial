<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7</title>
</head>
    <style>
        .error {
            color: red;
        }
    </style>
<body>
    <?php 
        //Bài 1
        $a=isset($_POST['numbera'])? $_POST['numbera']:'';
        $b=isset($_POST['numberb'])? $_POST['numberb']:'';
        $c=isset($_POST['numberc'])? $_POST['numberc']:'';
    
        $aerr=$berr=$cerr="";
            if($a=='' && $b=='' && $c=='') {
                $aerr="Nhập số a và không được bỏ trống";
                $berr="Nhập số b và không được bỏ trống";
                $cerr="Nhập số c và không được bỏ trống";
            }
            else {
                $aerr="";
                $berr="";
                $cerr="";
            }
        function bai1($a,$b,$c) {
            if($a!='' && $b!='' && $c!='') {
                if($a<0) {
                    echo "Hệ số a phải lớn hơn 0";
                }
                else {
                    $delta = ($b*$b)-(4*$a*$c);
                    $x1="";
                    $x2="";
                    echo "Phương Trình bậc 2 là:". $a."x2" . "+" .$b. "x" . "+". $c ."=0" .'<br>';
                    echo "delta là:" . $delta .'<br>';
                    if ($delta>0) {
                        $x1=(-$b+sqrt($delta))/($a*2);
                        $x2=(-$b-sqrt($delta))/($a*2);
                        echo  "Phương Trình bậc 2 có 2 nghiệm là: ". " x1= " . $x1 . " x2= " .$x2 . '<br>'; 
                    }
                    else if ($delta==0 ) {
                        $x1=$x2= -$b/(2*$a);
                        echo "Phương trình bậc 2 có nghiệm kép là:" . "x1=x2" .$x1 .'<br>';
                    }
                    else {
                        echo "Phương trình bậc 2 vô nghiệm" . '<br>';
                    }
                }
            }
            else {
                echo "Các hệ số đang trống";
            }
        }
    ?>

    <?php 
        //Bài 2
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }
        
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
            
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <?php 
        /*Đối với bài 3 này (trong các hàm function liệt kê và tìm min max), lưu ý rằng không nên sử dụng cách gọi hàm và truyền giá trị đầu vào cho hàm
        .Lý do 1 : ở thẻ form chỉ echo duy nhất 1 biến $ketqua,mà nhiều hàm lại nhiều kết quả khác nhau + khi in ra kết quả thì PHP đã giữ lấy giá trị đó-> khi mình
        chọn 1 hàm khác (ở giao diện) thì PHP vẫn giữ kết quả cũ. Từ đấy trong mỗi hàm phải có 1 cái biến mang giá trị cuối cùng của hàm đó, và khi mình để $ketqua=ham thì tiện hơn 
        cho việc là $ketqua sẽ thay đổi giá trị tùy vào người dùng chọn giao diện mỗi hàm.Lý do 2 không được truyền giá trị đầu vào cho hàm vì không thể gọi hàm-> không thể truyền giá
        trị đầu vào cho hàm, buộc phải dùng global cho $arrray */
        //Bài 3
        $ketqua=null;
        $mang3=isset($_POST['mang3'])? $_POST['mang3']:'';
        $array=explode(',',$mang3);
        $choose=isset($_POST['chon'])? $_POST['chon']:'';
        if($mang3 !="" && $choose !="" && isset($_POST['calculator'])) {
            if($choose=="Timmax") {
                $ketqua=timmax();
            }
            if($choose=="Timmin") {
                $ketqua=timmin();
            }
            if($choose=="Songuyento"){
                $ketqua=lietkenguyento();
            }
            if($choose=="Sochinhphuong"){
                $ketqua=lietkechinhphuong();
            }
            if($choose=="Sohoanthien"){
                $ketqua=lietkehoanthien();
            }
        }
        function timmax() {
            global $array;
            $max=$array[0];
            //Có thể dùng foreach
           for($i=1;$i<count($array);$i++){
               if($max<$array[$i]) {
                   $max=$array[$i];
               }
           }
            return $max;
        }
        function timmin() {
            global $array;
            $min=$array[0];
            //Có thể dùng foreach
            for($i=1;$i<count($array);$i++) {
                if($min>$array[$i]) {
                    $min=$array[$i];
                }
            }
            return $min;
        }
        //Hàm kiểm tra số nguyên tố
        function kiemtranguyento($so) {
            if($so<2) {
                return false;
            }
            $number =sqrt($so);
            for($i=2;$i<=$number;$i++) {
                if($so %$i ==0) {
                    return false;
                }
            }
            return true;
        }

        function lietkenguyento() {
            global $array;
            $result="";
            //Có thể dùng for
            foreach($array as $phantu) {
                if(kiemtranguyento($phantu)==true) {
                    $result .= $phantu;
                }
            }
            return $result;
        }

        //Hàm kiểm tra số chính phương
        function kiemtrachinhphuong($m) {
            $cp=(int)sqrt($m);//Căn bậc 2 nguyên của số m
            if($cp*$cp==$m) {
                return true;
            }
            return false;
        }

        function lietkechinhphuong() {
            global $array;
            $kq="";
            foreach($array as $phantu) {
                if(kiemtrachinhphuong($phantu)==true) {
                    $kq .= $phantu;
                }
            }
            return $kq;
        }

        //Hàm kiểm tra số hoàn thiện
        function kiemtrahoanthien($k) {
                $tonguoc=0;
                for($i=1 ;$i<$k;$i++) {
                    if ($k % $i ==0) {
                        $tonguoc += $i;
                    }
                }
                if ($tonguoc==$k) {
                    return true;
                }
                else {
                    return false;
                }
        }

        function lietkehoanthien() {
            global $array;
            $KQ="";
            foreach($array as $phantu) {
                if(kiemtrahoanthien($phantu)==true) {
                    $KQ .= $phantu;
                }
            }
            return $KQ;
        }


    ?>

    <form method="post" action="">
        <p>Ví dụ 1</p>
        <table border=0 align="center">
            <tr>
                <th></th>
                <th>Giải Phương Trình Bậc 2</th>
            </tr>
            <tr>
                <td>Hệ Số a:</td>
                <td><input type="text" name="numbera" value="<?php echo $a?>"></td>
                <td><div class="error"> * <?php echo $aerr ?></div></td>
            </tr>
            <tr>
                <td>Hệ Số b:</td>
                <td><input type="text" name="numberb" value="<?php echo $b?>"></td>
                <td><div class="error"> * <?php echo $berr ?></div></td>
            </tr>
            <tr>
                <td>Hệ Số c:</td>
                <td><input type="text" name="numberc" value="<?php echo $c?>"></td>
                <td><div class="error"> * <?php echo $cerr ?></div></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Kết Quả</button></td>
            </tr>
        </table>
        <?php bai1($a,$b,$c);?>

        <p>Ví dụ 2</p>
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email?>">
        <span class="error">*Email is required <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* Gender is required<?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        
        <p>Ví dụ 3</p>
        <table border=1 align="center">
            <tr bgcolor=blue>
            <th colspan=3>NHẬP VÀ TÌM, TÍNH TOÁN MẢNG</th>
            </tr>

            <tr>
                <td>Nhập dãy số:</td>
                <td><input type="text" size=30 name="mang3" value="<?php echo $mang3;?>"></td>
                <td class="error">Mời bạn nhập mảng </td>
            </tr>

            <tr>
                <td>Chọn</td>
                <td>
                    <input type="radio" name="chon" value="Timmax">TÌM Max
                    <input type="radio" name="chon" value="Timmin">TÌM Min <br>
                    <input type="radio" name="chon" value="Songuyento">Các số nguyên tố <br>
                    <input type="radio" name="chon" value="Sochinhphuong">Các số chính phương <br>
                    <input type="radio" name="chon" value="Sohoanthien">Các số hoàn thiện <br>
                </td>
                <td class="error">Mời bạn chọn </td>
            </tr>
            <tr>
                <td>Kết Quả </td>
                <td><input type="text" value="<?php echo $ketqua;?>"></td>
                <td></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="calculator" value="Tính"></td>
                <td></td>
            </tr>

        </table>
        
        
    </form>
</body>
</html>