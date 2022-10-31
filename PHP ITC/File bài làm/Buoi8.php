<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 8</title>
</head>
<body>
    <?php
        //Ví dụ 1 
        // $servername= "localhost";
        // $username= "root";
        // $password= "";
        // $dataname= "minh";
        // $conn = mysqli_connect($servername,$username,$password,$dataname);
        // if(!$conn) {
        //     die('Kết nối thất bại:'.mysqli_connect_error($conn)) . '<br>';
        // }
        // else {
        //     echo "Kết nối thành công" . '<br>';
        // }
        // //Tạo 1 cở sở dữ liệu bên phpMyadmin
        // if(mysqli_select_db($conn,$dataname)) {
        //     die("Tên này đã tồn tại") . '<br>';
        // }
        // $sql="create database demo";
        // $res=mysqli_query($conn,$sql);//Thực thi câu lệnh 
        // if($res) {
        //     echo "Đã tạo thành công cơ sở dữ liệu" .'<br>';
        // }
        // else {
        //     echo "Không tạo được cơ sở dữ liệu" .'<br>';
        // }
        // mysqli_close($conn);

        //Ví dụ 2
        // $servername2= "localhost";
        // $username2= "root";
        // $password2= "";
        // $dataname2= "minh2";
        // $conn2 = mysqli_connect($servername2,$username2,$password2,$dataname2);
        // if(!$conn2){
        //     die("Kết nối thất bại:".mysqli_connect_error($conn2)) .'<br>';
        // }
        // else{
        //     echo"kết nối thành công." . '<br>';
        // }
        // //Sử dụng để lựa chọn 1 cở sở dữ liệu (thực thi hàm này chỉ khi đã tạo cơ sở dữ liệu bên phpMyadmin)
        // if(mysqli_select_db($conn2,$dataname2) ==true) {
        //      die("Database này đã tồn tại.") .'<br>';
        // }
        // //Tạo 1 cơ sở dữ liệu bên phpMyadmin    
        // $sql2 = 'create database demo2';//câu lệnh tạo 1 database mới
        // $res2=mysqli_query($conn2,$sql2);
        // if($res2){
        //     echo "Đã tạo thành công cơ sở dữ liệu." . '<br>';
        // }
        // else{
        //     echo "Không tạo được cơ sở dữ liệu ".'<br>';
        // }
        // mysqli_close($conn2);

        //Ví dụ 3
        $servername3= "localhost";
        $username3= "root";
        $password3= "";
        $dataname3= "demo3";
        $conn3 = mysqli_connect($servername3,$username3,$password3,$dataname3);
        if(!$conn3){
            die("Kết nối thất bại:".mysqli_connect_error($conn3)) .'<br>';
        }
        else{
            echo"kết nối thành công." . '<br>';
        }
        //$sql3 = "insert into user(name, user_salary) values('Thích thi lại 1',10)";
        //$sql3= "delete from user";//Xóa 1 bảng bên phpmyAdmin
        //$sql3= "delete from user where user_salary=10";//Xóa cụ thể 1 giá trị tại 1 cột
        //$sql3="UPDATE `user` SET `user_salary`=10 ";//Cập nhập 1 giá trị của 1 cột
        $sql3="UPDATE `user` SET `user_salary`=100 where `name`='Thích thi lại 1' ";//Cập nhập giá trị của 1 cột nhưng có điều kiện 
        $result= mysqli_query($conn3, $sql3);
        if($result) {
            echo "Thêm thành công" .'<br>';
        }
        else {
            echo "Không thể thêm dữ liệu vào bảng user: ".'<br>';
        }
        // $rows = mysqli_num_rows($result);
        // echo "Số dòng: " .$rows. '<br>';
            // //Tạo 1 cơ sở dữ liệu bên phpMyadmin    
            // $sql3 = 'create database demo3';//câu lệnh tạo 1 database mới
            // $res3=mysqli_query($conn3,$sql3);
            // if($res3){
            //     echo "Đã tạo thành công cơ sở dữ liệu." . '<br>';
            // }
            // else{
            //     echo "Không tạo được cơ sở dữ liệu ".'<br>';
            // }
        mysqli_close($conn3);

    ?>
</body>
</html>