
<div style="margin:10px auto; position: relative; width: 90%;">        
     

<center><h1>Docházka huindai</h1></center>

<form action="zacatek.php" method="post">     
<table width="100%" border="2" bgcolor=#00FF00>
<td> <button>Zadat začátek směny</button></a> 
<?php 

		echo '<input type="time" name="zacatek" value="">';
		?>
	<select name="zamestnanec1" type="text" size="1">
	<option value="">
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Ivan">Ivan
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select>
	<select name="zamestnanec2" type="text" size="1">
		<option value="">
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Ivan">Ivan
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select></td> 
	
	</tr>
	
	
	
	</table> </form>
<form action="konec.php" method="post">
<table width="100%" border="2" bgcolor=#FF0000>    
<td><button>Zadat konec směny&nbsp;&nbsp;&nbsp;</button></a>
<?php 
 
		echo '<input type="time" name="konec" value="">';
		?>
	<select name="zamestnanec1" size="1">
	<option value="">
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Ivan">Ivan
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select>
<select name="zamestnanec2" size="1">
		<option value="">
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Ivan">Ivan
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select></td> 
	
		
	

	</tr>
	
	
	
	</table> </form>

<form action="dochazka.php" method="post">

<center><table width="100%" border="2">

	<td><center>Zakázka</center></td><td><center>Zaměstn. 1</center></td><td><center>Zaměstn. 2</center></td>
	<tr>
<td><select name="id" size="1" style="width: 100%;"> 
<option value="" style="width: 100%;"></option>
<?php
                
             $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');   
                        $mysqli1 = new mysqli('a026um.forpsi.com', 'f123772', 'Q3QPeKA', 'f123772');   
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 

$n="Naplanovano";
$r="Rozpracovano";
$car="hundai";
$datumdnes= Date("Y-m-j");
 $sql1 = "SELECT id FROM $car WHERE datum='$datumdnes' AND st='ANO'";
          $result1 = mysqli_query($mysqli1, $sql1);
                  while($row = mysqli_fetch_assoc($result1)) {
        $id1 = $row['id'];
        
                
        
   $sql = "SELECT id,kdo,mesto,ulice,telkontakt,nazevfirmy,popis FROM zakazky WHERE id='$id1' AND stav='$n' OR stav='$r'" ;
         $result = mysqli_query($mysqli, $sql);
   
 while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $kdo = $row['kdo'];
        $telkontakt = $row['telkontakt'];
        $mesto = $row['mesto'];
           $ulice = $row['ulice'];
      $popis = $row['popis'];
       $nazevf = $row['nazevfirmy'];
            
          echo '<option style="width: 80%;" value="'.$id.'"> ID: '.$id.' Zákazník: '.$kdo.' '.$nazevf.' Kontakt: '.$telkontakt.' Adresa: '.$mesto.'  '.$ulice.' Popis: '.$popis.'</option>';



}      }
echo'</select></td>';


                ?>
<td style="width: 10%";><select name="zamestnanec1" size="1">
	<option value="" >
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Ivan">Ivan
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select></td><td style="width: 10%;">
	<select name="zamestnanec2" size="1"  >
		<option value="">
<option value="Tonda">Tonda
<option value="Viktor">Viktor
<option value="Libor">Libor
<option value="Ruslan">Ruslan
	<option value="Ivan">Ivan
    <option value="Juramladsi">Jura mladsi
	<option value="Jurastarsi">Jura starsi
</select>

<tr><td><center>Jiná práce</center>
  <select name="jinaprace" style="width: 100%;">
<option value="">
<option value="Garáž">Garáž
<option value="Údržba">Údržba
<option value="Porada">Porada
<option value="Nákup materiálu">Nákup materiálu
<option value="Jiné">Jiné
	    </select>
	</table></center>



	    
	 

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
		
		<tr>
	
	<td><input type="submit" value="Uložit dochazku" size="1" width="80"></td>
	<tr></tr>
</form></form>
	<center><table width="100%" border="2"></center>
<?php
echo'<td><center>GPS Navigace zakázek</center></td><tr>';
echo '<td>';
       $sql1 = "SELECT id FROM $car WHERE datum='$datumdnes' AND st='ANO'";
          $result1 = mysqli_query($mysqli1, $sql1);
                  while($row = mysqli_fetch_assoc($result1)) {
        $id1 = $row['id'];
                  $sql = "SELECT id,kdo,mesto,ulice,telkontakt,nazevfirmy,popis FROM zakazky WHERE id='$id1'  AND stav='$n'";
                     $result = mysqli_query($mysqli, $sql);
 while($row = mysqli_fetch_assoc($result)) {
        $id5 = $row['id'];
      
        $mesto5 = $row['mesto'];
               $ulice5 = $row['ulice'];
            

  
 echo'<a href="http://maps.google.com/maps?q='.$mesto5.''.$ulice5.'">Zakázka '.$id5.'</a>&nbsp';

}   }
?>
</table>

</body>