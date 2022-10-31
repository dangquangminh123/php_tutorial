<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shows</title>
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
        $sql="SELECT * FROM `my_person_contacts` ";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                echo " Mã Số " . $row["id"] .'<br>' . " Họ Tên " . $row["full_name"] .'<br>' . " Giới Tính " . $row["gender"] .'<br>' . " Chức danh " . $row["contact_no"] .'<br>' . " email " . $row["email"] .'<br>'
                . " Thành Phố " . $row["city"] .'<br>' . " Đất Nước " . $row["country"] .'<br>'; 
            }
        }
        else {
            echo "Không 1 dữ liệu nào được tìm thấy";
        }
        mysqli_close($conn);
    ?>
</body>
</html>