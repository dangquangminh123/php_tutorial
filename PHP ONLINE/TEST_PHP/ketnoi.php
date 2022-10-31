<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết nối</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $pass="";
        $database="Phuc_qlsinhvien";

        $conn = mysqli_connect($servername,$username,$pass,$database);
        if(!$conn) {
            echo "Kết nối thất bại" .'<br>';
        }
        else {
            echo "Kết nối thành công" .'<br>';
        }

        if(isset($_GET['delete'])){
            $msv = $_GET['delete'];
            $sql= "DELETE FROM `sinhvien2` WHERE MSV=$msv";
            $result=mysqli_query($conn,$sql);//Thực thi câu lệnh
            header("Location: quanlysinhvien.php");
        }
    ?>
</body>
</html>