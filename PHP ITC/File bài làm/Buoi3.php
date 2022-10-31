<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 3</title>
</head>
<body>
    <?php
        //Ví dụ 1
        echo "Ví dụ 1 <br>";
        $tuoi=20;
        if($tuoi>18) {
            echo "Tuổi của bạn lớn hơn 18" . '<br>';
        }
        else {
            echo "Tuổi của bạn nhỏ hơn 18" .'<br>';
        }

        $num=13;
        if ($num%2==0)
            echo "Đây là số chẵn" . '<br>';
        else 
            echo "Đây là số lẻ" . '<br>';

        //Ví dụ 2
        echo "Ví dụ 2 <br>";
        $Diem=60;
        if($Diem<=50) 
            echo "Xếp loại yếu" . '<br>';
        else if ($Diem >=60 && $Diem<=70)
        {
            echo "Xếp loại trung bình" . '<br>';
        }
        else if ($Diem >70 && $Diem<=80) {
            echo "Xếp loại khá" . '<br>';
        }
        else if ($Diem>80  && $Diem <=90) {
            echo "Xếp loại giỏi" . '<br>';
        }
        else if ($Diem>90) {
            echo "Xếp loại xuất sắc" . '<br>';
        }
        else {
            echo "Xếp loại kém" . '<br>';
        }

        //Ví dụ 3
        echo "Ví dụ 3 <br>";
        $money=12000;
        switch($money)
        {
            case 12000:
                echo "<p> Cafe sữa </p>.<br>"; break;
            case 15000:
                echo "<p> Cafe đá </p>.<br>"; break;
            case 8000:
                echo "<p> sting dâu </p>. <br>"; break;
            case 2000:
                echo "<p> Trà đá </p>. <br>"; break;
            default:
                echo "<p> Bạn chưa chọn thực đơn </p>.";
        }

        //Ví dụ 4
        echo "Ví dụ 4 <br>";
        $date= getdate();
        var_dump($date);
        switch($date['weekday'])
        {
            case 'Monday':
                echo "Thứ hai .<br>"; break;
            case 'Tuesday':
                echo "Thứ ba .<br>"; break;
            case 'wednesday':
                echo "Thứ tư .<br>"; break;
            case 'thursday':
                echo "Thứ năm .<br>"; break;
            case 'friday':
                echo "Thứ sáu .<br>"; break;
            case 'Saturday':
                echo "Thứ bảy .<br>"; break;
            case 'Sunday':
                echo "Chủ nhật .<br>"; break;       
        }

        $Month=getdate();
        var_dump($Month);
        switch($Month['mon'])
        {
            case 1:
            case 2:
            case 3:
                echo "Mùa Xuân . <br>"; break;
            case 4:
            case 5:
            case 6:
                echo "Mùa hạ . <br>"; break;
            case 7:
            case 8:
            case 9:
                echo "Mùa Thu . <br>"; break;
            case 10:
            case 11:
            case 12:
                echo "Mùa Đông . <br>"; break;
        }

        switch($Month['mon'])
        {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo "Tháng có 31 ngày. <br>"; break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo "Tháng có 30 ngày. <br>"; break;
            case 2:
                echo "Năm nhuận thì có 29 ngày. Còn khoogn nhuận thì có 28 ngày. <br>"; break;
        }

        //Ví dụ 5
        echo "Ví dụ 5 <br>";
        for ($i=1;$i<=10;$i++)
        {
            echo $i."x"."2=". $i*2 .'<br>' ;
        }
        for ($i=10;$i>0;$i--)
        {
            echo $i."x"."2=". $i*2 .'<br>' ;
        }

        //Ví dụ 6
        //Khi không có break thì PHP nó sẽ chạy tiếp toàn bộ echo còn lại trong các case
        //Khi có break PHP chỉ chạy câu lệnh echo mà thỏa mãn với case tương ứng đó
        echo "Ví dụ 6 <br>";
        $num=20;
        switch($num){
        case 10:
            echo("number is equals to 10") .'<br>';
        case 20:
            echo("number is equal to 20") .'<br>';
        case 30:
            echo("number is equal to 30") .'<br>';
        default:
            echo("Not in 10, 20 or 30") .'<br>';
        }

        $season = "hạ";
        switch ($season) {
            case 'xuân':
                echo "<p>Mùa Xuân</p>" .'<br>';
            case 'hạ':
                 echo "<p>Mùa Hạ</p>" .'<br>';
            case 'thu':
                echo "<p>Mùa Thu</p>" .'<br>';
             case 'đông':
                echo "<p>Mùa Đông</p>" .'<br>';
                
        }

        //Khi có break PHP chỉ chạy câu lệnh echo mà thỏa mãn với case tương ứng đó
        $season = "xuan";
        switch ($season){
            case "xuan":
                echo "Mùa Xuân" .'<br>';
                break;
            case "ha":
                echo "Mùa Hạ" .'<br>';
                break;
            case "thu":
                echo "Mùa Thu" .'<br>';
                break;  
            case "dong":
                echo "Mùa Đông" .'<br>';
                break;
            default:
                echo "KHÔNG XÁC ĐỊNH" .'<br>';
                break;
        }

        $num=20;
        switch($num){
            case 10:
                echo("number is equals to 10") .'<br>';
                break;
            case 20:
                echo("number is equal to 20") .'<br>';
                break;
            case 30:
                echo("number is equal to 30") .'<br>';
                break;
            default:
                echo("Not in 10, 20 or 30") .'<br>';
        }

    //Ví dụ 7 switch case lồng nhau
    echo "Ví dụ 7 <br>";
    $season = "Xuân";
    $month = 3;
    switch($season){
    case "Xuân":
        switch($month){
        case 1:
            echo "Mùa Xuân - Tháng 1" .'<br>';
            break;
        case 2:
            echo "Mùa Xuân - Tháng 2" .'<br>';
            break;
        case 3:
            echo "Mùa Xuân - Tháng 3" .'<br>';
            break;  
        default:
            echo "Mùa " + $season + "
            không có tháng" + $month .'<br>';
            break;
        }
    break;

    case "Hạ":
        switch($month){
        case 4:
            echo "Mùa Hạ - Tháng 4" .'<br>';
            break;
        case 5:
            echo "Mùa Hạ - Tháng 5" .'<br>';
            break;
        case 6:
            echo "Mùa Hạ - Tháng 6" .'<br>';
            break;
        default:
            echo "Mùa " + $season + "
            không có tháng" + $month .'<br>';
        break;
        }
        break;

    case "Thu":
        switch($month){
        case 7:
            echo "Mùa Thu - Tháng 7" .'<br>';
            break;
        case 8:
            echo "Mùa Thu - Tháng 8" .'<br>';
            break;
        case 9:
            echo "Mùa Thu - Tháng 9" .'<br>';
            break;
        default:
            echo "Mùa " + $season + "
            không có tháng" + $month .'<br>';
        break;
        }
        break;

    case "Đông":
        switch($month){
        case 10:
            echo "Mùa Thu - Tháng 10" .'<br>';
            break;
        case 11:
            echo "Mùa Thu - Tháng 11" .'<br>';
            break;
        case 12:
            echo "Mùa Thu - Tháng 12" .'<br>';
            break;
        default:
            echo "Mùa " + $season + "
            không có tháng" + $month .'<br>';
        break;
        }
        break;
    default:
        echo "KHÔNG XÁC ĐỊNH";
        break;
    }

    //Ví dụ 8
    echo "Ví dụ 8 <br>";
    for ($i=0;$i<10;$i++) {
        echo "Số: " .($i+1). '<br>';
    }
    
    for ($i=10;$i>0;$i--) {
        echo "Số: " .($i+0). '<br>';
    }

    //Ví dụ 9
    echo "Ví dụ 9 <br>";
    for ($i=1;$i<=3;$i++){
        for($j=1;$j<=3;$j++){
            echo "$i $j <br>";
        }
    }

    //Ví dụ 10
    echo "Ví dụ 10 <br>";
    $season=array("summer","winter","spring","autumn");
    foreach($season as $arr) {
        echo "season is: $arr<br>";
    }

    //Ví dụ 11 vòng lặp while (while khác for là không biết được số lần lặp lại sẽ là bao nhiêu)
    echo "Ví dụ 11 <br>";
    $i=1;
    while ($i<=10) {
        echo "$i <br>";
        $i++;
    }
    //Vòng while chạy không điểm dừng
    // while (true) {
    //     echo "Vòng lặp while vô tận..." .'<br>';
    //     }

    //Ví dụ 12 vòng lặp do-while
    echo "Ví dụ 12 <br>";
    $a=1;
    $sum=0;
    do {
        $sum +=$a;
        $a++;
    }while ($a<=5);
    echo "Tổng các chữ số từ 1 đến 5 là:" .$sum. '<br>';

    //Vòng do-while chạy vô tận
    // do {
    //     echo("Vòng lặp do-while chạy cháy máy..." .'<br>');
    //     } while (true);

    //Ví dụ 13
    echo "Ví dụ 13 <br>";
    for ($i=1; $i<=10; $i++) {
        if($i == 5){
            break;
        }
        echo "các chữ số <5 là:$i <br>";
    }

    //Ví dụ 14
    echo "Ví dụ 14 <br>";
    for ($i =1;$i<=3;$i++){
        for($j=1;$j<=3;$j++){
            if($i==2 && $j==2){
                echo "Đã loại bỏ giá trị i=2 và j=2 <br>";
                break;//Có break nên PHP bỏ qua 1 vòng lặp 
            }
            echo $i . "" . $j .'<br>';
        }
    }

    //Ví dụ 15
    echo "Ví dụ 15 <br>";
    for ($i=1; $i <=3; $i++) {
        for ($j=1;$j<=3; $j++) {
            if ($i==2 && $j==2) {
                echo "Không được in ra giá trị i=2 và j=2 <br>";
                continue;//continue sẽ bỏ 1 giá trị và nhảy sang giá trị khác của vòng lặp
            }
            echo $i."".$j .'<br>';
        }
    }

    //Ví dụ 16
    echo "Ví dụ 16 <br>";
    for ($i=1; $i<=10; $i++) {
        if($i==5) {
            echo "Đã loại bỏ giá trị i=5 <br>";
            continue;
        }
        echo $i .'<br>';
    }

    //Ví dụ 17 function
    echo "Ví dụ 17 <br>";
    function tinhtong($a,$b) {
        $tong=$a+$b;
        echo "Tổng của:" . "$a +$b =$tong" .'<br>';
    }
    tinhtong(1,2);
    tinhtong(1,3);
    tinhtong(10,20);
    tinhtong(10,30);

    //Ví dụ 18
    echo "Ví dụ 18 <br>";
    function setHeight($minheight =50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    //Ví dụ 19
    echo "Ví dụ 19 <br>";
    function tong($x,$y)
    {
        $z=$x+$y;
        return $z;
    }
    echo "7+13=" . tong(7,13) .'<br>';
    echo "5+10=" . tong(5,10) .'<br>';
    echo "2+4=" . tong(2,4) .'<br>';

    //Ví dụ 20
    // echo "Ví dụ 20 <br>";
    // function hello ($str2) {
    //     $str2 .= 'Tèo';
    // }
    // $str ='Xin Chào';
    // hello($str);
    // echo $str;

    //Ví dụ 21
    echo "Ví dụ 21 <br>";
    function hello (& $tr2) {
        $tr2 .= 'Tèo';
    }
    $tr ='Xin Chào';
    hello($tr);
    echo $tr .'<br>';

    //Ví dụ 22
    // echo "Ví dụ 22 <br>";
    // function p() {
    //     echo "hello <br>";
    //     p();
    // }
    // p();

    //Ví dụ 23
    echo "Ví dụ 23 sử dụng đệ quy tính giai thừa <br>";
    function giaithua($n) {
        if ($n == 1) {
            return 1; 
        }
        else {
            return ($n * giaithua($n - 1));
        }
    }
        // tính giai thừa của 5
        echo "Giai thừa của 5 là:" . giaithua(5);


    ?>
</body>
</html>