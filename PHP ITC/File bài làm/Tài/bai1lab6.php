<html>
<head>

</head>
<body>

<?php
   
   $a=isset($_POST['a'])? $_POST['a']:'';
   $b=isset($_POST['b'])? $_POST['b']:'';
   function ptb1($a,$b)
   {
       if($a!=''&& $b!='')
       {
           if($a==0)
           {
               if(b==0)
               {
                   echo "Phuong trinh vo so nghiem. <br>";
               }
               else
                   echo " Phuong trinh vo nghiem. <br>";
           }
           else
           {
               $x=-$b/$a;
               echo " Phuong trinh co nghiem la x = ".$x."<br>";
           }
       }
       else 
       echo "Ban chua nhap du ca hai so a va b.";
   }

?>
<form action="" method="post">

<input type="text" name='a' size='1' value="<?php echo $a; ?>"> X +

<input type="text" name="b" size='1' value="<?php echo $b; ?>"> = 0
<br><br>

<button type="submit">Tinh</button>
<br>
<?php ptb1($a,$b);  ?>

</form>

</body>
</html>