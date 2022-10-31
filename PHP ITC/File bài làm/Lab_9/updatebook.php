<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cập nhập sửa đổi giá trị</title>
</head>
<style>
    .box{
        background-color: yellow;
    }
</style>
<body>
    <?php 
        require_once "Lab_9.php";
        if(isset($_GET['bookid'])) {
            $id=$_GET['bookid'];
            $sql="SELECT * FROM `t_book` WHERE BOOK_ID=$id";
            $result =mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0) {
                while($row=mysqli_fetch_array($result)){
                    $TieuDe= $row["BOOK_TITLE"];
                    $MoTa= $row["BOOK_DESC"];
                    $TacGia=$row["BOOK_AUTHOR"];
                    $NamXuatBan=$row["BOOK_YEAR"];
                    $hinhanh=$row["BOOK_PIC"];
                    $Gia=$row["BOOK_PRICE"];
                }
            }
        }
    
    ?>

        <div class="container">
            <form action="" method="POST">
                <p>Bài 2</p> 
                <table class="box" align="center">
                    <tr>
                        <td>Tựa sách:</td>
                        <td><input type="text" name="BOOK_TITLE" value="<?php echo $TieuDe;?>"></td>
                    </tr>
                    <tr>
                        <td>Tác giả:</td>
                        <td><input type="text" name="BOOK_AUTHOR" value="<?php echo $TacGia;?>"></td>
                    </tr>
                    <tr>
                        <td>Năm xuất bản:</td>
                        <td><input type="text" name="BOOK_YEAR" value="<?php echo $NamXuatBan;?>"></td>
                    </tr>
                    <tr>
                        <td>Đơn giá:</td>
                        <td><input type="text" name="BOOK_PRICE" value="<?php echo $Gia;?>"></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh:</td>
                        <td><input type="text" name="BOOK_PIC" value="<?php echo $hinhanh;?>"></td>
                    </tr>
                    <tr>
                        <td>Mô Tả:</td>
                        <td><textarea name="BOOK_DESC" rows="5" cols="20" value="<?php echo $MoTa;?>"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" name="edit" value="Cập nhập sách"></td>
                        <td> <input type="submit" name="again" value="Làm lại"></td></td>
                    </tr>
             </table>
        </form>
    </div>
    <?php 
        if(isset($_POST["edit"])){
            $TieuDeup= $_POST["BOOK_TITLE"];
            $MoTaup= $_POST["BOOK_DESC"];
            $TacGiaup=$_POST["BOOK_AUTHOR"];
            $NamXuatBanup=$_POST["BOOK_YEAR"];
            $hinhanhup=$_POST["BOOK_PIC"];
            $Giaup=$_POST["BOOK_PRICE"];
            $sqlup= "UPDATE `t_book` 
            SET `BOOK_TITLE`='$TieuDeup',`BOOK_DESC`='$MoTaup',`BOOK_AUTHOR`='$TacGiaup',`BOOK_YEAR`='$NamXuatBanup',`BOOK_PIC`='$hinhanhup',`BOOK_PRICE`='$Giaup' WHERE BOOK_ID=$id";
            $resultup=mysqli_query($conn,$sqlup);
                if($resultup){
                    echo "Chỉnh sửa thành công" . '<br>';
                    header("Location: quanlysach.php");
                }
                else {
                    echo "Chỉnh sửa thất bại" .'<br>';
                }
            
        }
    ?>
</body>
</html>