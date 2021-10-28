
<div style="margin:10px auto; position: relative; width: 90%;">        
     
        <form action="dochazka.php" method="post">
<center><h1>Docházka  <select name="car" style="width: 100%;">
<option value="libor"> Libor</h1></center> </select>




<table width="100%" border="2">

	<td><center>Zakázka</center></td></td>
	<tr>
<td><select name="id" size="1" style="width: 100%;"> 
<option value="" style="width: 100%;"></option>
<?php
    $t = "libor" ;           
             $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');   
                        $mysqli1 = new mysqli('a026um.forpsi.com', 'f123772', 'Q3QPeKA', 'f123772');   
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 

$car="malysprinter";
$datumdnes= Date("Y-m-j");
 $sql1 = "SELECT id FROM $t WHERE datum='$datumdnes' AND st='ANO'";
          $result1 = mysqli_query($mysqli1, $sql1);
                  while($row = mysqli_fetch_assoc($result1)) {
        $id1 = $row['id'];
        
                
        
   $sql = "SELECT id,kdo,mesto,ulice,telkontakt,nazevfirmy,popis FROM zakazky WHERE id='$id1'";
         $result = mysqli_query($mysqli, $sql);
   
 while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $kdo = $row['kdo'];
        $telkontakt = $row['telkontakt'];
        $mesto = $row['mesto'];
           $ulice = $row['ulice'];
      $popis = $row['popis'];
       $nazevf = $row['nazevfirmy'];
            
          echo '<option style="width: 100%;" value="'.$id.'"> ID: '.$id.' Z: '.$kdo.' '.$nazevf.' K: '.$telkontakt.' <br>  A: '.$mesto.'  '.$ulice.' P: '.$popis.'</option>';



}      }
echo'</select></td>';


                ?>
    
                  </table>    <table width="100%" border="2">
                  <td>jina práce</td><td>Zaměstn. 1</td><td><center>Zaměstn. 2</center>
            <tr><td><center>Jiná práce</center>
  <select name="jinaprace" style="width: 100%;">
<option value="">
<option value="Garáž">Garáž
<option value="Údržba">Údržba
<option value="Porada">Porada
<option value="Nákup materiálu">Nákup materiálu
<option value="čov">ČOV
<option value="Jiné">Jiné
	    </select>
<td style="width: 10%";><select name="zamestnanec1" size="1">
	<option value="" >
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Josef">Josef    <option value="Radek">Radek
                	<option value="Leonit">Leonit
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select></td><td style="width: 10%;">
	<select name="zamestnanec2" size="1"  >
		<option value="">
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan      <option value="Radek">Radek
        	<option value="Leonit">Leonit
	<option value="Josef">Josef
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select>


	</table></center>



	    
	             <br>

	<center><table width="100%" border="2"></center>
	<td>Začátek zakázky</td><td>Konec zakázky</td><td>Stav</td><tr>

	<td> <input type="time" name="zacatek" value=""></td>
		<td> <input type="time" name="konec" value=""></td>
		
<td><select name="stav" size="1">
<option value="Hotovo">Hotovo
<option value="Rozpracovano">Rozpracováno
<option value="Nezastižen">Nezastižen
<option value="Neuděláno">Neuděláno
</select></td>
		      	</table>     <br>
		<tr>
	     <center><table width="100%" border="2"></center>             
	<td><center><input type="submit" value="Uložit dochazku" size="1" width="80" STYLE="color:red;"></td>
	<tr></tr>     	</table>
</form></form>                <br><br>
	<center><table width="100%" border="2"></center>
<?php
echo'<td><center>GPS Navigace zakázek</center></td><tr>';
echo '<td>';
       $sql1 = "SELECT id FROM $t WHERE datum='$datumdnes' AND st='ANO'";
          $result1 = mysqli_query($mysqli1, $sql1);
                  while($row = mysqli_fetch_assoc($result1)) {
        $id1 = $row['id'];
                  $sql = "SELECT id,kdo,mesto,ulice,telkontakt,nazevfirmy,popis FROM zakazky WHERE id='$id1'";
                     $result = mysqli_query($mysqli, $sql);
 while($row = mysqli_fetch_assoc($result)) {
        $id5 = $row['id'];
      
        $mesto5 = $row['mesto'];
               $ulice5 = $row['ulice'];
            

  
 echo'<a href="http://maps.google.com/maps?q='.$mesto5.''.$ulice5.'">Zakázka '.$id5.'</a>&nbsp';

}   }
 $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');   
                        $mysqli1 = new mysqli('a026um.forpsi.com', 'f123772', 'Q3QPeKA', 'f123772');   
                            echo'<br>';
echo'<center><table width="80%" border="1"> <h2>Dnes Libor</h2> ';
 $sql1 = "SELECT id,cas FROM $t WHERE datum='$datumdnes' ";
          $result1 = mysqli_query($mysqli1, $sql1);
                  while($row = mysqli_fetch_assoc($result1)) {
        $id1 = $row['id'];
                     $v = $row['cas'];
                
        
   $sql = "SELECT id,kdo,mesto,ulice,telkontakt,nazevfirmy,popis FROM zakazky WHERE id='$id1'";
         $result = mysqli_query($mysqli, $sql);
   
 while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $kdo = $row['kdo'];
        $telkontakt = $row['telkontakt'];
        $mesto = $row['mesto'];
           $ulice = $row['ulice'];
      $popis = $row['popis'];
       $nazevf = $row['nazevfirmy'];
           
          echo ' <td> ID: '.$id.' Zákazník: '.$kdo.' '.$nazevf.' Kontakt: '.$telkontakt.' Adresa: '.$mesto.'  '.$ulice.' Popis: '.$popis.' <td> V hodin:'.$v.'<tr>';



}      }
echo'</table></td>';
?>
</table>

</body>