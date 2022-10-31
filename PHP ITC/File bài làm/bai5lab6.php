<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .giua{
            text-align: center;
            background-color: skyblue;
        }
    </style>
</head>

<body>
    
<?php 
    $sum=null;
    $n=null;
    if(isset($_POST['n']))
    {
          $n=$_POST['n'];
          $arr=explode(',',$n);
          foreach( $arr as $pt)
          {
              $sum+=$pt;
          }
    }
?>
<form action="" method="post">
    <table align="center" >
     <tr >
         
          <th><h4 class="giua" style="color: red;">Nhap va tinh tong day so :</h4></th>

     </tr>
     <tr>
         <th>Nhap day so</th>
         
         <th><input type="text" name='n' value="<?php echo $n;?>"> </th>

     </tr>
     <tr>
         <th></th>
         <th><button type="submit" >Tong day so la :</button>
     </tr>
     <tr>
         <th>Tong day so la :</th>
         <th><input type="text" name='kq' value="<?php echo $sum?>"></th>
     </tr>
    </table>
</form>
     
</body>

</html>
