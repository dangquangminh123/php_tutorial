<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2</title>
</head>
<body>
</body>
    <?php
    // $teo="Nguyễn Văn Tèo";
    // $vi=200;
    // $float=3.14;
    // echo "string".$teo."<br>";
    // echo "integer".$vi."<br>";
    // echo "float:" .$float; 

    // $studentName = "David Q";
    // echo "student name 1: " .$studentName. "<br>";
    // echo "student name 2: " .$StudentName. "<br>"; //Sai vì biến có S ghi hoa
    // echo "student name 3: " .$studentname. "<br>"; //Sai vì biến có n ghi thường

    // $str = "hello string";
    // $x = 200;
    // $y = 44.6;
    // echo "String is: $str <br/>";
    // echo "integer is: $x <br/>";
    // echo "float is: $y <br/>";
    
    // $x=5;
    // function test() {
    //     //Sử dụng biến $x bên trong hàm này sẽ bị lỗi
    //     echo "<p>biến x bên trong hàm là: $x </p>";
    // }

    // echo "<p>Biến x bên ngoài hàm là: $x </p>";
    // test();

    // function test() {
    //     $x=5; //Phạm vi cục bộ
    //     echo "<p>biến x bên trong hàm là: $x </p>";
    // }
    //     //Sử dụng biến $x bên ngoài hàm này sẽ bị lỗi
    //     echo "<p>biến x bên trong ngoài là: $x </p>";
    //     test();

    // $x=5;
    // $y=10;
    // function myTest() {
    //     global $x,$y;
    //     $y=$x+$y;
    // }

    // myTest();
    // echo $y; //Kết quả là 15
    
    // $x=5;
    // $y=10;
    // function myTest () {
    //     $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    // }

    // myTest();
    // echo $y ."<br>"; //Kết quả là 15 
    // Var_dump($y);
    // Var_dump($GLOBALS['y']);

    // function myTest() {
    //     static $x=0;
    //     echo $x . "<br>";
    //     $x++;
    // }
    // myTest();
    // myTest();
    // myTest();

    // $x="abc";
    // $$x=200; //Tạo biến $abc=200
    // echo $x."<br/>"; //trả ra "abc"
    // echo $$x. "<br/>"; //trả ra: 200
    // echo $abc; //trả ra 200

    // define("MESSAGE","Hello PHP");
    // echo MESSAGE;

    // define("MESSAGE", "Hello PHP", false);//Phân biệt chữ hoa chữ thường
    // echo MESSAGE;
    // echo message;

    // define("MESSAGE","Hello PHP",true); //không phân biệt chữ hoa chữ thường
    // echo MESSAGE;
    // echo message;

    // const MESSAGE="Hello const PHP";
    // echo MESSAGE;

    // $x = "Hello world!";
    // $y = 'Hello world!';
    // echo $x;
    // echo "<br>";
    // echo $y;

    // $cars = array("PHP", "Java", "VBA");
    // var_dump($cars);

    class Car
    {
        private $model;
        public function Car(){
            return $this->model = "Honda";
        }
    }
    // tạo một đối tượng
    $honda = new Car();
    //hiển thị thuộc tính của đối tượng
    echo var_dump($honda->Car());

    // $x = "Hello world!";
    // $x = null;
    // var_dump($x)

    // $x = 10;
    // $y = 20;
    // echo ($x > $y) ? "x lớn hơn y." : "x nhỏ hơn y.";
    ?>
</html>