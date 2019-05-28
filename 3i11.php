<?     
 if($_REQUEST["t1"]=="") 
          header("Location: http://www.test1.ru/3i1.php");
?>

<html>
<body>
<form action="3i11.php" method=POST> 
<?php
$a=$_REQUEST['t1'];

if(isset($_POST['Del'])){
    $m = $_POST['Del'];
    print_r($m);
    foreach($m as $k => $t)
    {
     $b=$k;  
    }
    $a=str_ireplace(chr($b),' ',$a);
}

echo $a;           
echo '<table border="1">';
substr_count($a,'a');
for ($i=0; $i<=255; $i++)
if ((substr_count($a,chr($i)) ) && ($i!==32))
{echo '<tr>';
echo '<td>'. chr($i) .'</td>';   
echo '<td>'. substr_count($a,chr($i)) .'</td>';

echo "<td><input name=\"Del[$i]\" type=submit value=\"Стереть\"> </td>";
 echo '</tr>';
                                      
 }
 echo '</table>';
          echo "<input type=hidden name=t1 value=\"$a\"> ";
?>

</form>
<form action="3i111.php" method=POST> 
<?
          echo "<input type=hidden name=t1 value=\"$a\"> ";
?>
<input type=submit value="Далее">                                        
</form>
<form action="3i1.php" method=POST> 
<input type=submit value="Начало">                                         
</form>
</body>
</html>