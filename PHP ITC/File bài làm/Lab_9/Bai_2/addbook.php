<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addbook</title>
</head>
<body>
    <form action="" method="POST">
        <table align="center" bgcolor="yellow">
            <tr>
                <th colspan=2>Thêm Sách Mới</th>
            </tr>
            <tr>
                <td>Tựa sách: </td>
                <td><input type="text" name="BOOK_TITLE"> </td>
            </tr>
            <tr>
                <td>Tác Giả: </td>
                <td><input type="text" name="BOOK_AUTHOR"> </td>
            </tr>
            <tr>
                <td>Năm Xuất Bản: </td>
                <td><input type="text" name="BOOK_YEAR"> </td>
            </tr>
            <tr>
                <td>Đơn Giá: </td>
                <td><input type="text" name="BOOK_PRICE"> </td>
            </tr>
            <tr>
                <td>Hình ảnh: </td>
                <td><input type="text" name="BOOK_PIC"> </td>
            </tr>
            <tr>
                <td>Mô Tả </td>
                <td><textarea name="BOOK_DESC" rows="5" cols="20"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="themdulieu">Thêm Mới </button>
                    <button type="nop">Làm Lại </button>
                </td>
            </tr>
        </table>
    </form>
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
        if(isset($_POST['themdulieu'])) {
            $TieuDe= $_POST["BOOK_TITLE"];
            $MoTa= $_POST["BOOK_DESC"];
            $TacGia=$_POST["BOOK_AUTHOR"];
            $NamXuatBan=$_POST["BOOK_YEAR"];
            $hinhanh=$_POST["BOOK_PIC"].'.jpg';
            $Gia=$_POST["BOOK_PRICE"];
            $sql="INSERT INTO `t_book`(`BOOK_TITLE`, `BOOK_DESC`, `BOOK_AUTHOR`, `BOOK_YEAR`, `BOOK_PIC`, `BOOK_PRICE`) 
            VALUES ('$TieuDe','$MoTa','$TacGia','$NamXuatBan','$hinhanh','$Gia')";
            $result=mysqli_query($conn,$sql);
            if($result) {
                echo "Thêm dữ liệu thành công" . '<br>';
            }
            else {
                echo "Thêm dữ liệu thất bại" . '<br>';
            }
        }
        $xuat="SELECT * FROM `t_book`";
        $ketqua=mysqli_query($conn,$xuat);
        if(mysqli_num_rows($ketqua)>0){
            echo "<table align='center' border=1 bgcolor='yellow'>";
            echo "<tr>
                <th>STT</th>
                <th>Tựa Sách</th>
                <th>Mô Tả</th>
                <th>Tác Giả</th>
                <th>Năm xuất bản</th>
                <th>Đơn Giá</th>
                <th>Ảnh bìa</th>
                <th colspan=2><a href='searchbooks.php?'>Tìm Kiếm</th>
            </tr>";
            while($row=mysqli_fetch_array($ketqua)) {
                echo "<tr>
                    <td> $row[BOOK_ID] </td>;
                    <td> $row[BOOK_TITLE] </td>;
                    <td> $row[BOOK_DESC] </td>;
                    <td> $row[BOOK_AUTHOR] </td>;
                    <td> $row[BOOK_YEAR] </td>;
                    <td> <img src='./hinh/$row[BOOK_PIC]' alt='Hinh loi' srcset=''> </td>;
                    <td> $row[BOOK_PRICE] </td>;
                    <td><a href='updatebook.php?id=$row[BOOK_ID]'>Edit</a></td>
                    <td><a href='deletebook.php?id=$row[BOOK_ID]'>Delete</a></td>
                </tr>";
            }
            echo "</table>";
        }
        mysqli_close($conn); 
    
    ?>
</body>
</html>