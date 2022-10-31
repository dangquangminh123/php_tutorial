<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addboook</title>
</head>
<style>
    .box{
        background-color: yellow;
    }
</style>
<body>
    <?php 
        require_once 'Lab_9.php';
        if(isset($_POST['them'])) {
            $TieuDe= $_POST["BOOK_TITLE"];
            $MoTa= $_POST["BOOK_DESC"];
            //$CATID=$_POST["BOOK_CATID"];
            $TacGia=$_POST["BOOK_AUTHOR"];
            //$PUBID=$_POST["BOOK_PUBID"];
            $NamXuatBan=$_POST["BOOK_YEAR"];
            $hinhanh=$_POST["BOOK_PIC"].'.jpg';
            $Gia=$_POST["BOOK_PRICE"];
            //$RATE=$_POST["BOOK_RATE"];
            $sql="INSERT INTO `t_book`(`BOOK_TITLE`, `BOOK_DESC`, `BOOK_AUTHOR`, `BOOK_YEAR`, `BOOK_PIC`, `BOOK_PRICE`)
             VALUES (N'$TieuDe',N'$MoTa',N'$TacGia',N'$NamXuatBan',N'$hinhanh',N'$Gia')";
            $result=mysqli_query($conn,$sql);//Thực thi truy vấn
            if($result) {
                echo "Thêm dữ liệu thành công" . '<br>';
            }
            else {
                echo "Thêm dữ liệu thất bại" . '<br>';
            }
        }
        mysqli_close($conn);

    ?>
    <div class="container">
        <form action="" method="POST">
                <p>Bài 2</p> 
                <table class="box" align="center">
                <thead>
                    <tr>
                        <th size=50 colspan=2>Thêm Sách Mới</th>
                        
                    </tr>
                </thead>
                    <tr>
                        <td>Tựa sách:</td>
                        <td><input type="text" name="BOOK_TITLE"></td>
                    </tr>
                    <tr>
                        <td>Tác giả:</td>
                        <td><input type="text" name="BOOK_AUTHOR"></td>
                    </tr>
                    <tr>
                        <td>Năm xuất bản:</td>
                        <td><input type="text" name="BOOK_YEAR"></td>
                    </tr>
                    <tr>
                        <td>Đơn giá:</td>
                        <td><input type="text" name="BOOK_PRICE"></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh:</td>
                        <td><input type="text" name="BOOK_PIC"></td>
                    </tr>
                    <tr>
                        <td>Mô Tả:</td>
                        <td><textarea name="BOOK_DESC" rows="5" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" name="them" value="thêm sách mới"></td>
                        <td> <input type="submit" name="again" value="Làm lại"></td></td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>