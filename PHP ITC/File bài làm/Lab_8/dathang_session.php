<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng</title>
</head>
<style>
       .error {
           color: red;
       }
       .thongtin{
           background: yellow;
       }
       .ketqua{
           background: yellow;
           text-align: center;
           background-attachment: fixed;
       }
       
    </style>
<body>
    <?php 
        $bia=" Bia Heineken";
        $addresss=null;
        $addresss= isset($_POST['infoaddress'])? $_POST['infoaddress']:'';
    ?>
    <form action="" method="POST">
        <h3 align="center">SẢN PHẨM</h3>
        <table class="thongtin" border=0 align="center">
             <tr>
                <td>Các loại sản phẩm: </td>
                <td><div class="error">  *<?php echo $bia;?></div></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><select name="cocbia[]" size="4" multiple="multiple">
                    <option value="Bia Tiger" selected="selected">Bia Tiger</option>
                    <option value="Bia Heineken">Bia Heineken</option>
                    <option value="Bia Sài Gòn">Bia Sài Gòn</option>
                    <option value="Bia Budweiser">Bia Budweiser</option>
                    </select></td>
                <td></td>
            </tr>
            
            <tr>
                <td>Địa chỉ giao hàng:</td>
                <td> <input type="text" name="infoaddress" value="<?php echo $addresss?>"></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td> <input type="submit" name="form_submit" value="Đặt hàng"></td>
                <td></td>
            </tr>
        </table>
        </form>
        <div class="ketqua">
            <?php
            if(isset($_POST["form_submit"]) && $addresss!=''){
                    echo "Các sản phẩm <br>"; 
                        if(isset($_POST['cocbia'])) {
                            echo $bia. " - ";
                            $giatribia = $_POST['cocbia'];
                            foreach ($giatribia as $key => $value) {
                                echo $value. " - " ;
                            }
                        }
                        echo "<br>Chúng tôi sẽ giao hàng cho bạn tại địa chỉ <br>";
                        echo $addresss;
                        echo "<a href='Khachhang_cookie.php'>Quay lại trang chủ!</a>";
                    }
                ?>     
        </div>

       
</body>
</html>