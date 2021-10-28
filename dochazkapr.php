 <?php
       
           date_default_timezone_set('UTC');  
          $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');                                                                                     
                        $mysqli5 = new mysqli('a026um.forpsi.com', 'f123772', 'Q3QPeKA', 'f123772');  
$mysqli1 = new mysqli('a026um.forpsi.com', 'f123771', '8p5kGTn', 'f123771'); 
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 

$id = $_POST['id'];

$zamestnanec1 = $_POST['zamestnanec1'];
$zamestnanec2 = $_POST['zamestnanec2'];
$jinaprace=$_POST['jinaprace'];
$zacatek = $_POST['zacatek'];
$konec = $_POST['konec'];
    $auto ="malysprinter";
        $str =$_POST['stran'];
  
        
  $timestamp2 = strtotime($konec);
   $timestamp = strtotime($zacatek);  
        
         
                      $rozdilh = date('H',$timestamp);
                       $rozdilm = date('i',$timestamp);
   
                   
                              $minutky= ($rozdilm/60);
               $vysledek= $rozdilh+$minutky  ;
               
               
        
         
                      $rozdilh1 = date('H',$timestamp2);
                      $rozdilm1 = date('i',$timestamp2);
   
                   
                              $minutky1= ($rozdilm1/60);
               $vysledek1= $rozdilh1+$minutky1 ;
                           $rozdil=$vysledek1-$vysledek;    
  
$sql5 = "SELECT kdo,prot,mesto,ulice FROM zakazky WHERE id = '$id' ";
$result = mysqli_query($mysqli,$sql5);
while($row = mysqli_fetch_assoc($result)) {
$kdo = $row['kdo'];
$pc = $row['prot'];
$mesto = $row['mesto'];
      $ulice = $row['ulice'];
 $poceth1 = ($pc+$rozdil);
 }
        
       

$date = Date("Y-m-j");
 $p="Protokol $str strany";
   
 $zamestnanec1="Radek";
  
  
 $sql_statement3="UPDATE zakazky SET prot ='$poceth1' WHERE id = '$id' ";
$sql_statement="INSERT INTO $zamestnanec1 (id,zakazka,mesto,ulice,datum,zacatek,konec,poceth) VALUES ('$id','$p','$mesto','$ulice','$date','$zacatek','$konec','$rozdil')";
    mysqli_query( $mysqli,$sql_statement3);
mysqli_query( $mysqli1,$sql_statement);



           
          
                ?>	
<script>
window.location.href="radekprotokoly.php";
</script>