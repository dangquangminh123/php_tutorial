<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 8 Mô Phỏng ATM </title>
    <link type="text/css" href="style8.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="content5">
        <?php 
            $money = 0;
            if(isset($_POST["money"])) {
                $money = $_POST["money"];
            }
        ?>
        <div class="info">
            <img src="images/atm.jpg">
            <h1>Mô Phỏng Máy ATM </h1>
            <form action="#" method="post">
                <p>Vui lòng nhập số tiền mà quý khách muốn thực hiện giao dịch </p>
                <input type="text" name="money" value="<?php echo number_format($money); ?>">
                <input type="submit" value="Rút tiền">
            </form>
        </div>

        <div class="cir"></div>
        <div class="result">
            <div class="normal">
                <p class="col1">Mệnh giá</p>
                <p class="col2">Số Lượng</p>
                <p class="col3">Thành Tiền</p>
            </div>

            <div class="cir"></div>
        <?php
            //Tạo các mệnh giá
            define("ONE", 1000);
            define("TWO", 2000);
            define("FIVE", 5000);
            define("ONE_0", 10000);
            define("TWO_0", 20000);
            define("FIVE_0", 50000);
            define("ONE_00", 100000);
            define("TWO_00", 200000);
            define("FIVE_00", 500000);

            //Tạo các biến cho các mệnh giá tiền và xử lý các biến đó
            $five00=0;
            $two00=0;
            $one00=0;
            $five0=0;
            $flagShow = false;
            if(is_numeric($money) && $money >1000) {
                $flagShow= true;
                while ($money >= FIVE_00) {
                    $five00++;
                    $money -= FIVE_00;
                }

                while ($money >= TWO_00) {
                    $two00++;
                    $money -= TWO_00;
                }

                while ($one00 >= ONE_00) {
                    $one00++;
                    $money -= ONE_00;
                }

                while ($five0 >= FIVE_0) {
                    $five0++;
                    $money -= FIVE_0;
                }
                $total = FIVE_00 * $five00 + TWO_00 * $two00 + ONE_00 * $one00 + FIVE_0 * $five0;
            }
        ?>

        <?php 
            if($five00 > 0) {
                echo '<div class="normal">
                        <p class="col1">'.number_format(FIVE_00).'</p>
                        <p class="col2">'. $five00 .'</p>
                        <p class="col3">'.number_format(FIVE_00 * $five00).'</p>
                    </div>
                    <div class="cir"></div>';
            }

            if($two00 > 0) {
                echo '<div class="normal">
                        <p class="col1">'.number_format(TWO_00).'</p>
                        <p class="col2">'. $two00 .'</p>
                        <p class="col3">'.number_format(TWO_00 * $two00).'</p>
                    </div>
                    <div class="cir"></div>';
            }

            if($one00 > 0) {
                echo '<div class="normal">
                        <p class="col1">'.number_format(ONE_00).'</p>
                        <p class="col2">'. $one00 .'</p>
                        <p class="col3">'.number_format(ONE_00 * $one00).'</p>
                    </div>
                    <div class="cir"></div>';
            }

            if($five0 > 0) {
                echo '<div class="normal">
                        <p class="col1">'.number_format(FIVE_0).'</p>
                        <p class="col2">'. $five0 .'</p>
                        <p class="col3">'.number_format(FIVE_0 * $five0).'</p>
                    </div>
                    <div class="cir"></div>';
            }

            if($flagShow == true) {
                echo '<p class="total">Tổng tiền:' . number_format($total) . '</p>';
            }
        ?>


            
        </div>
    </div>
</body>
</html>