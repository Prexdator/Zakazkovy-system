 <?php
   include('session.php');  
          $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');

if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 


          $time5 =date('Y-m-j', strtotime($Date. ' - 1 day')); 
         $datum55 = date("Y-m-j", Time());
          $res="Residomo";
          $h="Hotovo"; 
        $n="Nenaplanovano";
  $r="Rozpracovano";
  $ne="Neudelano";    
          
            $sql2 = "SELECT id FROM zakazky WHERE stav = '$n' OR stav = '$r' OR stav = '$ne' ";
         $result2 = mysqli_query($mysqli, $sql2);
       $j=0;
 while($row = mysqli_fetch_assoc($result2)) {
            
   $j=$j+1;
	
    }
            
              
  
 
 ?>
<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="utf-8">
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Monitoring a čištění potrubí s.r.o.</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout1.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="logo.png" class="img-box" width="80"></a></p>
          <h5 class="centered">     <?php
                  
                            IF($_SESSION['login_user']=="Tony")
{
echo "Antonin Brinzik";
}
IF($_SESSION['login_user']=="Ivanka")
{
echo "Ivana Skutova";
}
IF($_SESSION['login_user']=="Martin")
{
echo "Martin Prochazka";
} 
                ?></h5>
          <li class="mt">
            <a class="active" href="administrace.php">
              <i class="fa fa-dashboard"></i>
              <span>Informace</span>
              </a>
              </a>
            <ul class="sub">
           
            </ul>
          </li>      
          <li class="mt">
          <a class="mt" href="vkladzakazky.php">
              <i class="fa fa-book"></i>
              <span>Zakázky</span>
              </a>
            <ul class="sub">
           <li><a href="vkladzakazky.php">Nová zakázka</a></li> 
             <li><a href="edit.php">Editace zakázky</a></li> 
      <li><a href="filtrzakazek.php">Zobrazení zakázek</a></li> 
            </ul>
          </li>         
   
               
          <li class="sub-menu">
            <a href="ziskovost.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Ziskovosti</span>
              </a>
            <ul class="sub">
           
            </ul>
          </li>   
          <li class="sub-menu">
            <a href="filtr.php">
              <i class="fa fa-th"></i>
              <span>Dochazka</span>
              </a>
            <ul class="sub">
           
            </ul>
          </li>
                          
          <li class="sub-menu">
            <a href="rozvrh.php">   
               <i class="fa fa-envelope"></i>
              <span>Plánování zakázek </span>
              
               <span class="label label-theme pull-right mail-info"><?php echo $j; ?></span>
                   </a>
               <ul class="sub">
              <li><a href="rozvrh.php">Naplánování</a></li>
                     
              <li><a href="zrusit.php">Zrušení naplánování</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Finance</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Vložení účtů</a></li>
              <li><a href="chartjs.html">Zobrazení výdajů</a></li>
            </ul>
          </li>
      <li>
            <table width="100%" border="2">
  <td>
 Residomo dnes hotové
</table>
<table width="100%" border="2">

<td>ID</td>
<td>ES</td>
  
<tr>       
           <?php
           
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

         

 }  echo '</table>';       ?>
          </li>     
          
          
          
          
          
          
    
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
    
              <section class="wrapper">
            
    



   <?php
        echo '          <CENTER>  <table width="80%" border="2">
   <h2> Residomo končí termín!   </h2>        </center>
    <CENTER> <div style="float:left; width: 80%; ">
     <td>ID</td><td>Zakázka</td><td>Číslo ob.</td><td>Kontakt</td><td>Adresa</td><td>Datum do</td>
           <tr>
           ';
           
                   
          
                $timee =date('Y-m-j', strtotime($Date. ' + 0 day'));
          $time =date('Y-m-j', strtotime($Date. ' + 1 day'));
          $time2 =date('Y-m-j', strtotime($Date. ' + 2 day'));
          $zaporhot = "Residomo";
          $na = "Hotovo";
          
            $roz = "Rozpracovano";
  $sql2 = "SELECT * FROM zakazky WHERE kdo = '$zaporhot' AND datdo = '$time' OR datdo = '$time2' OR datdo = '$timee'  ";
  
         $result2 = mysqli_query($mysqli, $sql2);

 while($row = mysqli_fetch_assoc($result2)) {
$id = $row['id'];
$kdo = $row['kdo'];
$st = $row['stav'];
  $mesto = $row['mesto'];
           $ulice = $row['ulice'];
$kontakt = $row['telkontakt'];
$popis = $row['popis'];
$co = $row['co'];
$datdo = $row['datdo'];

         if ($st!="Hotovo")
         
             {


   echo("<td>");  echo '<input type="text" size="5%" value="'.$id.'" readonly>';echo("</td>");
   
   echo("<td>");
echo '<input type="TEXT" size="10%" value="'.$kdo.'" readonly>';
echo("</td>");
    echo("<td>");
    echo '<input type="TEXT" size="10%" value="'.$co.'" readonly>';
    echo("</td>");


    
   echo("<td>"); echo '<input type="TEXT"  size="10%" value="'.$kontakt.'" readonly>';echo("</td>");
    echo("<td>");echo '<input type="TEXT" size ="20%" value="'.$mesto.' '.$ulice.'" readonly>';echo("</td>");


echo("<td>");echo '<input type="TEXT" size="10%" value="'.$datdo.'" alight="right" readonly>';echo("</td>");


   echo("<tr>");
   
 }   } 
           echo'
   
            </center>
<table width="100%" border="0">
';
    

               
              echo'  </tr></td>  </table> ';        
    echo'<br> <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23cccccc&amp;ctz=Europe%2FLondon&amp;src=Y2lzdGVwb3RydWJpLm1vbml0b3JpbmdAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y2xhc3Nyb29tMTAyOTQ0Mjg5ODcwMzEwOTk4OTQ4QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y3MuY3plY2gjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23616161&amp;color=%2333B679&amp;color=%237CB342&amp;color=%230B8043&amp;showTz=0&amp;showCalendars=0&amp;showTabs=1&amp;showPrint=0&amp;showTitle=0" style="border:solid 1px #777" width="80%" height="600" frameborder="0" scrolling="no"></iframe> ';
    
                            ?>
 

                  
  
  
    </section>
    <!--main content end-->
    <!--footer start-->
   
  
   


</body>

</html>
                                     