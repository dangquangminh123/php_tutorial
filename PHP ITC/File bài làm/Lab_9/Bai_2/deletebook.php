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
        $id=$_GET['id'];
        $sql="DELETE FROM `t_book` WHERE BOOK_ID=$id";
        $result=mysqli_query($conn,$sql);
        if($result) {
            echo "Xóa dữ liệu thành công" . '<br>';
        }
        else {
            echo "Xóa dữ liệu thất bại" . '<br>';
        }
        mysqli_close($conn);
        header('Location:addbook.php');
    ?>
