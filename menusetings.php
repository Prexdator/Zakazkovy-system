<?php

        include('session.php');  
          $mysqli = new mysqli('c072um.forpsi.com', 'f135100', '83k4LUpu', 'f135100');
                        $sql2 = "SELECT id FROM menu ";
         $result2 = mysqli_query($mysqli, $sql2);
       $j=0;
 while($row = mysqli_fetch_assoc($result2)) {
            
   $j=$j+1;
          
?>

                    <form action="pridat.php" method="post">            
         <p style="text-align:center">                    
Skožka:<input type="text" align="center" autocomplete="off" name="type" value="" size="50%">     

             
                           	<center><strong><input type="submit" value="Vlozit do databáze" STYLE="color:red;" ></strong></center>
                  
  </form>


