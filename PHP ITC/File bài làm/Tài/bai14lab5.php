<html>
    <head>
         <title>Bai 14 lab 5</title>
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
     function kt_snt($so){
        if($so<2)
        return false;
        for($i=2;$i<=sqrt($so);$i++)
        {
            if($so%$i==0)
            return false;
        }
        return true;
      }
     function vt_pt_nguyento_lonhon23()
     {
        global $arr,$n;
        for($i=0;$i<$n;$i++)
        {
            if(kt_snt($arr[$i])==true && $arr[$i]>23)
            {
                echo " ".$i;
            }
        }
     }
     
     Nhap_ngaunhien_nguyen();
     xuat();
     echo " <br> Vi tri pt nguyen to lon hon 23 trong mang :<br>";
     vt_pt_nguyento_lonhon23();

    ?>


    </body>