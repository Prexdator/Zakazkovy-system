 <?php

           date_default_timezone_set('UTC');     
$mysqli1 = new mysqli('a026um.forpsi.com', 'f123771', '8p5kGTn', 'f123771'); 
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 
$id = $_POST['id'];
$zamestnanec1 = $_POST['zamestnanec1'];
$zamestnanec2 = $_POST['zamestnanec2'];
$konec = $_POST['konec'];
$auto = $_POST['car'];
$date = Date("Y-m-j");
$id=-11;
$kdo="Konec směny";
$celkovypoceth=0;
   $sql5 = "SELECT poceth,zacateksmeny FROM $zamestnanec1 WHERE datum='$date' AND id='-10' ";
      $sql6 = "SELECT poceth,zacateksmeny FROM $zamestnanec2 WHERE datum='$date' AND id='-10' ";
         $result = mysqli_query($mysqli1, $sql5);
           $result1 = mysqli_query($mysqli1, $sql6);
           
  while($row = mysqli_fetch_assoc($result)) {
     
         $zacateksmeny = $row['zacateksmeny'];
        $timestamp = strtotime($zacateksmeny);

  $timestamp2 = strtotime($konec);
  
  
                $rozdilh = date('H',$timestamp);
                       $rozdilm = date('i',$timestamp);
   
                   
                              $minutky= ($rozdilm/60);
               $vysledek= $rozdilh+$minutky  ;
               
               
        
         
                      $rozdilh1 = date('H',$timestamp2);
                      $rozdilm1 = date('i',$timestamp2);
   
                   
                              $minutky1= ($rozdilm1/60);
               $vysledek1= $rozdilh1+$minutky1 ;
                           $rozdil=$vysledek1-$vysledek;    
  $rozdil6=round($rozdil, 2);
}
 while($row2 = mysqli_fetch_assoc($result1)) {
        
          $zacateksmeny = $row['zacateksmeny'];
        $timestamp = strtotime($zacateksmeny);

  $timestamp2 = strtotime($konec);
  
  
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

}



  
$sql_statement="INSERT INTO $zamestnanec1 (id,zakazka,datum,konecsmeny,celkovypoch) VALUES ('$id','$kdo','$date','$konec','$rozdil6')";
$sql_statement1="INSERT INTO $zamestnanec2 (id,zakazka,datum,konecsmeny,celkovypoch) VALUES ('$id','$kdo','$date','$konec','$rozdil5')";
mysqli_query( $mysqli1,$sql_statement);
mysqli_query( $mysqli1,$sql_statement1);


      
?>	
                    <script>window.location.href="http://adcistepotrubi.cz/zacatekkonecvs.php";</script>