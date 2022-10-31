<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa</title>
</head>
<body>
    <?php 
        require_once "Lab_9.php";
        if(isset($_GET['xoa'])){
            $BOOK_ID = $_GET['xoa'];
            $sql= "DELETE FROM `t_book` WHERE BOOK_ID=$BOOK_ID";
            $result=mysqli_query($conn,$sql);//Thực thi câu lệnh
            header("Location:quanlysach.php");
        }
    ?>
</body>
</html>