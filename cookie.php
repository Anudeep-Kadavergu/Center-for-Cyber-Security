<?php 
		if(isset($_COOKIE['user'])){
    

   }  
   else{
   	$cookie_name = "user";
    $cookie_value ="n0" ;
    setcookie($cookie_name, $cookie_value);
    
    header('location:http://ccsvardhaman.tk');
    exit;
   }
?>