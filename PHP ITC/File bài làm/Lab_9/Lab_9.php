<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 9</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $pass="";
        $database="bookstoredb";

        $conn = mysqli_connect($servername,$username,$pass,$database);
        if(!$conn) {
            echo "Kết nối thất bại" .'<br>';
        }
        else {
            echo "Kết nối thành công" .'<br>';
        }
    ?>

    
</body>
</html>