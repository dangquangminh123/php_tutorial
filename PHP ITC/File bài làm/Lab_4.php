<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>
</head>
<body>
    <?php 
        //Bài 1
        echo "Bài tập 1 <br>";
        $dai=9;
        $rong=7;
        function hinhchunhat($d,$r) {
            if($d<0 && $r<0) {
                echo "Chiều dài và chiều rộng không hợp lệ <br>";
            }
            else {
                $dientich=$d*$r;
                $chuvi=($d+$r)*2;
            }
            echo "Diện tích hình chữ nhật là: $dientich" . " Và chu vi hình chữ nhật là: $chuvi" . '<br>';
        }
        hinhchunhat($dai,$rong);

        //Bài 2
        echo "Bài tập 2 <br>";
        $pi=3.14;
        $r=5;
        function hinhtron ($bankinh) {
            if ($bankinh<0) {
                echo "Giá trị bán kính không hợp lệ bán kính phải > 0 <br>";
            }
            else {
                global $pi;
                $dientichhinhtron=$bankinh*$bankinh*$pi;
                $chuvihinhtron=$bankinh*2*$pi;
            }
            echo "Diện tích hình tròn là: $dientichhinhtron" . " Chu vi hình tròn là: $chuvihinhtron" . '<br>';
        }
        hinhtron($r);

        //Bài 3
        echo "Bài tập 3 <br>";
        function NguyenTo($n)
        {
            if($n<0)
                return false;
            $dem=0;
            for($i=1;$i<=$n;$i++)
            {
                if($n%$i==0)
                    $dem++;
            }
            if($dem==2)
                return true;
            return false;
        }
        $n=6;
        if(NguyenTo($n)==true) {
            echo "<br>Số ".$n." là Nguyên tố " .'<br>'; 
        }
        else {
            echo "<br>Số ".$n." không phải Nguyên tố " .'<br>';
        }
        //Liệt kê các số nguyên tố
        echo "Các số nguyên tố từ 1 đến 100 là:<br>";
        for($i=1;$i<=100;$i++)
        {
            if(NguyenTo($i)==true) {
                echo $i.", ";
            }
        }

        //Bài 4
        echo "<br> Bài tập 4 <br>";
        function sochinhphuong($so) {
            if($so <0) {
                echo "Số này không hợp lệ vì < 0 <br>";
                return false;
            }
            else {
                if ($so ==((int)sqrt($so)*(int)sqrt($so))) {
                    return true;
                }
                return false;
            }
        }
        function lietke_chinhphuong($n) {
            for ($i=1; $i < $n; $i++) {
                if (sochinhphuong($i)==true) {
                    echo $i . ",";
                }
            }
        }
        $cp=100;
        echo "Các số chính phương là: <br>";
        lietke_chinhphuong($cp);

        //Bài 5
        echo "<br>Bài tập 5 <br>";
        //Kiểm tra số đó có phải số hoàn thiện không
        function SoHoanThien($n) {
            $sum=0;
            if($n<0) {
                return false;
            }
            for ($i=1;$i<$n;$i++) {
                if($n % $i ==0) {
                    $sum +=$i;
                }
            }
            if ($sum ==$n) {
                return true;
                return false;
            }
        }
        function LietKe_HoanThien($n) {
            for ($i=1;$i<$n;$i++) {
                if (SoHoanThien($i) == true) {
                    echo $i . ",";
                }
            }
        }
        $ht=100;
        echo " Các số hoàn thiện nhỏ hơn 100 là:";
        LietKe_HoanThien($ht);

        //Bài 6
        echo "<br> Bài tập 6 <br>";
        $GBD=7;
        $GKT=20;
        $SoMay=5;
        $tongtien=0;
        function kiemtragiogiac($BD,$KT) {
            if($BD>=6 && $BD<=$KT && $KT<=21) {
                return true;
            }
            else {
                return false;
            }
        }

        function tinhtien($bd,$kt) {
            if(kiemtragiogiac($bd,$kt)==true) 
            {
                if($bd<=17.5 && $kt<=17.5) {
                    return   $tongtien=2500*($kt-$bd);
                }
                else if ($bd < 17.5 && $kt >=17.5 ) {
                    return  $tongtien=2500*(17.5-$bd)+3000*($kt-17.5);
                }
                else {
                   return $tongtien=3000*($kt-$bd);
                }
            }
        }
        echo "Tổng tiền thuê máy enternet là:" . tinhtien($GBD,$GKT) . '<br>';
        echo "Số máy là $SoMay <br>";

        //Bài 7
        echo "Bài tập 7 <br>";
        $luongngay=0;
        function checktime($in,$out) {
            if ($in >=6 && $out<=18 && $in<$out) {
                return true;
            }
            else {
                return false;
            }
        }

        function tinhcong($giovao,$giora) {
            if(checktime($giovao,$giora)==true) 
            {
                if ($giovao<12 && $giora<12) {
                    return $luongngay=($giora-$giovao)*6000;
                }
                else if($giovao<12 && $giora>12) {
                    return $luongngay=6000*(12-$giovao)+7500*($giora-12);
                }
                else {
                     return $luongngay=7500*($giora-$giovao);
                }
            }
        }
        echo "Tổng số tiền lương ngày mà công nhân đó nhận là:" . tinhcong(7,17) . '<br>';

        //Bài 8
        echo "Bài tập 8 <br>";
        $n=30;
        $chan=0;
        $le=0;
        for ($i=1; $i<=$n; $i++) {
            if($i%2==0) {
                // echo $i . "là số chẵn <br>";
                $chan++;
            }
            else {
                // echo $i . "Là số lẻ <br>";
                $le++;
            }
        }
        echo "Có $chan là số chẵn" . '<br>';
        echo "Có $le là số lẻ" . '<br>';

        //Bài 9
        $number=30;
        $count=0;
        echo "Bài tập 9 <br>";
        function KT_nguyento ($num) {
            for($i=2;$i<$num;$i++){
                if($num%$i==0) {
                    return false;
                }
            }
            return true;
        }

        function demnguyento($so) {
            for($i=1;$i<=$so;$i++) {
                if(KT_nguyento($i)==true) {
                    global $count;
                    $count++;
                }
            }
        }
        demnguyento($number);
        echo "Có tất cả các số nguyên tố là:" .$count .'<br>';

        //Bài 10
        echo "Bài tập 10 <br>";
        $tonguoc=0;
        $so=6;
        function tonguoc($x){
            for($i=1;$i<$x;$i++) {
                if($x%$i==0) {
                    global $tonguoc;
                    $tonguoc +=$i;
                }
            }
        }
        tonguoc($so);
        echo "Tổng ước số của $so là:" .$tonguoc. '<br>';

        //Bài 11
        echo "Bài tập 11 <br>";
        // $numbery=5;
        // $mang11 =array();
        // function mangphantu0($y){
        //     for ($i=0;$i<$y;$i++) {
        //         $mang11[$i]=0;
        //         echo "<pre>";
        //         echo $mang11[$i];
        //         echo "</pre>";
        //     }
        // }
        // mangphantu0($numbery);

        //Cách 2
        $n=5;
        $a= array();
        function khoitao()
        {
            global $n,$a;
            for($i=0;$i<$n;$i++)
            {
                $a[$i]=0;
            }
        }
        function xuat_mang()
        {
            global $n,$a;
            for($i=0;$i<$n;$i++)
            echo " ".$a[$i];
        }
        khoitao();//Gọi hàm thì mới được thực thi
        xuat_mang();

        //Bài 12
        echo "<br> Bài tập 12 <br>";
        // $numberz=5;
        // $mang12 =array();
        // function mangnguyenam($z){
        //     for ($i=1;$i<$z;$i++){
        //         $mang12[$i]=-$i;
        //         echo "<pre>";
        //         echo $mang12[$i];
        //         echo "</pre>";
        //     }
        // }
        // mangnguyenam($numberz);

        //Cách 2
        $n=5;
        echo "Mảng ngẫu nhiên có $n số nguyên âm :  <br>" ;
        $dayso=[];
        for ($i=0; $i <$n ; $i++) { 
            
            $dayso[$i]=-1*mt_rand(0,100);
        }
        for ($i=0; $i < count($dayso); $i++) { 
            
            echo $dayso[$i] . " ";
        }

        echo "Bài 12 cách 3 Phát sinh mảng 1 chiều các số nguyên âm <br>";
        $dayso=[];
        function nhap()
        {
            global $dayso;
            $dayso[0]=-12.2;
            $dayso[1]=8.6;
            $dayso[2]=-1.0;
            $dayso[3]=-65.25;
            $dayso[4]=32.143;
        }
        function xuat_am()
        {
           global $dayso;
            for($i=0;$i<count($dayso);$i++)
            {
              if($dayso[$i]<0)
              {
               echo " ".$dayso[$i];
              }
            }
        }
        nhap();
        xuat_am();

        //Bài 13
        echo "<br> Bài tập 13 <br>";
        $n=5;
        echo "Mảng ngẫu nhiên $n số nguyên tăng dần :  <br>" ;
        $dayso=[];
        $dayso[0]=mt_rand(0,100);
        for ($i=1; $i <$n ; $i++) { 
            
            $dayso[$i]= $dayso[$i-1] + mt_rand(0,100);
        }
        for ($i=0; $i < count($dayso); $i++) { 
            
            echo $dayso[$i] . " ";
        }
        
        //Bài 14
         echo "<br>Bài tập 14 <br>";
        // $numbera=6;
        // $mang14=array();
        // function bai14($a){
        //     for ($i=0;$i<$a;$i++){
        //         $mang14[$i] = -$i*0.1;
        //         echo "<pre>";
        //         echo $mang14[$i];
        //         echo "</pre>"; 
        //     }
        // }
        // bai14($numbera);
        
        //Cách khác của 11 12 13 14
        //11
        function khoitaomang(&$mang,$n) {
            for ($i=0;$i<$n;$i++)
                $mang[$i]=0;
        }
        //12
        function MangAm(&$mang,$n) {
            for ($i=0;$i<$n;$i++)
                $mang[$i]=-rand(1,10);
        }
        //14
        function MangThucAm(&$mang,$n) {
            for ($i=0;$i<$n;$i++)
                $mang[$i]=-rand(1,10)*0.1;
        }
        //13
        function MangNgauNhienTang(&$mang,$n) {
            $mang[0]=rand(1,10);
            for($i=1;$i<$n;$i++) {
                $mang[$i]=$mang[$i-1]+rand(1,10);
            }
        }
        function XuatMang($mang,$n) {
            for ($i=0;$i<$n;$i++) {
                echo $mang[$i]. " ; ";
            }
        }
        $arr=array();
        $n=10;
        khoitaomang($arr,$n);//11
        echo "<br> Mảng các phần tử 0 vừa khởi tạo giá trị ban đầu.";
        XuatMang($arr,$n) ;
        MangAm($arr,$n);//12
        echo "<br> Mảng âm là:";
        XuatMang($arr,$n);
        MangNgauNhienTang($arr,$n);//13
        echo "<br> Mảng ngẫu nhiên tăng dần.";
        XuatMang($arr,$n);
        MangThucAm($arr,$n);//14
        echo "<br> Mảng các số thực âm là :";
        XuatMang($arr,$n);
    ?>
</body>
</html>