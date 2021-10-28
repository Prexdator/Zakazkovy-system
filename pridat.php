          <?php
   include('session.php');
        echo'


';
                
           $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');

if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 
$kdo = $_POST['kdo'];
$adresa = $_POST['adresa'];
$ulice = $_POST['ulice'];
$popis = $_POST['popis'];
$telkontakt = $_POST['telkontakt'];
$nazevfirmy = $_POST['nazevfirmy'];
$co = $_POST['co'];   
$stav="nenaplanovano";
$datdo = $_POST['datdo'];
 $sql = 'SELECT id FROM zakazky';
         $result = mysqli_query($mysqli, $sql);

 while($row = mysqli_fetch_assoc($result)) {
        $id = $id + 1;
    }
$date = Date("Y-m-j");
$date1 = Date("Y-m-j",$datdo);
$sql_statement="INSERT INTO zakazky (id,kdo,mesto,ulice,telkontakt,popis,co,datdo,nazevfirmy,datvlozeni,stav) VALUES ('$id','$kdo', '$adresa', '$ulice','$telkontakt','$popis', '$co', '$datdo' ,'$nazevfirmy', '$date', '$stav')";
mysqli_query( $mysqli,$sql_statement);

                            echo '<center> Úspěšně uloženo      </center>  ';
              echo '<center> Nová zakázka s číslem: <input border="0" type="text" value='.$id.'>      </center>  ';
               	        
$mysqli->close();
            
           
                
                ?>
 <script>
setTimeout(function(){
window.location.href="vkladzakazky.php";
}, 4000);

</script>