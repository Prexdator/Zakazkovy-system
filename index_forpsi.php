<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
$mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');

$login = $_POST['nick'];
      $heslo = $_POST['heslo']; 

        if($login != 'msprinter') {
$dotaz = "SELECT id FROM prihlaseni WHERE jmeno='$login' AND heslo='$heslo'";
 $result = mysqli_query($mysqli,$dotaz);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $active = $row['active'];
  $count = mysqli_num_rows($result);
         
    
if($count == 1) {

         $_SESSION['login_user'] = $login;
         
 header("Location:administrace.php"); 
 die();
 
}  } 
if($login == 'msprinter') {
$dotaz = "SELECT id FROM prihlaseni WHERE jmeno='$login' AND heslo='$heslo'";
 $result = mysqli_query($mysqli,$dotaz);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $id=$row['id'];
       $active = $row['active'];
         if($id == 10) {
  $_SESSION['login_user'] = $login;
         
 header("Location:malysprinter.php"); 
 die();

}     }
else {

 echo"Zadal jsi špatný login nebo heslo!";
}   }
?>

              <!DOCTYPE html>
<html lang="cs">
        <meta charset="UTF-8">
   <head>
   <meta charset="UTF-8">
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
      <title>Přihlášení do systému</title>
      
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
         <div align = "center"><div style = "width:300px; border: solid 1px #333333; " align = "center"> <br /><br /><br /> <img src="logo.png" alt="Monitoring potrubí s.r.o."> <br /><br /> <br />  </div>
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><center><b>Zadejte přihlašovací údaje</b></center></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Jméno:</label><input type = "text" autocomplete="off" name = "nick" class = "box"/><br /><br />
                  <label>Heslo&nbsp; :</label><input type = "password" autocomplete="off" name = "heslo" class = "box" /><br/><br />
                 <center> <input type = "submit" value = " Přihlásit "/></center><br />
               </form>
              
               <div style = "color:#cc0000;"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
        
   </body>
</html>