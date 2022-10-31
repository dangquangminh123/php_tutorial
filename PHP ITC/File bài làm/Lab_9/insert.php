<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
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
        $sql="INSERT INTO `my_person_contacts`(`full_name`, `gender`, `contact_no`, `email`, `city`, `country`) 
        VALUES ('Đặng Quang Minh','nam','Đặng','dangquangminh@itc.edu.vn','Đà Nẵng','Việt Nam')";
         $sql="INSERT INTO `my_person_contacts`(`full_name`, `gender`, `contact_no`, `email`, `city`, `country`) 
         VALUES ('Đặng Quang Minh','nam','Đặng','dangquangminhdn96@itc.edu.vn','Hố Chí Minh','Việt Nam')";
        $result=mysqli_query($conn,$sql);//Thực thi câu lệnh
        if($result) {
            echo "Thêm dữ liệu thành công" .'<br>';
        }
        else {
            echo "Thêm dữ liệu thất bại" .'<br>';
        }
        mysqli_close($conn);
    ?>
</body>
</html>