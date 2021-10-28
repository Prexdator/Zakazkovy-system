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
$stav = $_POST['stav'];
    $auto = $_POST['car'];
        
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
  $rozdil5=round($rozdil, 2);
  
$sql5 = "SELECT kdo,poceth,mesto,ulice FROM zakazky WHERE id = '$id' ";
$result = mysqli_query($mysqli,$sql5);
while($row = mysqli_fetch_assoc($result)) {
$kdo = $row['kdo'];
$pc = $row['poceth'];
$mesto = $row['mesto'];
      $ulice = $row['ulice'];
 $poceth1 = ($pc+$rozdil5);
    
 }

  

$date = Date("Y-m-j");

   
 if($jinaprace!=NULL)
  {
 $kdo=$_POST['jinaprace'];
   $mesto="";
    $ulice="";
   $id="-22";
   $pocethn=$rozdil5;
 $rozdil5="0";
   
  }
  if($stav=="Hotovo")
  {
 $st="NE";   
  }   
  else
  {
 $st="ANO";         
  } 
   $sql_statement5="UPDATE $auto SET st ='$st' WHERE id = '$id' ";
 $sql_statement3="UPDATE zakazky SET datumhotovo ='$date',poceth ='$poceth1',auto ='$auto',stav ='$stav' WHERE id = '$id' ";
$sql_statement="INSERT INTO $zamestnanec1 (id,zakazka,mesto,ulice,datum,zacatek,konec,poceth,pocethn ) VALUES ('$id','$kdo','$mesto','$ulice','$date','$zacatek','$konec','$rozdil5','$pocethn')";
$sql_statement1="INSERT INTO $zamestnanec2 (id,zakazka,mesto,ulice,datum,zacatek,konec,poceth,pocethn) VALUES ('$id','$kdo','$mesto','$ulice','$date','$zacatek','$konec','$rozdil5','$pocethn')";
mysqli_query( $mysqli1,$sql_statement);
mysqli_query( $mysqli1,$sql_statement1);
   mysqli_query( $mysqli5,$sql_statement5);
mysqli_query( $mysqli,$sql_statement3);



               	

               
       echo $poceth;
                  echo $pocethd;    
                                 echo'         <script>window.location.href="'.$auto.'.php";</script>          ';
                ?>	
 