<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 6</title>
</head>

<body>
   
<?php
    //Bài tập 1 Giải phương trình bậc 1
    $a=isset($_POST['soa'])? $_POST['soa']:'';

    $b=isset($_POST['sob'])? $_POST['sob']:'';

    function PTB1($a,$b)
    {

        if($a!='' && $b!='')
        {
            //$a= $_POST['soa'];
            //$b= $_POST['sob'];

            if($a==0)
            {
                if($b==0) {
                    echo 'Phương trình bậc 1 vô số nghiệm<br>';
                }
                else {
                    echo 'Phương trình bậc 1 vô nghiệm.<br>';
                }
            }
            else
            {
                $x=-$b/$a;
                echo "<br>Phương trình bậc 1 có nghiệm x = ".$x."<br>";
            }
        }
        else
        {
            echo 'Bạn chưa nhập...<br>';
        }
    }
    

    //Bài tập 2
    $c=isset($_POST['numberc'])? $_POST['numberc']:'';

    function Bai2($c) {
        $giaithua=1;
        if($c<0) {
            echo "Số tự nhiên này không hợp lệ";
        }
        else {
            for($i=1;$i<=$c;$i++) {
                $giaithua *=$i;
            }
        echo "Giai thừa của $c là:" .$giaithua;    
        }
    }

    //Bài tập 3
    $toan=isset($_POST['diemtoan'])? $_POST['diemtoan']:'';
    $van=isset($_POST['diemvan'])? $_POST['diemvan']:'';
    $anh=isset($_POST['diemanh'])? $_POST['diemanh']:'';
    $ly=isset($_POST['diemly'])? $_POST['diemly']:'';
    $hoa=isset($_POST['diemhoa'])? $_POST['diemhoa']:'';
    $su=isset($_POST['diemsu'])? $_POST['diemsu']:'';
    function Bai3($toan,$van,$anh,$ly,$hoa,$su) {
        if($toan!='' && $van!='' && $anh!='' && $ly!='' && $hoa!='' && $su!='') {
            $tong=($toan + $van + $anh + $ly + $hoa + $su )/6;
            if($tong<5) {
                echo "Xếp loại Yếu và tổng số điểm là:" .$tong;
            }
            else if(5 <=$tong && $tong<6.5) {
                echo "Xếp loại Trung Bình và tổng số điểm là:" .$tong;
            }
            else if(6.5 <=$tong && $tong < 7.5) {
                echo "Xếp loại Khá và tổng số điểm là:" .$tong;
            }
            else if(7.5 <=$tong && $tong<9) {
                echo "Xếp loại Giỏi và có tổng điểm là:" .$tong;
            }
            else {
                echo "Xếp loại Xuất sắc và tổng điểm là:" .$tong;
            }
        }
        else {
            echo "Bạn chưa nhập điểm của sinh viên này." .'<br>';
        }
    }

    //Bài tập 4
    $e=isset($_POST['numbere'])? $_POST['numbere']:'';
    function Bai4($so) {
        $total=0;
        if($so<0) {
            echo "Giá trị số nhập vào phải là số lớn hơn 0";
        }
        else {
            for($i=1;$i<=$so;$i++){
                if($i == 1) {
                    echo $i;
                    $total += $i;
                }
                else {
                    $total +=$i;
                    echo "-" .$i;
                }
            }
        echo "<br> Tổng dãy số từ 1 đến " .$so. " đã nhập vào là: " .$total;
        }
    }

    //Bài tập 5
    $f=null;
    $sum=null;
    
        if(isset($_POST['f']) && isset($_POST['tinh'])) {
            $f=$_POST['f'];
            $array=explode(",",$f);
            foreach($array as $phantu) {
                $sum += $phantu;
            }
        }
?>
        
    <form action="" method="post">
        <p>Bài tập 1 </p>
        <h3>Giải Phương trình bậc 1</h3> 
        <input type="text" name='soa'size='1' value="<?php echo $a;?>">
    x + <input type="text" name='sob'size='1' value="<?php echo $b;?>"> = 0
    <br>
    <br>
        <?php PTB1($a,$b);?>
    <button type="submit">Tính</button>

        <p>Bài tập 2</p>
        <h3>Tính giai thừa của số tự nhiên </h3>
        <input type="text" name='numberc'size='1' value="<?php echo $c;?>">!
        <br>
        <?php Bai2($c);?>
    <button type="submit">Tính</button> 
        
    
        <p>Bài tập 3</p>
        <h3>Điểm trung bình các môn học </h3>
        Toán
        <input type="text" name="diemtoan" size='1' value="<?php echo $toan;?>">
        văn 
        <input type="text" name="diemvan" size='1' value="<?php echo $van;?>">
        anh 
        <input type="text" name="diemanh" size='1' value="<?php echo $anh;?>">
        Lý 
        <input type="text" name="diemly" size='1' value="<?php echo $ly;?>">
        Hóa
        <input type="text" name="diemhoa" size='1' value="<?php echo $hoa;?>">
        Sử 
        <input type="text" name="diemsu" size='1' value="<?php echo $su;?>">=
    <button type="submit">Kiểm Tra </button>
        <?php Bai3($toan,$van,$anh,$ly,$hoa,$su);?>

        <p>Bài tập 4</p>
        <h3>Hiển thị dãy số và tổng các dãy số </h3>
        <input type="text" name="numbere" size='1' value="<?php echo $e;?>">
        <br>
    <button type="submit">Show </button> 
    <br>
        <?php Bai4($e);?>

        <p>Bài tập 5 </p>
        <table align="center" >
     <tr>
          <th><h4 class="content" style="color: black; background: blue">Nhập và tính tổng dãy số:</h4></th>
     </tr>
     <tr>
         <th>Nhập dãy số</th>
         <th><input type="text" name='f' value="<?php echo $f;?>"> </th>
     </tr>
     <tr>
         <th></th>
         <th><button type="submit" name="tinh" >Tổng dãy số là:</button>
     </tr>
     <tr>
         <th>Tổng :</th>
         <th><input type="text" value="<?php echo $sum;?>"></th>
     </tr>
    </table>
</form>

    
</body>
</html>