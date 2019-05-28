<? session_start();                      
                            
   if (isset($_GET['go']))
  {
 $_SESSION['login']=$_GET['login']; 
   $_SESSION['passwd']=$_GET['passwd']; 
 $str= "data_".$_SESSION['login'].".txt";
   $a = file("data_".$_SESSION['login'].".txt");
   $ar1=array();
    for ($b=0; $b<count($a); $b++){ 
        $a[$b] = trim($a[$b]);
        $t =  explode(" ",$a[$b]);
        if($t[0] != "") 
        $ar1[] = $t;
    } 
    $_SESSION['m']=$ar1;
 
       
   
        $ar=file("user.txt");   
        $a1= $_SESSION['login'];                                 
        $a2= $_SESSION['passwd'];
        
    for ($b=0; $b<count($ar); $b++)                                                                                                                   
            { $t=explode(" ",$ar[$b]);
            
            if($_SESSION['login']==$t[0] ) 
                 if($_SESSION['passwd']==$t[1] ) 
             
                $_SESSION['d']=1; 
            }
              
       }
              
if ( $_SESSION['d'])
  {
  header("Location:http://www.test1.ru/i4/content.php" );
   
  }
  else
  {echo "<center><form>
    	Login: <input type=text name=login>
    	Password: <input type=password name=passwd>
    	<input type=submit name=go value=Go>
    </form></center>";
}
print_r($_SESSION) ;
echo("<br>");
print_r($ar1) ;
echo("<br>");
print_r($a) ;
print_r($str) ;

 
  ?>