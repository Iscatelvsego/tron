
<html>
<body>
<form action="3i111.php" method=POST> 
<?php
$a=$_REQUEST['t1'];
$min=100000;
echo $a;
substr_count($a,'a');
for ($i=0; $i<=255; $i++)
if ((substr_count($a,chr($i)) ) && ($i!==32))
{ $f=substr_count($a,chr($i));
   if($min>$f){$min=$f; $b=chr($i);}                                   
 }
      $a=str_ireplace(' ',$b,$a);

          echo "<input type=hidden name=t1 value=\"$a\"> ";

 ?>
 
 <input type=submit value="Заменить">                                         

</form>
<form action="3i1.php" method=POST> 
<input type=submit value="Начало">                                         
</form>
</body>
</html>