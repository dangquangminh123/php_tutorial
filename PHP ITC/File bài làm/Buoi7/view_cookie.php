<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <?php 
        setcookie("name","Minh",time()+1800);
        setcookie("name2","CD20CT_N1_N2",time()+600);
        header("location:view_cookie.php");
    
    ?>
</body>
</html>