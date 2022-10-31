<html>
    <head>
         <title>Bai 12 lab 5</title>
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
             $arr[$i]=rand(0,100);
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
     function Tim_pt_lonnhat()
     {
       global $arr,$n;
       $max=$arr[0];
       for($i=0;$i<$n;$i++)
       {
           if($arr[$i]>$max)
           {
               $max=$arr[$i];
           }
       }
       return $max;
     }
     function vt_pt_lonnhat()
     {
        global $arr,$n;
        for($i=0;$i<$n;$i++)
        {
            if($arr[$i]==Tim_pt_lonnhat())
            {
                echo " ".$i;
            }
        }
     }
     
     Nhap_ngaunhien_nguyen();
     xuat();
     echo " <br> Vi tri pt lon nhat trong mang :<br>";
     vt_pt_lonnhat();

    ?>


    </body>