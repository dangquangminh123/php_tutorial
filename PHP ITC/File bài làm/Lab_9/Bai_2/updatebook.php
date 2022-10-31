<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cập nhập sách</title>
</head>
<body>
    <?php 
        $servername="localhost";
        $username="root";
        $pass="";
        $dataname="bookstoredb";
        $conn=mysqli_connect($servername,$username,$pass,$dataname);
        if(!$conn) {
            echo "Kết nối thất bại" .'<br>';
        }
        else {
            echo "Kết nối thành công" . '<br>';
        }
        $id=$_GET['id'];
        $sql="SELECT * FROM `t_book` WHERE BOOK_ID=$id";
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_array($result)) {
                $TieuDe= $row["BOOK_TITLE"];
                $MoTa= $row["BOOK_DESC"];
                $TacGia=$row["BOOK_AUTHOR"];
                $NamXuatBan=$row["BOOK_YEAR"];
                $hinhanh=$row["BOOK_PIC"];
                $Gia=$row["BOOK_PRICE"];
        }
    ?>
    <form action="" method="POST">
        <table align="center" bgcolor="yellow">
            <tr>
                <th colspan=2>Cập nhập Mới</th>
            </tr>
            <tr>
                <td>Tựa sách: </td>
                <td><input type="text" name="BOOK_TITLE" value="<?php echo $TieuDe;?>"> </td>
            </tr>
            <tr>
                <td>Tác Giả: </td>
                <td><input type="text" name="BOOK_AUTHOR" value="<?php echo $TacGia;?>"> </td>
            </tr>
            <tr>
                <td>Năm Xuất Bản: </td>
                <td><input type="text" name="BOOK_YEAR" value="<?php echo $NamXuatBan;?>"> </td>
            </tr>
            <tr>
                <td>Đơn Giá: </td>
                <td><input type="text" name="BOOK_PRICE" value="<?php echo $Gia;?>"> </td>
            </tr>
            <tr>
                <td>Hình ảnh: </td>
                <td><input type="text" name="BOOK_PIC" value="<?php echo $hinhanh;?>"> </td>
            </tr>
            <tr>
                <td>Mô Tả </td>
                <td><textarea name="BOOK_DESC" rows="5" cols="20" value="<?php echo $MoTa;?>"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="capnhap">Cập nhập sách </button>
                    <button type="nop">Làm Lại </button>
                </td>
            </tr>
        </table>
    </form>

    <?php 
        if(isset($_POST["capnhap"])) {
            $TieuDeMoi=$_POST["BOOK_TITLE"];
            $MoTaMoi= $_POST["BOOK_DESC"];
            $TacGiaMoi=$_POST["BOOK_AUTHOR"];
            $NamXuatBanMoi=$_POST["BOOK_YEAR"];
            $hinhanhMoi=$_POST["BOOK_PIC"];
            $GiaMoi=$_POST["BOOK_PRICE"];
            $sqlmoi="UPDATE `t_book` 
            SET  `BOOK_TITLE`='$_POST[BOOK_TITLE]',`BOOK_DESC`='$_POST[BOOK_DESC]',`BOOK_AUTHOR`='$_POST[BOOK_AUTHOR]',`BOOK_YEAR`='$_POST[BOOK_YEAR]',`BOOK_PIC`='$_POST[BOOK_PIC]',`BOOK_PRICE`='$_POST[BOOK_PRICE]' 
            WHERE BOOK_ID=$id";

            $resultmoi=mysqli_query($conn,$sqlmoi);
            if($resultmoi) {
                echo "Cập nhập mới thành công" . '<br>';
            }
            else {
                echo "Cập nhập mới thất bại" . '<br>';
            }
        header("location:addbook.php");
        }
        mysqli_close($conn);
    ?>
</body>
</html>