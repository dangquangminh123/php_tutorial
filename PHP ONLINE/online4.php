<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online 4</title>
    <link type="text/css" href="style4.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="content">
        <h1>Vẽ Tam Giác</h1>
        <ul>
            <li><a href="online4.php?type=1"><img src="images/01.jpg"></a></li>
            <li><a href="online4.php?type=2"><img src="images/02.jpg"></a></li>
            <li><a href="online4.php?type=3"><img src="images/03.jpg"></a></li>
        </ul>

        <div class="result">
        <?php
        $result="";
         str_repeat("x",10);// in ra chuỗi và lặp lại số lần của chuỗi
         //Kiểm tra biến _GET phần tử là type có tồn tại không
        if(isset($_GET["type"])){
            //Khi biến GET phần tử type tồn tại thì biến $type là biến GET với giá trị phần tử là type  
            $type=$_GET["type"];
            switch ($type) {
                case 1:
                    $i=1;
                    $n=6;
                    while($i<=$n) {
                        $result .= str_repeat("*",$i) . "<br>";//Dấu chấm trước dấu = là để nối các chuỗi * lại
                        $i++;
                    }
                break;

                case 2:
                    $i=6;
                    $n=6;
                    while($i>=1) {
                        $result .= str_repeat("*",$i) . "<br>";
                        $i--;
                    }
                break;

                case 3:
                    $i=1;
                    $n=6;
                    /*
                    *   i=1, space=5, * là 1 (space =n-i) (* =i*2-1)
                   ***  i=2, space=4, * là 3
                  ***** i=3, space=3, * là 5 
                 ******* 
                ********* 
               *********** 
                    */
                    while($i<=$n) {
                        $space = str_repeat ("&nbsp;&nbsp",$n - $i);
                        $character = str_repeat ("*",2*$i - 1);
                        $result .= $space . $character . "<br>";
                        $i++;
                    }
                break;
            }
        }
        echo $result; 
        ?>

        </div>
    </div>
</body>
</html>