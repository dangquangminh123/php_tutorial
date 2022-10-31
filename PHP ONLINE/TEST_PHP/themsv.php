<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>thêm sinh viên</title>
</head>
<body>
    <?php 
        require_once 'ketnoi.php';

        if(isset($_POST['add'])){
            $msv= $_POST["MSV"];
            $hoten= $_POST["HoTen"];
            $lop= $_POST["Lop"];
            $sql="INSERT INTO `sinhvien2`(`MSV`, `HoTen`, `Lop`) VALUES (N'$msv',N'$hoten',N'$lop')"; 
            $result=mysqli_query($conn,$sql);//Thực thi câu lệnh
            if($result) {
                echo "Thêm dữ liệu thành công" . '<br>';
            }
            else {
                echo "Thêm dữ liệu thất bại" .'<br>';
            }
        }
        mysqli_close($conn);
    ?>
        <div class="container">
            <form method="POST" action="">
            <div class="form-group">
                <label for="MSV">MASV</label>
                <input name="MSV" class="form-control" placeholder="Mã Sinh Viên">
            </div>
            <div class="form-group">
                <label for="HoTen">Họ Tên</label>
                <input name="HoTen" class="form-control" placeholder="Họ Tên">
            </div>
            <div class="form-group">
                <label for="Lop">Lớp</label>
                <input name="Lop" class="form-control" placeholder="Lớp">
            </div>
            
            <button type="submit" class="btn btn-primary" name="add">Thêm</button>
            </form>
        </div>
</body>
</html>