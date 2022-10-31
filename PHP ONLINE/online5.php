<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 4 bộ sưu tập hình ảnh</title>
    <link type="text/css" href="style5.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="content">
        <h1>Bộ sưu tập hình ảnh </h1>
        <div class="image">
            <?php 
                $i=1;
                do {
                     echo '<img src="images/anh'.$i.'.jpg">';
                    $flagshow=0;
                    if(isset($_GET["show"])){
                        $flagshow = $_GET["show"];
                        $i++;
                    }
                }while($i <= 5 && $flagshow == 1);
            ?>
        
            <a href="online5.php?show=1">Show All</a>
            <a href="online5.php?show=0">Show one</a>
        </div>
    </div>
</body>
</html>