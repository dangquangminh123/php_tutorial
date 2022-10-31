<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Sửa</title>
</head>
<body>
    <?php 
        require_once "ketnoi.php";
        if(isset($_GET['msv'])){
            $id= $_GET['msv'];
            $sql="SELECT * FROM sinhvien2 WHERE MSV=$id";
            $result =mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    $msv = $row['MSV'];
                    $hoten = $row['HoTen'];
                    $lop = $row['Lop'];
                }
            }
        }


    ?>
    <div class="container">
        <form method="POST" action="">
        <div class="form-group">
            <label for="MSV">MASV</label>
            <input name="MSV" class="form-control" value="<?php echo $msv;?>">
        </div>
        <div class="form-group">
            <label for="HoTen">Họ Tên</label>
            <input name="HoTen" class="form-control" value="<?php echo $hoten;?>">
        </div>
        <div class="form-group">
            <label for="Lop">Lớp</label>
            <input name="Lop" class="form-control" value="<?php echo $lop;?>">
        </div>
        
        <button type="submit" class="btn btn-primary" name="edit">Sửa</button>
        </form>
    </div>

    <?php 
        if(isset($_POST['edit'])) {
            $msvup = $_POST['MSV'];
            $hotenup = $_POST['HoTen'];
            $lopup = $_POST['Lop'];
            $sqlup= "UPDATE sinhvien2 set MSV='$msvup', HoTen='$hotenup',  Lop='$lopup' WHERE MSV=$id";
             $resultup=mysqli_query($conn,$sqlup);
             if($resultup) {
                 echo "Chỉnh sửa thành công". '<br>';
                 header("Location: quanlysinhvien.php");
             }
             else {
                 echo "Chỉnh sửa không thành công". '<br>';
             }

        }
    ?>
</body>
</html>