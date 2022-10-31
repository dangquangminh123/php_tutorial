<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 2 Lấy chòm sao</title>
    <link type="text/css" href="style2.css" rel="stylesheet" media="screen">
</head>

    <?php 
        $day = "";
        $mon = "";
        $image = "";
        $name = "";
        $time = "";
        $result = "";
        if(isset($_POST["day"]) && isset($_POST["month"])) {
            $day = $_POST["day"];
            $mon = $_POST["month"];
            //Kiểm tra kiểu dữ liệu của ngày và tháng
            if (is_numeric($day) && is_numeric($mon)) {
                $flagShow = true;
                //Kiểm tra ngày và tháng đã nhập đúng là kiểu dữ liệu số
                switch ($mon) {
                     case 1:
                        if ($day <=19) {$image = "MaKet"; $name = "Ma Kết"; $time = "23/12 -19/01";}
                        if ($day >= 20) {$image = "BaoBinh"; $name = "Bảo Bình"; $time = "20/1 -19/02";}
                        if ($day <1 || $day > 31) $flagShow=false;
                     break;
                     case 2:
                        if ($day <= 19) {$image = "BaoBinh"; $name = "Bảo Bình"; $time = "20/1 -19/02";}
                        if ($day >= 20) {$image = "SongNgu"; $name = "Song Ngư"; $time = "20/2 -21/03";}
                        if ($day <1 || $day > 29) $flagShow=false;
                     break;
                     case 3:
                        if ($day <= 20) {$image = "SongNgu"; $name = "Song Ngư"; $time = "20/2 -21/03";}
                        if ($day >= 22) {$image = "bachduong"; $name = "Bạch Dương"; $time = "22/3 -20/04";}
                    break;
                    case 4:
                        if ($day <= 20) {$image = "bachduong"; $name = "Bạch Dương"; $time = "22/3 -20/04";}
                        if ($day >= 21) {$image = "kimnguu"; $name = "Kim Ngưu"; $time = "21/4 -21/05";}
                    break;
                    case 5:
                        if ($day <= 21) {$image = "kimnguu"; $name = "Kim Ngưu"; $time = "21/4 -21/05";}
                        if ($day >= 22) {$image = "songtu"; $name = "Song Tử"; $time = "22/5 -22/06";}
                    break;
                    case 6:
                        if ($day <= 22) {$image = "songtu"; $name = "Song Tử"; $time = "22/5 -22/06";}
                        if ($day >= 23) {$image = "Cugiai"; $name = "Cự Giải"; $time = "23/6 -23/07";}
                    break;
                    case 7:
                        if ($day <= 23) {$image = "Cugiai"; $name = "Cự Giải"; $time = "23/6 -23/07";}
                        if ($day >= 24) {$image = "sutu"; $name = "Sư Tử"; $time = "24/7 -23/08";}
                    break;
                    case 8:
                        if ($day <= 23) {$image = "sutu"; $name = "Sư Tử"; $time = "24/7 -23/08";}
                        if ($day >= 24) {$image = "xunu"; $name = "Xử Nữ"; $time = "24/8 -23/09";}
                    break;
                    case 9:
                        if ($day <= 24) {$image = "xunu"; $name = "Xử Nữ"; $time = "24/8 -23/09";}
                        if ($day >= 24) {$image = "ThienBinh"; $name = "Thiên Bình"; $time = "24/9 -23/10";}
                    break;
                    case 10:
                        if ($day <= 23) {$image = "ThienBinh"; $name = "Thiên Bình"; $time = "24/9 -23/10";}
                        if ($day >= 24) {$image = "HoCap"; $name = "Hồ Cáp"; $time = "24/10 -22/11";}
                    break;
                    case 11:
                        if ($day <= 22) {$image = "HoCap"; $name = "Hồ Cáp"; $time = "24/10 -22/11";}
                        if ($day >= 23) {$image = "nhanma"; $name = "Nhân Mã"; $time = "23/11 -22/12";}
                    break;
                    //Nếu số ngày lớn hơn 31 và tháng lớn hơn 12
                    default:
                        $flagShow = false;
                        break;
                }
                //Nếu số ngày và tháng nằm trong các giá trị của switch case
                if($flagShow == true){
                    $result = '<div class="result">
                                <img src="images/'.$image.'.jpg" alt="' . $image . '" />
                                <p>' . $name . ' <span>('. ucfirst($image) .' : ' . $time . ')</span></p>
                            </div>';
                    }
                //Nếu số ngày và tháng nhập không nằm trong giá trị của switch case
                else {
                        $result = "Dữ liệu không hợp lệ";
                    }   
            }

            //Kiểm tra kiểu dữ liệu của ngày và tháng không đúng là kiểu dữ liệu số
            else {
                $flagShow=false;
                $result = "Dữ liệu không hợp lệ";
            }
        }
    ?>

<body>
 
<div class="content"> 
     <h1>Lấy Chòm Sao </h1>
     <form class="form" action="#" method="post" name="main-form">
         <div class="row">
             <span>Ngày Sinh </span>
             <input type="text" name="day" value="<?php echo $day; ?>" />
        </div>
        <div class="row">
             <span>Tháng Sinh </span>
             <input type="text" name="month" value="<?php echo $mon; ?>"/>
        </div>
        <div class="row">
             <input type="submit" value="Lấy chùm sao!"/>
        </div>
  
        </form>
        <?php
            echo $result;
        ?>
        </div>
</body>
</html>