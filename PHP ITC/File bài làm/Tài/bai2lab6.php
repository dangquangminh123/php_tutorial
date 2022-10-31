<html>
<head>

</head>
<body>

<?php
   
   $n=isset($_POST['n'])? $_POST['n']:'';
   
   function giaithua($n)
   {
       if($n!='')
       {
       $gt=1;
       for($i=1;$i<=$n;$i++)
       {
           $gt=$gt*$i;
           
       }
          echo $gt;
       }
       else echo "Ban chua nhap n.";
   }

?>
<form action="" method="post">
Nhap vao so n :
<input type="number" name='n' size='1'value="<?php echo $n; ?>" > !

<br><br>

<button type="submit">Tinh</button>
<br>
Ket qua : 
<?php giaithua($n);  ?>

</form>

</body>
</html>