<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Quản Lý Sinh Viên</title>
</head>
<body>
    <?php 
        require_once "ketnoi.php";
        $sql="SELECT * FROM sinhvien2";
        $result=mysqli_query($conn,$sql);
    ?>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Mã Sinh Viên</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Lớp</th>
                <th scope="col">Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?php echo $row["MSV"];?></td>
                <td><?php echo $row["HoTen"];?></td>
                <td><?php echo $row["Lop"];?></td>
                <td><a href="ketnoi.php?delete=<?php echo $row["MSV"]; ?>">Xóa</a> - 
                <a href="sua.php?msv=<?php echo $row["MSV"]; ?>">Sửa</a> </td>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>