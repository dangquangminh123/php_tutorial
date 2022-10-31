<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 6 câu lệnh break, continue</title>
</head>
<body>
    <?php 
        $n=0;
        for ($i=1;$i<=100;$i++) {
            if($n < 3){
            if($i %8 ==0){
                echo $i .'<br>';
                $n++;
            }
        }
        else {
            break;
        }
    }

        for ($j=0;$j<=10;$j++){
            if($j ==3 || $j == 8) continue;
            echo $j .'<br>';
        }

        //Dấu nhấy đôi thì để giá trị biến ở vị trí nào trong câu lệnh echo thì nó đều tìm giá trị của biến và in ra
        //Dấy nhấy đơn thì để giá trị biến ở trong 1 câu chuỗi thì nó chỉ in ra dạng chuỗi chứ không tìm giá trị của biến để in ra
        $a ="Biến a";
        $b ='Biến b';
        echo "Giá trị của a" .$a . "<br>";
        echo "Giá trị của a $a" . "<br>";
        echo 'Giá trị của b $b';


        // for ($i=0;$i<=100;$i+=8) {
        //     if($i %8 ==0 && $i>0){
        //         echo $i .'<br>';
        //     }
        // }
    ?>
</body>
</html>