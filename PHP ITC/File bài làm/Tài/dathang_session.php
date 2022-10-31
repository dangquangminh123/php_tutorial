
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
    
    $bia=isset($_POST['bia'])? $_POST['bia']:"";
    $diachi=isset($_POST['diachi'])? $_POST['diachi']:"";
    
   ?>
   <form method="POST" action="" > 
<table class="bg" align="center">
         <tr>
            <th colspan=3><h1> Dat hang</h1></th>
         </tr>
         
         <tr>
            <td> Cac loai san pham:</td>
            <td> *Bia Heineken </td>
            
         </tr>
         <tr>
            <td>  </td>
            <td> <select name="bia[]" id="" size="4" multiple="multiple">
                <option value="Bia Tiger">Bia Tiger</option>
                <option value="Bia Heineken">Bia Heineken</option>
                <option value="Bia Sai Gon">Bia Sai Gon</option>
                <option value="Bia Budweiser">Bia Budweiser</option>
            </select> </td>
            
         </tr>
         
         <tr>
            <td> Dia chi giao hang</td>
            <td><input type="text" name="diachi" value=""> </td>
            
         </tr>
         <tr>

         <th colspan=3><button type="submit" name="">Dat hang</button></th>
            
         </tr>
   </table>
<p  align="center">
<?php
if($bia!='' && $diachi!='')
{
    echo "Cac san pham <br>";
    foreach($bia as $pt)
    {
        echo $pt."-";
    }
    echo "<br>";
    echo "Chung toi se giao hang cho ban tai dia chi <br>";
    echo $diachi;
}
?>
</p>
</form>
</body>
