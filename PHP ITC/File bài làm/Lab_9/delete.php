<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    <?php 
    //Đầu tiên ta phải kết với bảng bên phpmyadmin
    $servernam="localhost";
    $username="root";
    $pass="";
    $dataname="my_person_contacts";
    $conn=mysqli_connect($servernam,$username,$pass,$dataname);//Liên kết với bảng bên phpmyadmin
    if(!$conn){
        echo "Kết nối thất bại" .'<br>';
    }
    else {
        echo "Kết nối thành công" .'<br>';
    }
    $sql="DELETE FROM `my_person_contacts` WHERE id=3";

    $result=mysqli_query($conn,$sql);//Thực thi câu lệnh
    if($result){
        echo "Xóa bỏ id thành công" .'<br>';
    }
    else {
        echo "Xóa bỏ id thất bại" .'<br>';
    }
    mysqli_close($conn);
    ?>
</body>
</html>