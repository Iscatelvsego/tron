<? 
         session_start();
         
if (isset($_GET['go1']))
   {
        $str= "data_".$_SESSION['login'].".txt";
       $f = fopen($str, 'w') or die("�� ������� ������� ����");
             $ar2=array();
             $m =  $_SESSION['m'];
             for ($b=0; $b<count($m); $b++)                                                                                                                   
            { $str1=$m[$b]; 
            $ar2[]=implode(" ",$str1)." ";   }
             
             for ($b=0; $b<count($_SESSION['m']); $b++)                                                                                                                   
            {   
            fwrite($f,$ar2[$b]."\n");
            }
   $_SESSION['login']=""; 
   $_SESSION['passwd']=""; 
   $_SESSION['d']=0; 
 
    
 }
if (!$_SESSION['d'])
  {header("Location:http://www.test1.ru/i4/" );
 
}

  else
  {
  print_r($_SESSION) ;
$a = $_SESSION['login'];
  echo "<head>
  <style>
  .field{clear:both; text-align:right;}
  label {float:left; padding-right:10px; }
   .main{float:left}
   body{background: url(i.jpg);}
    </style>
  
  </head> 
  <form action=\"content.php\">
    	Login: <input type=text name=login1 value= \"$a\">
    	<input type=submit name=go1 value=�����>
    </form> ";
 
  echo " 
<form action=\"content.php\"> 
<div class=\"main\">
<div class=\"field\">
<label> �������� </label>
<input type=text name=\"t[]\" value=\"\">   <br>
<label> ����� </label>
<input type=text name=\"t[]\" value=\"\">  <br>
<label> ���������� ������� </label>
<input type=text name=\"t[]\" value=\"\"><br>
<label> ����� ���� </label>
<input type=text name=\"t[]\" value=\"\">  <br>
<label> ���� </label>
<input type=text name=\"t[]\" value=\"\"><br>
</div>
</div>
<br><br><br><br><br><br>
 <input type=submit name=\"add\" value=\"�������� ������\"> ";
           
        
        $ar=array();
        
         if(isset($_SESSION['m']))
            $ar=$_SESSION['m'];
           PRINT_R($ar);
  echo("<br>");
                   
         if(isset($_REQUEST['add']) &&  isset($_REQUEST['t'])){
            $t = $_REQUEST["t"];
            $ar[]=$t;
        }
echo $_REQUEST["t"]; 
       
print_r($ar); 
           echo("<br>");
            session_unset();
            $_SESSION['login']="pit"; 
   $_SESSION['passwd']="123"; 
                $_SESSION['m']=$ar;
                        $_SESSION['d']=1; 
    
      
 echo("<br>");
          
        if(isset($_REQUEST['del'])){
            unset($ar[0]);
            $ar = array_values($ar);
            session_unset();
            $_SESSION['d']=1; 
                $_SESSION['m']=$ar;
           
        }
            
      
            
        $cols = 5; 

echo '<table border="1">';
    echo '<th>';
    echo "<td>��������</td>";
    echo "<td>�����</td>";
    echo "<td>���������� �������</td>";
    echo "<td>����� ���� </td>";
    echo "<td>����</td>";
    echo '</th>';
 
for ($tr=0; $tr<count($ar); $tr++){  
   
    echo '<tr>';
    echo '<td>'.($tr+1).'</td>';
    for ($td=0; $td<$cols; $td++){  
        echo '<td>'.$ar[$tr][$td].'</td>';
    }
    echo '</tr>';
}

echo '</table>';
                  

  echo " <input type=submit name=\"del\" value=\"������� �������\">
</form>  ";

 
  
    
  }

print_r($_SESSION);
echo("<br>"); 
 print_r($str1); 



?>