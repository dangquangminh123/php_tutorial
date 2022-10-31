<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seesion</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_POST['save'])) {
            $_SESSION['user']=$_POST['ten'];
            // unset($_SESSION['user']); //Xóa seesion
        }

    ?>
    <form action="" method="post">
        <input type="text" name=ten>
        <button type="submit" name="save">Gửi </button>
        <?php 
            if(isset($_SESSION['user'])){
                echo "Tên seesion" .$_SESSION['user'];
            }
        ?>
    </form>
</body>
</html>