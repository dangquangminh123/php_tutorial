<html>
<head>

</head>
<body>

<?php
   
   $a=isset($_POST['a'])? $_POST['a']:'';
   $b=isset($_POST['b'])? $_POST['b']:'';
   $c=isset($_POST['c'])? $_POST['c']:'';
   $d=isset($_POST['d'])? $_POST['d']:'';
   $e=isset($_POST['e'])? $_POST['e']:'';
   $f=isset($_POST['f'])? $_POST['f']:'';
   function Tinh_tb($a,$b,$c,$d,$e,$f)
   {
       if($a!=''&& $b!=''&& $c!=''&& $d!=''&& $e!=''&& $f!='')
       {
           $tb=($a+$b+$c+$d+$e+$f)/6;
           if($tb<5)
           echo " Yeu";
           else if($tb<6.5)
           {echo " Trung binh";}
           else if($tb<7.5)
           {
               echo "Kha";
           }
           else if($tb<9)
           {
               echo "Gioi";
           }
           else echo "Xuat Sac";
       }
       else 
       echo "Ban chua nhap du diem cua cac mon.";
   }

?>
<form action="" method="post">
Ly:
<input type="text" name='a' size='1' value="<?php echo $a; ?>"> 
Hoa:
<input type="text" name="b" size='1' value="<?php echo $b; ?>"> 
Van:
<input type="text" name="c" size='1' value="<?php echo $c; ?>"> 
Toan:
<input type="text" name="d" size='1' value="<?php echo $d; ?>"> 
Lich su:
<input type="text" name="e" size='1' value="<?php echo $e; ?>"> 
Tieng anh:
<input type="text" name="f" size='1' value="<?php echo $f; ?>"> 
<br><br>

<button type="submit">Kiem Tra</button>
<br><br>
<?php Tinh_tb($a,$b,$c,$d,$e,$f); ?>

</form>

</body>
</html>