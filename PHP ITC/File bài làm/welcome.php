<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        name:
        <input type="text" name="user">
        email:
        <input type="text" name="mail">
        <button type="submit">gửi</button>
    </form>
    <?php 
        //Kiểm tra dữ liệu trong user có tồn tại không ?
        if(isset($_GET['user'])) {
            // Lấy id
            $id = $_GET['user'];
            echo "Tên người dùng: " .$id . '<br>'; // kết quả là hello
        }
        if(isset($_GET['mail'])) {
            // Lấy email
            $email = $_GET['mail'];
            echo "Mail: " .$email . '<br>'; // kết quả là infor@.vn
        }
        
    
    ?>
</body>
</html>