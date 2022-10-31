<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>AnhTai Shop</title>
    <style>
        .form_ {
            width: 1000px;
            height: 300px;
            background-color: deepskyblue;
            margin: 50px;
            padding: 50px;
        }
       
    </style>
</head>

<body>

    <?php
    session_start();
    $name_err = $pass_err = "";
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
    if ($name != '') {
        $name_err = "";
    } else {
        $name_err = "Ban chua nhap ten dang nhap";
    }
    if ($pass != '') {
        $pass_err = "";
    } else {
        $pass_err = "Ban chua nhap mat khau";
    }
    if (isset($_POST['dangnhap'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['pass'] = $_POST['pass'];
    }

    ?>

    <!-- Header -->
    <nav class="navbar navbar-expand-md bg-dark navbar-light text-light  bogoc ">
        <!-- Brand -->
        <a class="navbar-brand ml-5 logo" href="#"><img src="../kt/img/lg (2).PNG" class="rounded-circle" width="140px" height="100px"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end p-5 mr-5 bogoc" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item m-2">
                    <a class="nav-link " href="#" style="color: mintcream;"><b>TRANG CHỦ</b></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="../Code/Thongtin.html" style="color: mintcream;"><b>THÔNG TIN</b></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="../Code/khuyenmai.html" style="color: mintcream;"><b>KHUYẾN MÃI</b></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="../Code/Lienhe.html" style="color: mintcream;"><b>LIÊN HỆ</b></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="#" style="color: mintcream;"><b>ĐĂNG KÝ</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Dang nhap -->

    
    <div class="mx-auto  p-3 form_ ">

        <h2 class="text-center p-2" style="color: rgb(255, 251, 0);">THÔNG TIN ĐĂNG NHẬP</h2>
        <form action="" id="" method="POST">

            <div class="input-group form-group p-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Tên Tài Khoản">


            </div>

            <div class="input-group form-group p-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                </div>
                <input type="password" name="pass" class="form-control" placeholder="Mật khẩu">

            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="dangnhap">Đăng Nhập</button>
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                
            </div>
        </form>
    </div>
    <div>
        <?php
        if ($_SESSION['name'] != "" && $_SESSION['pass'] != "") {
            
            $ten = $_SESSION['name'];
            $matkhau = $_SESSION['pass'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "jewelry_store";
            $connect=mysqli_connect($servername, $username, $password, $dbname);

            
            $sql_user = "SELECT * FROM user WHERE tentk='$ten' and matkhau='$matkhau'";
            $result=mysqli_query($connect, $sql_user);
            if(mysqli_num_rows($result)>0)
            {
                echo "
                <div >
                <h5 class='text-center'>Chúc mừng đã đăng nhập thành công</h5>
                <p class='text-center'><a class='text-center' href='danhsach_sp.php'>Xem Danh sách sản phẩm</a></p>
             </div>
                ";
            }
            else
            {
                echo "<h5 class='text-center'>Bạn nhập tên tài khoản hoặc mật khẩu không chính xác</h5>";
            }

        }
        else{
            echo " ";
        }
        

        
        ?>
    </div>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">

                <div class="col-lg-6  my-4">
                    <h5 class="text-danger">
                        THÔNG TIN
                    </h5>
                    <p class="text-white text-justify">
                        Địa chỉ 328 Lê hồng Phong P1 Q10 Tp Hồ Chí Minh
                        SĐT +84912715582
                        Email Anhtai365A@gmail.com
                    </p>

                </div>
                <div class="col-lg-3 my-4">
                    <h5 class="text-danger">
                        SẢN PHẨM
                    </h5>
                    <a href="#" class="text-white">Nhẫn</a><br>
                    <a href="#" class="text-white">Dây chuyền</a><br>
                    <a href="#" class="text-white">Đồng hồ</a><br>
                    <a href="#" class="text-white">Bông tai</a><br>
                </div>

                <div class="col-lg-3 my-4">
                    <h5 class="text-danger">
                        THÔNG TIN NHANH
                    </h5>
                    <p class="text-white text-justify">
                        Gói mua hàng <br>
                        Gói khiếu nại <br>
                        Gói bảo hành <br>
                        Kỹ thuật <br>
                    </p>
                </div>

            </div>
            <hr class="border-light">
            <div class="row py-3">
                <div class="col-lg-6 text-white">
                    Copyright &copy; 2021 by AnhTai
                </div>
                <div class="col-lg-6 text-warning text-right">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-camera"></i>
                    <i class="bi bi-globe"></i>
                </div>
            </div>
        </div>
    </div>

</body>

</html>