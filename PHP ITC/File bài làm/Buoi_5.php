<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 5</title>
</head>
<body>
        <h1>Welcome to ITC!</h1>
        <p>Learing PHP.</p>
        <p>Hello CD20CT.</p>
        <?php include 'footer.php';?>
    <?php
        echo "Ví dụ 1 <br>"; 
        $arr[0]=0;
        $arr[1]=454;
        $arr[2]=0;
        for ($i=0;$i<3;$i++) {
            echo $arr[$i] . ",";
        }
        var_dump($arr);
        echo "<br>";
        //Ví dụ 2
        echo "Ví dụ 2 <br>";
        $arr1=array(1,"tý","chuột");
        $n=count($arr1);
        for ($i=0;$i<$n;$i++) {
            echo $arr1[$i] . ",";
        echo "<br>";
        }
        //Ví dụ 2 cách 2
        echo "Ví dụ 2 cách 2 <br>";
        foreach ($arr1 as $a) {
            echo $a. ",";
        }
        //Ví dụ 3
        echo "<br> Ví dụ 3 <br>";
        echo "<br>";
        $arr2['teo']=1500;
        $arr2['cum']=2000;
        $arr2['Beo']=2500;
        var_dump($arr2);
        //Ví dụ 3 cách 2
        echo "<br> Ví dụ 3 cách 2 <br>";
        echo "<br>";
        $arr3=array('teo'=>1500,'cum'=>2000,'Beo'=>2500);
        var_dump($arr3);
        //Ví dụ 3 cách 3
        echo "<br> Ví dụ 3 cách 3 <br>";
        foreach($arr3 as $x=>$value) {
            echo "<br>key =" .$x. ",";
            echo "<br>";
            echo "Giá trị: " .$value. ", ";
        }
        echo "<br>";

        //Ví dụ 4
        echo "Ví dụ 4 <br>";
        $season=array("summer","winter","spring","autumn");
        // tính độ dài của mảng
        $arrlength = count($season);
        // hiển thị các phần tử của mảng
        for($i = 0; $i < $arrlength; $i++) {
        echo $season[$i];
        echo "<br>";
        }

        //Ví dụ 5 
        echo "Ví dụ 5 <br>";
        $season[0]="spring";// mùa xuân
        $season[1]="summer";// mùa hạ
        $season[2]="autumn";// mùa thu
        $season[3]="winter";// mùa đông
        // tính độ dài của mảng
        $arrLength = count($season);
        // hiển thị các phần tử của mảng
        for($i = 0; $i < $arrLength; $i++) {
        echo $season[$i];
        echo "<br>";
        }

        //Ví dụ 6
        echo "Ví dụ 6 <br>";
        $dbInfo = array("url"=>"http://localhost:3306", "dbName"=>"testdb",
        "username"=>"root", "password"=>"123123123");
        foreach($dbInfo as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }

        //Ví dụ 6 cách 2
        echo "Ví dụ 6 cách 2<br>";
        $dbInfo ['url'] = "http://localhost:3306";
        $dbInfo ['dbName'] = "testdb";
        $dbInfo ['username'] = "root";
        $dbInfo ['password'] = "123123123";
        foreach($dbInfo as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }

        //Ví dụ 7
        echo "Ví dụ 7<br>";
        $hang_hoa = array
        (
        array("Iphone X",22,18),
        array("Sony Z10",15,13),
        array("Samsung Note 10",5,2),
        array("Xiaomi 6",17,15)
        );
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
            echo "<li>".$hang_hoa[$row][$col]."</li>";
            }
            echo "</ul>";
            }
        
        //Ví dụ 8
        echo "Ví dụ 8<br>";
        $salary=array("Cong"=>"550000","Dung"=>"250000","Vu"=>"200000");
        print_r(array_change_key_case($salary, CASE_LOWER));
        //Ví dụ 9
        echo "<br> Ví dụ 9 <br>";
        $salary3=array("Cong"=>"550000","Dung"=>"250000","Vu"=>"200000");
        print_r(array_chunk($salary3, 2));

        //Ví dụ 10
        echo "<br> ví dụ 10 <br>";
        $season=array("summer", "winter", "spring", "autumn");
        echo "Tổng số phần tử trong mảng là:" .count($season) . '<br>';

        //Ví dụ 11
        echo "Ví dụ 11 <br>";
        $season=array("summer","winter","spring","autumn");
        $reverseseason=array_reverse($season);
        foreach( $reverseseason as $s )
        {
        echo "$s<br />";
        }

        //Ví dụ 12
        echo "Ví dụ 12 <br>";
        $season=array("summer", "winter", "spring", "autumn");
        $key=array_search("spring",$season);
        echo "Vị trí của phần tử trong mảng là:" .$key .'<br>';//2 spring nằm ở vị trí thứ 2

        //Ví dụ 13
        echo "Ví dụ 13 <br>";
        $name1=array("Java","PHP","C++","VBA");
        $name2=array("PHP","HTML","CSS","Java");
        $name3=array_intersect($name1,$name2);
        foreach( $name3 as $n )
        {
        echo "$n<br />";
        }

        //Ví dụ 14
        echo "Ví dụ 14 sắp xếp các mảng theo giá trị tăng dần <br>";
        $season2=array("summer","winter","spring","autumn");
        sort($season2);
        foreach( $season2 as $s )
        {
        echo "$s<br />";
        }

        //Ví dụ 15
        echo "Ví dụ 15 sắp xếp các mảng theo giá trị giảm dần <br>";
        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);
        foreach( $cars as $c) {
        echo "$c <br>";
        }

        //Ví dụ 16
        echo "Ví dụ 16 <br>";
        $age = array("Vinh"=>"22", "Tan"=>"25", "Hoa"=>"20");
        asort($age);
        foreach($age as $x => $x_value) {
        echo "Key = " . $x . ", Value = " . $x_value;
        echo "<br>";
        }

        //Ví dụ 17
        echo "Ví dụ 17 <br>";
        $age = array("Vinh"=>"22", "Tan"=>"25", "Hoa"=>"20");
        krsort($age);
        foreach($age as $x => $x_value) {
        echo "Key = " . $x . ", Value = " . $x_value;
        echo "<br>";
        }

        //Ví dụ 18
        echo "Ví dụ 18 <br>";
        // $a = "Tài liệu học " PHP"; //SAI
        // $b = 'Tài liệu học ' PHP'; //SAI
        echo $c = "Tài liệu học ' PHP" . '<br>'; //ĐÚNG
        echo $d = 'Tài liệu học " PHP'. '<br>'; //ĐÚNG
        echo $a = "Tài liệu học \" PHP" . '<br>';
        echo $b = 'Tài liệu học \' PHP' . '<br>';

        //Ví dụ 19
        echo "Ví dụ 19 <br>";
        $name = "Đặng Quang Minh";
        $text_1 = "Tên của tôi là $name";
        $text_2 = 'Tên của tôi là $name';
        echo $text_1 . '<br>';
        echo $text_2 . '<br>';

        //Ví dụ 20
        echo "Ví dụ 20 <br>";
        $text = "Tài liệu học "."ngôn ngữ lập trình"." PHP";
        echo $text .'<br>';

        //Ví dụ 21
        echo "Ví dụ 21 độ dài của chuỗi <br>";
        echo strlen("Hello world!") . '<br>';

        //Ví dụ 22
        echo "Ví dụ 22 đảo ngược một chuỗi <br>";
        echo strrev("Hello world!") . '<br>';

        //Ví dụ 23
        echo "Ví dụ 23 <br>";
        $str = "Hello world!";
        echo strpos($str, "world");
        echo "<br>";
        if (strpos($str, "world")) {
        echo "\"$str\" chứa chuỗi " . "\"world\"" .'<br>';
        } else {
        echo "\"$str\" không chứa chuỗi " . "\"world\"" .'<br>';
        }
        echo "<br>";
        if (strpos($str, "PHP")) {
        echo "\"$str\" chứa chuỗi " . "\"PHP\"" .'<br>';
        } else {
        echo "\"$str\" không chứa chuỗi " . "\"PHP\"" .'<br>';
        }

        //Ví dụ 24
        echo "Ví dụ 24 <br>";
        echo str_replace("World", "PHP", "Hello World!") .'<br>';

        //Ví dụ 25
        echo "Ví dụ 25 <br>";
        echo "Chèn x.php lần 1: ";
        include_once('x.php');
        echo "<br>";
        echo "Chèn x.php lần 2: ";
        include_once('x.php') . '<br>';

    ?>
    <?php echo "<br> ví dụ 26 <br>"; 
            include 'menu.php';?>
    <h1>Welcome to ITC!</h1>
    <p>Learing PHP.</p>
    <p>Hello CD20CT.</p>
    <?php include 'footer.php';?>

    <?php echo "Ví dụ 27 <br>"; include 'cars.php';
    echo "Xe $car có màu $color.";?>

    <!-- <h1>Welcome to ITC!</h1>
    <?php require 'file_khong_ton_tai.php';
    echo "Xe $car có màu $color.";
    ?> -->
</body>
</html>