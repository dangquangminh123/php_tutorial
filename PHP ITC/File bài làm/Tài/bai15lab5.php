<html>
    <head>
         <title>Bai 15 lab 5</title>
    </head>
    <body>
     
    <?php
     
     $arr=[];
     $n=10;
     function Nhap_ngaunhien_nguyen()
     {
         global $arr,$n;
         for($i=0;$i<$n;$i++)
         {
             $arr[$i]=rand(-50,50);
         }
     }
     function xuat()
     {
        global $arr,$n;
        echo "Mang ban dau la :<br>";
        for($i=0;$i<$n;$i++) 
        {
            echo " ".$arr[$i];
        }
     }
     function vt_am_dautien()
     {
        global $arr,$n;
        for($i=0;$i<$n;$i++) 
        {
            if($arr[$i]<0)
            return $i;
        }
        return -1;
     }
     Nhap_ngaunhien_nguyen();
     xuat();
     if(vt_am_dautien()!=-1)
     echo "<br> Vi tri am dau tien la ".vt_am_dautien();
     else
     echo "<br> Mang k co pt am ";

    ?>


    </body>