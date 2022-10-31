<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sách</title>
</head>
<body>
    <?php 
        require_once "Lab_9.php";
        $sql="SELECT * FROM `t_book`";
        $result=mysqli_query($conn,$sql);
    ?>

    <div class="container">
        <form action="" method="POST">
            <table class="box" align="center" border=3>
                <tr bgcolor=yellow >
                    <td>STT</td>
                    <td>Tựa sách</td>
                    <td>Mô tả</td>
                    <td>Tác giả</td>
                    <td>NXB</td>
                    <td>Đơn giá</td>
                    <td>Ảnh Bìa</td>
                    <td colspan=2><a href="Search.php">Tìm Kiếm</a></td>
                </tr>
                <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?php echo $row["BOOK_ID"];?></td>
                <td><?php echo $row["BOOK_TITLE"];?></td>
                <td width=130px><?php echo $row["BOOK_DESC"];?></td>
                <td><?php echo $row["BOOK_AUTHOR"];?></td>
                <td><?php echo $row["BOOK_YEAR"];?></td>
                <td><?php echo $row["BOOK_PRICE"];?></td>
                <td>
                  <?php echo 
                  "<img src='./Images/$row[BOOK_PIC]' alt='Hinh loi' srcset=''>" ?>
                </td>
                <td>
                 <a href="updatebook.php?bookid=<?php echo $row["BOOK_ID"]; ?>">Edit</a>
                </td>
                <td> 
                    <a href="DELETE2.php?xoa=<?php echo $row["BOOK_ID"];?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
            </table>
        </form>
    </div>
</body>
</html>