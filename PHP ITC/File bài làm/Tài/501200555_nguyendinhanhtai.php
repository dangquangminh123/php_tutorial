<html>
<head>
     <title>kiem tra</title>
<style>
   .err{
    color:red;  
   }
   .mau{
       background-color: yellow;
   }
</style>
</head>
<body>

<?php
   
   $n=isset($_POST['nhap'])? $_POST['nhap']:"";
   $arr=[];
   $chon=isset($_POST['chon'])? $_POST['chon']:"";
   $kq=null;
   $ptmang="";
   if($n!=""){
    for($i=0;$i<$n;$i++)
    {
        $arr[$i]=rand(-20,20);
    }
    
    foreach( $arr as $pt)
    {
        $ptmang=$ptmang."$pt ";
    }

} 
   if($n!=""&&$chon!="")
   {
       if($chon=="vitrile")
       {
           $kq=vitriduongle();
       }
       if($chon=="tichCP")
       {
           $kq=tich_giatricp();
       }
       if($chon=="sochandautien")
       {
           $kq=sochan_dautien();
       }
       if($chon=="sapxepgiam")
       {
           $kq=sapxep_giam();
       }
       
   }
    function vitriduongle(){
        global $arr,$n;
        $vtduongle=null;
        for($i=0;$i<$n;$i++)
        {
            if($arr[$i] % 2 !=0 && $arr[$i]>0)
            {
                $vtduongle=$vtduongle."$i ";
            }
        }
        return $vtduongle;
    }
    function tich_giatricp(){
        $tich=0;
        global $arr,$n;
        for($i=0;$i<$n;$i++){
            if(kt_cp($arr[$i])==true){
          $tich=1;
          break;
            }
        }
        
        for($i=0;$i<$n;$i++){
            if(kt_cp($arr[$i])==true){
          $tich=$tich*$arr[$i];
            }
        }
        return $tich;
    }
    function sapxep_giam(){
        global $arr,$n;
        $day=null;
        for($i=0;$i<$n-1;$i++)
        {
        for($j=$i+1;$j<$n;$j++){
           if($arr[$i]<$arr[$j])
           {
               $hv=$arr[$i];
               $arr[$i]=$arr[$j];
               $arr[$j]=$hv;
           }
        }
        }    

        for($i=0;$i<$n-1;$i++){
           $day=$day."$arr[$i] ";
        }
        return $day;
    }
    function sochan_dautien(){
        global $arr,$n;
        for($i=0;$i<$n;$i++)
        {
            if($arr[$i]%2==0)
            {
                return $arr[$i];
            }
        }

    }
    function kt_cp($so)
    {
        $i=round(sqrt($so));
       if(($i*$i)==$so)
       return true;
       return false;
    }
?>

<form action="" method="post" >
    <table border=1 align="center" class="mau">
         <tr>
            <th colspan=3> Kiem tra </th>
         </tr>
         
         <tr>
            <td> Nhap so phan tu n:</td>
            <td> <input type="text" name='nhap' value="<?php echo $n;?>"> </td>
            
         </tr>
         <tr>
            <td>Xuat mang</td>
            <td> <input type="text" name="" value="<?php echo $ptmang;?>"><br> </td>
            
         </tr>
         <tr>
            <td></td>
            <td> <input type="radio" name="chon" value="vitrile">Xuất vị trí các giá trị dương lẻ<br> </td>
            
         </tr>
         <tr>
         <tr>
            <td></td>
            <td> <input type="radio" name="chon" value="tichCP">Tính tích các giá trị là số chính phương<br> </td>
            
         </tr>
         <tr>
            <td></td>
            <td> <input type="radio" name="chon" value="sochandautien">Xuất số chẵn đầu tiên<br> </td>
            
         </tr>
         <tr>
            <td></td>
            <td> <input type="radio" name="chon" value="sapxepgiam">Sắp xếp giảm<br> </td>
            
         </tr>
         <tr>
            <td> Ket qua: </td>
            <td> <input type="text" name='kq' value="<?php echo $kq; ?>"> </td>
            
         </tr>
         <tr>
            <td> </td>
            <td><button type="submit">Thực hiện</button> </td>
            
         </tr>
   </table>
   
</form>

</body>
</html>