<html>
<head>

</head>
<body>

<?php
   
   $n=isset($_POST['n'])? $_POST['n']:'';
   
   function dayso($n)
   {
       
       for($i=1;$i<$n;$i++)
       echo $i."-";
       echo $n;
       
   }
   function tong($n)
   {
       $sum=0;
    for($i=1;$i<=$n;$i++)
    {
        $sum=$sum+$i;
    }
    echo $sum;
   }

?>
<form action="" method="post">
Nhap vao so n :
<input type="number" name='n' size='1'value="<?php echo $n; ?>" > !

<br><br>

<button type="submit">Show</button>
<br> 
<?php dayso($n);  ?>
<br>
Tong cua day so tu 1 den <?php echo $n;  ?> la : <?php tong($n);  ?>
</form>

</body>
</html>