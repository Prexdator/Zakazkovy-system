  <?php
   include('session.php');
  
  ?>
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
 <?php 

  

echo '
<!DOCTYPE html>
<html lang="cs-cz">

        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
                <title>Administrace</title>
        </head>

        <body background=#p01>
                <style>
    #p01 {
background: rgb(47,190,11);
background: linear-gradient(90deg, rgba(47,190,11,1) 40%, rgba(228,107,13,1) 55%);
}
 #p02 {
background: rgb(228,107,13);
background: linear-gradient(90deg, rgba(228,107,13,1) 65%, rgba(47,190,11,1) 100%);
}
</style>
   <div style="margin:10px auto; position: relative; width: 100%;">        
      <div style="float:right; width: 20%;">
<table width="100%" border="2">
  <td>
<h2 align="center">Residomo hot.</h2>
</table>
<table width="100%" border="2">

<td>id</td>
<td>cislo ob.</td>
  
<tr>        ';
 
           
                    $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');

if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 
          $time5 =date('Y-m-j', strtotime($Date. ' - 1 day')); 
         $datum55 = date("Y-m-j", Time());
          $res="Residomo";
          $h="Hotovo";
           
  $sql5 = "SELECT id,kdo,co,stav FROM zakazky WHERE kdo = '$res' AND stav = '$h' AND datumhotovo = '$datum55'";
         $result5 = mysqli_query($mysqli, $sql5);

 while($row5 = mysqli_fetch_assoc($result5)) {
$id = $row5['id'];
$kdo = $row5['kdo'];
$co = $row5['co'];
$stav = $row5['stav'];
$info = "ID:";
$info1 = "  Číslo obj:";
$info2 = "  =  ";
    echo '<td><input type="TEXT" size="3" value="'.$id.'" readonly></td>';

      echo '<td><input type="TEXT"  size="10"value="'.$co.'" readonly></td><tr>';

         

 }
   
       $time = Date("H:i:s", Time());
IF($login_session=="Tony")
{
$prava="Administrátor";
}
IF($login_session=="Ivanka")
{
$prava="Účetní";
}
IF($login_session=="Martin")
{
$prava="Manažer";
}
    echo '
</td>
</td><tr>
        </table>  
          
    
    
    



</table></div>
     
    
<div style="float:left; width: 80%; ">

<table width="100%" border="2">

 <td>
<h2 align="center">Monitoring a čištění potrubí s.r.o.</h2>
</td></table>

<div style = "background-color:#333333; color:#FFFFFF; padding:3px;" >
<label>
<th align="left" >
  <a href="http://www.adcistepotrubi.cz/vkladzakazky.php" size="30"><button>Nová zakázka</button></a>
	  <a href="http://www.adcistepotrubi.cz/filtr.php"><button>Kontrola docházky</button></a>
	  <a href="http://www.adcistepotrubi.cz/rozvrh.php"><button>Plánování</button></a>
	  	  <a href="http://www.adcistepotrubi.cz/filtrzakazek.php"><button>Filtrování zakázek</button></a>
                                 <a href="http://www.adcistepotrubi.cz/ziskresidomo.php"><button>Ziskovosti</button></a>
                                                  <a href="http://www.adcistepotrubi.cz/zobrozvrh.php"><button>Rozvrh dne</button></a>
                                 
        <a href="http://www.adcistepotrubi.cz/logout1.php"><button>Odhlásit</button></a>
          '; echo"<label><td>Uživatel:";    echo $login_session; echo'</label> &nbsp;'; echo"-&nbsp"; echo $prava;
          echo'
	</th>
    </div>
</table>	<tr>

<table width="100%" border="2">
<form action="edit.php" method="post">
<td>Zadej ID zakázky:<input type="number" name="id" value="" size="15px"><button>Informace/Editovat zakázku</button></a></td>
</form>
</table>
<tr>
<tr>


</table>
<table width="100%" border="2">
     <td><h2 align="center">Hoří termín</h2></td>
      </table>
    

<table width="100%" border="2">
    <div style="float:left; width: 100%; ">


            <td>ID:</td><td>Zakázka</td><td>Firma:</td><td>Číslo ob.:</td><td>Kontakt:</td><td>Adresa:</td><td>Datum do:</td><td>Naplanova.</td>
           <tr>
           ';
           
                   
          
           
          $time =date('Y-m-j', strtotime($Date. ' + 1 day'));
          $time2 =date('Y-m-j', strtotime($Date. ' + 2 day'));
          $zaporhot = "Nenaplanovano";
  $sql2 = "SELECT * FROM zakazky WHERE stav = '$zaporhot' AND datdo = '$time' OR datdo = '$time2' ";
  
         $result2 = mysqli_query($mysqli, $sql2);

 while($row = mysqli_fetch_assoc($result2)) {
$id = $row['id'];
$kdo = $row['kdo'];
$adresa = $row['adresa'];
$kontakt = $row['telkontakt'];
$popis = $row['popis'];
$co = $row['co'];
$datdo = $row['datdo'];
$nf = $row['nazevfirmy'];
$naplanovanona = $row['naplanovanona'];
$naplan1 = $row['naplan1'];
$naplan2 = $row['naplan2'];


   echo("<td>");  echo '<input type="text" size="4" value="'.$id.'" readonly>';echo("</td>");
   
   echo("<td>");
echo '<input type="TEXT" size="5" value="'.$kdo.'" readonly>';
echo("</td>");
    echo("<td>");
    echo '<input type="TEXT" size="5" value="'.$nf.'" readonly>';
    echo("</td>");
    echo("<td>");
    echo '<input type="TEXT" size="5" value="'.$co.'" readonly>';
    echo("</td>");


    
   echo("<td>"); echo '<input type="TEXT"  size="5" value="'.$kontakt.'" readonly>';echo("</td>");
    echo("<td>");echo '<input type="TEXT" size ="16" value="'.$adresa.'" readonly>';echo("</td>");


echo("<td>");echo '<input type="TEXT" size="8" value="'.$datdo.'" alight="right" readonly>';echo("</td>");

echo("<td>");echo '<input type="TEXT" size="10" value="'.$naplanovanona.'" alight="right" readonly>';echo("</td>");

   echo("<tr>");
	
    }

               
              echo'  </tr></td>  </table>
               
 

</form>
</div></div>
</body>
	
</html>    ';
               ?> 