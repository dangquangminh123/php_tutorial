<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5 </title>
</head>
<body>
    <?php 
        //Bài 1
        echo "Bài tập 1 phát sinh ngẫu nhiên mảng một chiều các số thực <br>";
            $arr=array();//khai báo mảng
            $n=10;//khai báo biến n số phẩn tử trong mảng
            function Mang_NgauNhien(&$Mang,$n)//hàm phát phát sinh mảng ngẩu nhiên
            {
                    for($i=0;$i<$n;$i++) {
                    $Mang[$i]=rand(1,10)*1.0;//phát sinh số thực ngẫu nhiên từ 1 đến 10;
                    }
            }

            function nhap_xuatmangnguyen(&$Mang,$n) {
                for($i=0;$i<$n;$i++) {
                    $Mang[$i]=rand(1,10);
                }
                echo "Các phần tử của mảng là:";
                for($i=0;$i<$n;$i++) {
                    echo " ".$Mang[$i];
                }
        }
        function XuatMang($Mang)
        {
            $n=count($Mang);//Tổng số lượng phần tử của mảng
                for($i=0;$i<$n;$i++){
                        //echo $Mang[$i]. " ";
                        //%d: là số nguyên
                    printf("%2.1f ",$Mang[$i]);//xuất các số thực
                    echo ",";
                }
        }
        //gọi hàm để thưc thi
        Mang_NgauNhien($arr,$n);
        echo "Mảng sau khi nhập:";
        XuatMang($arr);
        echo "<br>";

        //Bài 2
        echo "Bài tập 2 khởi tạo giá trị các phần tử là 0 cho mảng một chiều các số nguyên <br>";
        function phantukhong(&$Mang2,$n) 
        {
            for($i=0;$i<$n;$i++) {
                $Mang2[$i]=0;
            }
        }
        phantukhong($arr,$n);
        echo "Mảng giá trị phần tử 0 là:";
        XuatMang($arr);

        //Bài 3
        echo "<br> Bài tập 3 Phát sinh ngẫu nhiên mảng một chiều các số nguyên âm <br>";
        function nguyenam(&$Mang3,$n) {
            for($i=0;$i<$n;$i++) {
                $Mang3[$i]=-rand(1,10)*1.0;
            }
        }
        nguyenam($arr,$n);
        echo "Mảng ngẫu nhiên các số nguyên âm là:";
        XuatMang($arr);

        //Bài 4
        echo "<br> Bài tập 4 Phát sinh ngẫu nhiên mảng một chiều các số nguyên sao cho mảng có thứ tự tăng dần (không sắp xếp) <br>";
        function mangtangdan(&$Mang4,$n) {
            $Mang4[0]=rand(1,10);
            for($i=0;$i<$n;$i++) {
                $Mang4[$i+1]=$Mang4[$i]+rand(1,10);
            }
        }
        mangtangdan($arr,$n);
        echo "Mảng ngẫu nhiên một chiều các số nguyên tăng dần không sắp xếp";
        XuatMang($arr);

        //Bài 5
        echo "<br> Bài tập 5 Nhập mảng thực và xuất các phần tử âm trong mảng: <br>";
        function MangThuc_Am(&$Mang5, $n) {
            for($i=0;$i<$n;$i++) {
                $Mang5[$i]=-rand(1,10)*0.1;
            }
        }
        MangThuc_Am($arr,$n);
        echo "Mảng là các số thực nguyên âm là:";
        XuatMang($arr);

        //Bài 6
        echo "<br> Bài tập 6 Xuất các phần tử lẻ trong mảng: <br>";
        function phantule(&$Mang6, $n) {
            for($i=0;$i<$n;$i++) {
                $Mang6[$i]=rand(1,10);
            }
            for($i=0;$i<$n;$i++) {
                if($Mang6[$i] %2 != 0) {
                    echo $Mang6[$i]. ",";
                }
            }
        }

        echo "Các phần tử lẻ trong mảng là:";
        phantule($arr,$n);

        //Bài 7
        echo "<br> Bài tập 7 các phần tử chẵn nhỏ hơn 20 <br>";
        function chan_nhohon20(&$Mang7, $n){
            for($i=0;$i<$n;$i++) {
                $Mang7[$i]=rand(1,10);
            }
            for($i=0;$i<$n;$i++) {
                if($Mang7[$i] % 2 ==0 && $Mang7[$i] < 20) {
                    echo $Mang7[$i], ",";
                }
            }
        }
        echo "Các phần tử chẵn nhỏ hơn 20 là:";
        chan_nhohon20($arr,$n);

        //Bài 8
        echo "<br> Bài tập 8 Xuất các phần tử là số nguyên tố: <br>";
        function nguyento($m) {
            // so nguyen n < 2 khong phai la so nguyen to
            if ($m < 2) {
                return false;
            }
            // check so nguyen to khi n >= 2
            $so = sqrt ( $m );
            for($i = 2; $i <= $so; $i ++) {
                if ($m % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        function songuyento(&$Mang8,$n) {
            for($i=0;$i<$n;$i++) {
                $Mang8[$i]=rand(1,10);
            }
            for($i=1;$i<$n;$i++) {
                if(nguyento ($Mang8[$i])==true) {
                    echo $Mang8[$i]. ",";
                }
            }
        }
        echo "Các phần tử là số nguyên tố là:";
        songuyento($arr,$n);

        //Bài 9
        echo "<br> Bài tập 9 các số chính phương nằm tại những vị trí lẻ: <br>";
        function So_ChinhPhuong($n)
        {
            $cp=(int)sqrt($n);
            if($cp*$cp==$n) {
                return true;
            }
            return false;
        }

        function chinhphuong_vitrile(&$Mang9,$n){
            for($i=0;$i<$n;$i++) {
                $Mang9[$i]=rand(1,10);
            }
            for($i=1;$i<$n;$i++) {
                if(So_ChinhPhuong($Mang9[$i])==true && $i % 2 != 0) {
                    echo $Mang9[$i]. ",";
                }
            }
        }
        echo "Các phần tử chính phương tại những vị trí lẻ là:";
        chinhphuong_vitrile($arr,$n);

        //Bài 10
        echo "<br> Bài tập 10 Tìm vị trí phần tử có giá trị X xuất hiện cuối cùng trong mảng:";
        function phantu_cuoicung(&$Mang10,$n,$x){
            for($i=0;$i<$n;$i++) {
                $Mang10[$i]=rand(1,10);
            }
            for($i=0;$i<$n;$i++) {
                echo " ".$Mang10[$i];
            }
            echo " Phần tử x xuất hiện lần cuối là:  ";
            for($i=$n-1;$i>=0;$i--) {
                if($Mang10[$i]==$x) {
                    echo $Mang10[$i]. "Ở vị trí thứ" . $i;
                    break;
                }
            }
        }
        phantu_cuoicung($arr,$n,$x=5);

        //Bài 11
        echo "<br> Bài tập 11 tìm vị trí phần tử nhỏ nhất trong mảng các số nguyên <br>:";
        function vitrimin(&$Mang11,$n) {
            for($i=0;$i<$n;$i++) {
                $Mang11[$i]=rand(1,10);
            }
            //Xuất
            echo "Các phần tử của mảng là:";
            for($i=0;$i<$n;$i++) {
                echo " ".$Mang11[$i];
            }

            $min=$Mang11[0];
            $vitri=0;
            for($i=0;$i<$n;$i++) {
                if($Mang11[$i]<$min) {
                    $min=$Mang11[$i];
                    $vitri=$i;
                }
            }
            return $vitri;
        }
        $nhonhat = vitrimin($arr,$n);
        echo "<br> Vị Trí phần tử nhỏ nhất trong mảng là:";
        echo $nhonhat .'<br>';

        //Bài 12 
        echo "<br> Bài tập 12 Tìm vị trí phần tử lớn nhất trong mảng các số nguyên <br>:";
        function vitrimax(&$Mang12,$n) {
            for($i=0;$i<$n;$i++) {
                $Mang12[$i]=rand(1,10);
            }
            //Xuất
            echo "Các phần tử của mảng là:";
            for($i=0;$i<$n;$i++) {
                echo " ".$Mang12[$i];
            }

            $max=$Mang12[0];
            $vitri2=0;
            for($i=0;$i<$n;$i++) {
                if($max<$Mang12[$i]) {
                    $max=$Mang12[$i];
                    $vitri2=$i;
                }
            }
            return $vitri2;
        }
        $lonnhat = vitrimax($arr,$n);
        echo "<br> Vị Trí phần tử lớn nhất trong mảng là:";
        echo $lonnhat .'<br>';

        //Bài 13
        echo "<br> Bài tập 13 Vị trí các phần tử nguyên tố: <br>";
        function nguyen_to($m) {
            // so nguyen n < 2 khong phai la so nguyen to
            if ($m < 2) {
                return false;
            }
            // check so nguyen to khi n >= 2
            $so = sqrt ( $m );
            for($i = 2; $i <= $so; $i ++) {
                if ($m % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        function phantu_nguyento(&$Mang13,$n) {
            
            for($i=1;$i<$n;$i++) {
                if(nguyen_to ($Mang13[$i])==true) {
                    echo $i. ",";
                }
            }
        }
        nhap_xuatmangnguyen($arr,$n);
        echo "Các vị trí là số nguyên tố là:";
        phantu_nguyento($arr,$n);

        //Bài 14 
        echo "<br> Bài tập 14 in các phần tử nguyên tố lớn hơn 23 <br>";
        function nguyento_lonhon23(&$Mang14,$n) {
            
            for($i=1;$i<$n;$i++) {
                if(nguyen_to ($Mang14[$i])==true && $Mang14[$i]>23) {
                    echo $Mang14[$i]. ",";
                }
            }
        }
        nhap_xuatmangnguyen($arr,$n);
        echo "Các phần tử nguyên tố lớn hơn 23 là:";
        nguyento_lonhon23($arr,$n);

        //Bài 15 
        // echo "<br> Bài tập 15 Tìm phần tử âm đầu tiên trong mảng <br>";
        // $dayso=[];
        // function nhap()
        // {
        //     global $dayso;
        //     $dayso[0]=-12.2;
        //     $dayso[1]=8.6;
        //     $dayso[2]=1.0;
        //     $dayso[3]=65.25;
        //     $dayso[4]=32.143;
        // }
        //  function xuat_am()
        // {
        //    global $dayso;
        //     for($i=0;$i<count($dayso);$i++)
        //     {
        //       if($dayso[$i]<0)
        //       {
        //        echo " ".$dayso[$i];
        //        break;
        //       }
        //       else {
        //           echo -1;
        //           break;
        //       }
        //     }
        // }
        // nhap();
        // echo "Phần tử âm đầu tiên trong mảng là:";
        // xuat_am();
        echo "Bài 15 <br>";
        $arr15=array();//khai báo mảng
        $a=10;//khai báo biến n số phẩn tử trong mảng
        function Mang_NgauNhienB15(&$Mang15,$a)//hàm phát phát sinh mảng ngẩu nhiên
        {
                for($i=0;$i<$a;$i++) {
                $Mang15[$i]=rand(0,10);//phát sinh số thực ngẫu nhiên từ 1 đến 10;
                }
        }
        function XuatMangB15($Mang15)
        {
           $n=count($Mang15);//Tổng số lượng phần tử của mảng
               for($i=0;$i<$n;$i++){
                   echo(" ".$Mang15[$i]);//xuất các số thực(printf lấy giá trị của biến %2.f định dạng số thực)
                   echo " &nbsp;&nbsp;&nbsp;";
        }
       }
       function Tim_PhanTuAm($Mang15)
       {
       $n=count($Mang15);
       $tam=-1;
       for($i=0;$i<$n;$i++)
       {
           if($Mang15[$i]<0) {
           $tam=$Mang15[$i];
           echo "Phần tử âm đầu tiên là:";
           return $tam;
           }
        }
        echo "Mảng không có phần tử âm:";
        return $tam;
   }
        //gọi hàm để thưc thi
        Mang_NgauNhienB15($arr15,$n);
        echo "Mảng sau khi nhập:<br>";
        XuatMangB15($arr15);
        echo'<br>';
        $am=Tim_PhanTuAm($arr15);
        echo $am;

    ?>
</body>
</html>