<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giữa Kì và thực hành</title>
</head>
<body>
    <?php 
        //1
        $n=isset($_POST['phantu'])? $_POST['phantu']:'';
        $mang=array();
        $choose=isset($_POST['chon'])? $_POST['chon']:'';
        $ketqua="";
        if($n!='') {
            for($i=0;$i<$n;$i++) {
                $mang[$i]=1*mt_rand(0,10);
            }
        }

        if($n!='' && $choose!='' && isset($_POST['tinh'])) {
            if($choose=="duongle") {
                $ketqua=duongle();
            }
            if($choose=="chinhphuong") {
                $ketqua=chinhphuong();
            }
            if($choose=="giam"){
                $ketqua=manggiamdan();
            }
        }

        //Hàm dương lẻ
        function duongle() {
            global $mang;
            $duong="";
            for($i=0;$i<count($mang);$i++) {
                if($mang[$i]%2!=0) {
                    $duong .= $i;
                }
            }
            return $duong;
        }

        //Hàm kiểm tra số chính phương
        function kiemtrachinhgphuong($so) {
            $cp=(int)sqrt($so);
            if($cp*$cp==$so) {
                return true;
            }
            return false;
        }

        //Tính tích các số chính phương
        function chinhphuong() {
            global $mang;
            $tichcaccp=1;
            for($i=0;$i<count($mang);$i++) {
                if(kiemtrachinhgphuong($mang[$i])==true) {
                    $tichcaccp *= $mang[$i];
                }
            }
            return $tichcaccp;
        }

        //số chẵn đầu tiên
        function chandautien() {
            global $mang;
            $dautien="";
            for($i=0;$i<count($mang);$i++) {
                if($mang[$i]%2==0) {
                    $dautien = $mang[$i];
                    return $dautien;
                }
            }
        }

        //MẢng giảm dần
        

    ?>
    <form action="" method="post">
    <th><h4 align="center">Nội dung </h4>
        <table align="center" bgcolor="yellow" border=3>
            
                <th>Nhập số phần tử</th>
                <th><input type="text" name='phantu' value="<?php echo $n; ?>"> </th>
            </tr>
            <tr>
                <td>Xuất Mảng</td>
                <td><input type="text" name='xuatmang' value="<?php 
                 if(isset($_POST['tinh']) && isset($_POST['phantu'])) {
                    for ($i=0; $i < count($mang); $i++) { 
                        echo $mang[$i] . " ";
                    }
                }; ?>"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" name="chon" value="duongle">Xuất vị trí các giá trị dương lẻ</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" name="chon" value="chinhphuong">Tính tích các giá trị là số chính phương </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" name="chon" value="giam">Sắp xếp mảng giảm dần </td>
            </tr>
            <tr>
                <td>Kết Quả</td>
                <td><input type="text" name="ketqua" value="<?php echo $ketqua; ?>"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tinh" value="Thực Hiện"> </td>
            </tr>
        </table>
    </form>

    <?php 
        $result=chandautien();
        echo "<br> Số chẵn đầu tiên là:" .$result;
    ?>
</body>
</html>