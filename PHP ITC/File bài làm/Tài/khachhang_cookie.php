
<html>
 <head>
   <style>
    .bg{
        background-color: yellow;
       }
    .err{
    color:red;  
   }
   </style>
 </head>
<body>

<?php
 $aerr=$berr=$cerr="";
  $ten=isset($_POST['name'])? $_POST['name'] :'';
  $em=isset($_POST['email'])? $_POST['email'] :'';
  $diachi=isset($_POST['diachi'])? $_POST['diachi'] :'';
  if($ten=='')
   {
       $aerr=" Vui long nhap ten khong duoc bo trong";
   }
   else 
     { $aerr="";}
    if($em=='')
   {
       $berr=" Vui long nhap email khong duoc bo trong";
   }
   else 
     { $berr="";} 
  if($diachi=='')
   {
       $cerr=" Vui long nhap dia chi khong duoc bo trong";
   }
   else 
   {
      $cerr="";
    }
    if($ten!="" && $em!="" && $diachi!="")
    {
        setcookie("name",$ten,time()+60);
        setcookie("email",$em,time()+60);
        setcookie("diachi",$diachi,time()+60);
        echo "Thong tin khach hang. <br>";
        echo "$ten - $em - $diachi"."<br>";
        echo "<a href='thongtin_cookie.php'>Click here</a>";
        
    }
?>
<form method="POST" action="" > 
<table class="bg" align="center">
         <tr>
            <th colspan=3> THONG TIN KHACH HANG</th>
         </tr>
         
         <tr>
            <td> Ho va ten:</td>
            <td> <input type="text" name='name' value=""> </td>
            <td class="err">* <?php echo $aerr;?> </td>
         </tr>
         <tr>
            <td> Email: </td>
            <td> <input type="email" name='email' value=""> </td>
            <td class="err">*<?php echo $berr;?></td>
         </tr>
         <tr>
            <td> Dia chi: </td>
            <td> <input type="text" name='diachi' value=""> </td>
            <td class="err">*<?php echo $cerr;?></td>
         </tr>
         <tr>
            <td> </td>
            <td><button type="submit">Xac nhan</button> </td>
            
         </tr>
   </table>

</form>
</body>

</html>