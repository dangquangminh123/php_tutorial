<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 7 exercise 01</title>
    <link type="text/css" href="style7.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="content7">
        <h1>Giải câu đố bằng vòng lặp </h1>
        <div class="question">
            <p>Yêu nhau cau sáu bổ ba</p>
            <p>Ghét nhau cau sáu bổ ra làm mười</p>
            <p>Mỗi người một miếng trăm người</p>
            <p>Có mười bảy quả hỏi người ghét yêu</p>
            <p>Hỏi có bao nhiêu người yêu nhau, ghét nhau</p>
        </div>
        <div class="answer">
        <p>Đáp án </p>
        <ul>
        <?php
            //x,y x:số người yêu nhau, y: số người ghét nhau
            //3x+10y=100 (nếu giả sử x=1 -> 10y =97, mà y là 1 số nguyên nên y phải nhỏ hơn 9). Tương tự suy ra ra x<30 (Nếu giả sử y=1)
            //x + y =17
            //Giả sử cho x chay là 1-> y chạy 3x+10y &&  x +y =17
            for ($x=1; $x <= 30; $x++) {
                for ($y=1; $y <= 9; $y++) {
                    if(3*$x + 10*$y == 100 && $x + $y == 17) {
                        echo "<li>$x người yêu nhau, $y người ghét nhau</li>" .'<br>';
                    }
                }
            }
        ?>
        </ul>
        </div>
    </div>
</body>
</html>