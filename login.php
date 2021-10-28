<?php
session_start();
$mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');;

$login = $_POST['nick'];
      $heslo = $_POST['heslo']; 


$dotaz = "SELECT id FROM prihlaseni WHERE jmeno='$login' AND heslo='$heslo'";
 $result = mysqli_query($mysqli,$dotaz);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
  $count = mysqli_num_rows($result);
        
      

    
if($count == 1) {

         $_SESSION['login_user'] = $login;
         
 header("Location: administrace.php"); 
 
 
} 
else {
 echo"Zadal jsi špatný login nebo heslo!";
}
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>