<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 3 Vòng lặp for</title>
    <link type="text/css" href="style3.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="content">
        <h1>Chép Phạt</h1>
        <ul>
            <?php 
            for ($i=1;$i<=10;$i++) {
                echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ </li>" . '<br>';
            }

            $j=1;
            while($j<=10) {
                 echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ </li>" . '<br>';
                $j++;
            }
            ?>
           
        </ul>
    </div>
</body>
</html>