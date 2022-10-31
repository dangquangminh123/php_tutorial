<html>
<head>
     <title>Bai 1 lab 7</title>
<style>
   .err{
    color:red;  
   }
</style>
</head>
<body>

<?php
   
   $n=isset($_POST['nhap'])? $_POST['nhap']:"";
   $arr=explode(',',$n);
   $chon=isset($_POST['chon'])? $_POST['chon']:"";
   $kq=null;
   if($n!=""&&$chon!="")
   {
       if($chon=="Timmax")
       {
           $kq=timmax();
       }
       if($chon=="Timmin")
       {
           $kq=timmin();
       }
       if($chon=="soNT")
       {
           $kq=Lietke_SNT();
       }
       if($chon=="soHT")
       {
           $kq=Lietke_ht();
       }
       if($chon=="soCP")
       {
           $kq=Lietke_cp();
       }
   }
    function timmax()
    {
        global $arr;
        $max=$arr[0];
        for($i=1;$i<count($arr);$i++)
        {
            if($max < $arr[$i])
            $max=$arr[$i];
        }
        return $max;
    }
    function timmin()
    {
        global $arr;
        $min=$arr[0];
        for($i=1;$i<count($arr);$i++)
        {
            if($min > $arr[$i])
            $min=$arr[$i];
        }
        return $min;
    }
    function Lietke_SNT()
    {
        $ketqua="";
        global $arr;
        foreach($arr as $pt)
        {
            if(kt_SNT($pt)==true)
            $ketqua=$ketqua."$pt " ;
        }
     return $ketqua;
    }
    function Lietke_ht()
    {
        $ketqua="";
        global $arr;
        foreach($arr as $pt)
        {
            if(kt_ht($pt)==true)
            $ketqua=$ketqua."$pt " ;
        }
     return $ketqua;
    }
    function Lietke_cp()
    {
        $ketqua="";
        global $arr;
        foreach($arr as $pt)
        {
            if(kt_cp($pt)==true)
            $ketqua=$ketqua."$pt " ;
        }
     return $ketqua;
    }
    function kt_SNT($so)
    {
       if($so<2)
       return false;
       for($i=2;$i<=sqrt($so);$i++)
       {
           if($so % $i==0)
           return false;
       }
       return true;
    }
    function kt_ht($so)
    {
        if($so<=1)
        return false;
        $s=0;
        for($i=1;$i<$so;$i++)
        {
         if($so % $i==0)
         {
             $s+=$i;
         }
        }
        if($s==$so)
        return true;
        else
        return false;
    }
    function kt_cp($so)
    {
        $i=round(sqrt($so));
       if(($i*$i)==$so)
       return true;
       return false;
    }
?>

<form action="" method="post">
    <table border=1 align="center">
         <tr>
            <th colspan=3> NHAP VA TIM,TINH TOAN MANG </th>
         </tr>
         
         <tr>
            <td> Nhap day so</td>
            <td> <input type="text" name='nhap' value="<?php echo $n;?>"> </td>
            <td class="err"> Moi ban nhap mang </td>
         </tr>
         <tr>
            <td> Chon </td>
            <td> <input type="radio" name="chon" value="Timmax">Tim max
            <input type="radio" name="chon" value="Timmin">Tim min<br>
            <input type="radio" name="chon" value="soNT">Cac so nguyen to<br>
            <input type="radio" name="chon" value="soCP">Cac so chinh phuong<br>
            <input type="radio" name="chon" value="soHT">Cac so hoan thien
             </td>
            <td class="err">Moi ban chon</td>
         </tr>
         <tr>
            <td> Ket qua: </td>
            <td> <input type="text" name='kq' value="<?php echo $kq; ?>"> </td>
            
         </tr>
         <tr>
            <td> </td>
            <td><button type="submit">Tinh</button> </td>
            
         </tr>
   </table>
   
</form>

</body>
</html>