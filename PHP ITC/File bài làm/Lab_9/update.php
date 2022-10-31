<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
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
        //Thực hiện câu lệnh theo yêu cầu về dữ liệu cho bảng bên phpmyadmin
        $sql="UPDATE `my_person_contacts` 
        SET `full_name`='Nguyễn Đình Hoàng',`gender`='Nam',`contact_no`='Thạc Sĩ Hoàng',`email`='hoangnd@itc.edu.vn',`city`='Hồ Chí Minh',`country`='Việt Nam' 
        WHERE id=2";

        $result=mysqli_query($conn,$sql);//Thực thi câu lệnh
        if($result) {
            echo "Sửa chữa cập nhập đã thành công" . '<br>';
        }
        else {
            echo "Sửa chữa cập nhập đã thất bại" . '<br>';
        }
        mysqli_close($conn);
    ?>
</body>
</html>