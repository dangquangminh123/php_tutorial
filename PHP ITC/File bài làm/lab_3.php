<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
</head>
<body>
    <?php 
    //Bài 1
    echo "Bài tập 1 <br>";
    function Number($n) {
        // so nguyen n < 2 khong phai la so nguyen to
        if ($n < 2) {
            return false;
        }
        // check so nguyen to khi n >= 2
        $so = sqrt ( $n );
        for($i = 2; $i <= $so; $i ++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
     
    echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
    for($i = 0; $i < 100; $i ++) {
        if (Number ( $i )==true) {
            echo ($i . " ");
        }
    }

    //Bài 1 cách 2
    echo "<br> Bài tập 1 cách 2 <br>";
    $n=5;
    $dem=0;
    if($n<0) {
        echo "Số" .$n. "Này không phải là số nguyên tố";
    }

    for ( $i=1;$i<=$n;$i++) {
        if($n%$i == 0) {
            $dem++;
        }

    }
        if($dem==2){
            echo "Số" . $n . "Là số nguyên tố";
        }
        else {
            echo "Số" .$n. "Này không phải là số nguyên tố" .'<br>';
        }

    //Bài 2
    echo "<br> Bài tập 2 <br>";
    $a=12;
    $b=6;
    $tich=$a*$b;
    if ($a == 0 || $b == 0){
        return $a + $b;
    }
    while ($a != $b){
        if ($a > $b){
            $a -= $b; // a = a - b
        }else{
            $b -= $a;
        }
        $UCLN=$a;
        $BCNN=$tich/$UCLN;
    }
    echo "ước chung lớn nhất là:" .$UCLN . '<br>';
    echo "Bội chung nhỏ nhất là:" .$BCNN . '<br>';

    //Bài 3
    echo "Bài tập 3 <br>";
    $N=12;
    $dem=0;
    if($N<=0) {
        echo "Không hợp lệ vì N phải là số nguyên dương <br>";
    }
    else {
        for ($i=1;$i<=$N;$i++){
            if($N % $i ==0) {
                 $dem++;
            }
        }
    }
    echo "Có $dem ước số của số nguyên dương $N" . '<br>';

    //Bài 4
    echo "Bài tập 4 <br>";
    function kiemtra($n) {
        $tonguoc=0;
        for($i=1 ;$i<$n;$i++) {
            if ($n % $i ==0) {
                $tonguoc += $i;
            }
        }
        if ($tonguoc==$n) {
            return true;
        }
        else {
            return false;
        }
    }
     
    echo ("Các số hoàn thiện nhỏ hơn 500 là: <br>");
    for($i = 0; $i < 500; $i ++) {
        if (kiemtra ( $i )) {
            echo ($i . " ");
        }
    }

    //Bài 5
    echo "<br> Bài tập 5 <br>";
    $n=5;
    $giaithua=1;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $giaithua *=$i;
        }
    }
    echo "Giải thừa của $n là:" .$giaithua .'<br>';
    

    //Bài 5 cách 2
    echo "Bài tập 5 cách 2 <br>";
    $n=5;
    $GIAITHUA=1;
    if($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        $i=1;
        while ($i<=$n) {
            $GIAITHUA *= $i;
            $i++;
        }
    }
    echo "Giải thừa của $n là:" .$GIAITHUA .'<br>';

    //Bài 6
    echo "Bài tập 6 <br>";
    $n=13;
    $P=1;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i +=2) {
            $P *=$i;
        }
    }
    echo "Tích dãy số là:" .$P .'<br>';
    
    //Bài 6 cách 2
    echo "Bài tập 6 cách 2 <br>";
    $n=13;
    $P=1;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        $i=1;
        while ($i<=$n) {
        $P *=$i;
        $i+=2;
        }
        echo "Tích dãy số là:" .$P .'<br>';
    }

    //Bài 7
    echo "Bài tập 7 <br>";
    $n=13;
    $S=0;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i +=2) {
            $S +=$i;
        }
    }
    echo "Tổng dãy số là:" .$S .'<br>';

    //Cách 2
    echo "Bài tập 7 cách 2 <br>";
    $n=13;
    $S=0;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=0; $i<=$n;$i ++) {
            $S +=$i;
        }
    }
    echo "Tổng dãy số là:" .$S .'<br>';

    //Bài 8
    echo "Bài tập 8 <br>";
    $s=0;
    $n=14;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $s +=((-1)**($i+1))*$i;
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';

    //Bài 9 
    echo "Bài tập 9 <br>";
    $s=0;
    $n=3;
    $giaithuats=1;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $giaithuats *=$i;
            $s +=$giaithuats;
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';

    //Bài 10
    echo "Bài tập 10 <br>";
    $s=0;
    $n=3;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $s +=$i**2;
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';

    //Bài 11
    echo "Bài tập 11 <br>";
    $s=0;
    $n=3;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $s +=1/($i);
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';

    //Bài 12
    echo "Bài tập 12 <br>";
    $s=0;
    $n=3;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $s +=$i**($i);
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';

    //Bài 13
    echo "Bài tập 13 <br>";
    $s=0;
    $n=3;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $s +=$i/($i+1);
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';

    //Bài 14
    echo "Bài tập 14 <br>";
    $s=0;
    $n=3;
    $tinhGT=1;
    if ($n<0) {
        echo "Không hợp lệ vì n phải là số dương <br>";
    }
    else {
        for ($i=1; $i<=$n;$i++) {
            $tinhGT *=$i;
            $s += 1/($tinhGT);
        }
    }
    echo "Tổng dãy số là:" .$s .'<br>';
    
    
    ?>
</body>
</html>