<?php 
        require_once "Lab_9.php";
        $sql="SELECT * FROM `t_book`";
        $result=mysqli_query($conn,$sql);
        
?>

<form action="" method="POST">
        <table align="center" bgcolor="yellow">
            <tr>
                <th colspan=2>Tìm kiếm sách</th>
            </tr>
            <tr>
                <td><input type="text" name="BOOK_ID"> </td>
                <td><button type="submit" name="timkiem">Search </button></td>
            </tr>
        </table>
 </form>
 <?php 
 if(isset($_POST['timkiem'])) {
            $xuat="SELECT * FROM `t_book` WHERE `BOOK_ID`=$_POST[BOOK_ID]";
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
                    </tr>";
                }
                echo "</table>";
            }
            echo "<a href='addbook.php'>Quay lại</a>";
            mysqli_close($conn); 
        }
    ?>