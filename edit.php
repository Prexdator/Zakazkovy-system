 <?php
   include('session.php');  
   $mysqli = new mysqli('a026um.forpsi.com', 'f123770', 'EWNnJ75', 'f123770');

if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 
          
        $id2 = $_POST['id'];  
  $sql1 = "SELECT * FROM zakazky WHERE id = '$id2' ";
       $result1 = mysqli_query($mysqli, $sql1);

 while($row2 = mysqli_fetch_assoc($result1)) {
$id1 = $row2['id'];
$kdo1 = $row2['kdo'];
$kontakt = $row2['telkontakt'];
$mesto = $row2['mesto'];
$ulice = $row2['ulice'];
$popis1 = $row2['popis'];
$co1 = $row2['co'];
$datdo1 = $row2['datdo'];
  $poceth = $row2['poceth'];
$km = $row2['km'];
$cm = $row2['cm'];
$li = $row2['li'];
$cp = $row2['cp'];
$stav = $row2['stav'];
$auto = $row2['auto'];
$vydelano = $row2['vydelano'];
$az = $row2['az'];
$ziskovost = $row2['ziskovost'];
$prot=  $row2['prot'];
 }
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
                    <div class="desc">Antonín Brinzík -  protokol residomo</div>
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
            <a  class="mt"href="administrace.php">
              <i class="fa fa-dashboard"></i>
              <span>Informace</span>
              </a>
          
          </li>      
          <li class="mt">
          <a class="active" href="vkladzakazky.php">
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
          <li>
      <a href="rozvrh.php">
               <i class="fa fa-envelope"></i>
              <span>Plánování zakázek </span>
               <span class="label label-theme pull-right mail-info"><?php echo $j; ?></span>
              </a>
               <ul class="sub">
              <li><a href="rozvrh.php">Naplánování</a></li>
                      <span class="label label-theme pull-right mail-info">2</span>
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
                  <div>
    
                  <p>
                 
             <form action="edit.php" method="post">
                 <p>
<td>Zadej ID zakázky:<input type="number" name="id" value="<?php echo $id2; ?>" size="15px"><button>Informace/Editovat zakázku</button></a></td>
</form>
  
          
<center><h1>INFO/Editace zakázky</h1></center>

    

    
	 <form action="uedit.php" method="post">                          
           <td>      <table width="100%" border="0">   </td>      	<tr>
           <h2>Základní údaje</h2>
    <td>	Zákazník:   </td>
 <td>   <select name="kdo" size="1" >
    	  <option  value="<?php echo $kdo1; ?>"><?php echo $kdo1; ?> </option>
<option value="Residomo">Residomo
<option value="Firma">Firma
<option value="Fyzicka">Fyzická osoba
</select>      </td>     	<tr>
<td>ID:</td><td><input type="text"  name="id" size="20" value="<?php echo $id1; ?>" readonly>     </td>      	<tr>        	<tr>
<td>Č. ob.:</td><td><input type="text" name="co" size="20" value="<?php echo $co1; ?>">            </td>        	<tr>  	<tr>
<td>Dat. do:</td><td><input type="date" name="datdo" size="20" value="<?php echo $datdo1; ?>">     </td>       	<tr>  	<tr>
<td>Město:</td><td><input type="text" name="mesto" value="<?php echo $mesto; ?>" size="20">    </td> 	<tr>  	<tr>
<td>Ulice: </td><td><input type="text" name="ulice" value="<?php echo $ulice; ?>" size="20">    </td>                 	<tr>  	<tr>



<td>Kontakt:</td><td><input type="text" name="telkontakt" value="<?php echo $kontakt; ?>" size="20"></td>     	<tr>  	<tr>
	
<td>Popis:</td><td><input type="text" name="popis" value="<?php echo $popis1; ?>" size="80">      </td>
	                     
                                          <tr>
	                        
		  <td> <h2>Údaje o zakázce</h2>  	  </td>        	<tr>
	   
	   	                                  	<tr>  	<tr>
<td>Stav:</td><td><input type="text" name="stav" value="<?php echo $stav; ?>" size="20" ></td>    	<tr>      	<tr>
<td>Auto:</td><td><input type="text" name="auto" value="<?php echo $auto; ?>" size="20" ></td>    	<tr>  	<tr>
 <td>Práce:  </td> <td><select name="vz" size="1" >
 <option size="20" value="<?php echo $vz; ?>"><?php echo $vz; ?> </option>
<option value="Čištění a monitoring">Čištění a monitoring
<option value="Oprava">Oprava
</select>  </td>
                           <tr>  	<tr>
 
	  <td><h2>Ziskovost</h2>       </td>  	<tr>
	  
	     
	   	<tr>
<td>Tržba:</td><td><input type="number" name="vydelano" value="<?php echo $vydelano; ?>" size="20">KČ</td>
<tr>
<td>Hodin na zakázce:</td><td><input type="text" name="poceth" value="<?php echo $poceth; ?>" size="20">H</td><tr>
	<td>Čas přejezd:</td><td><input type="text" name="cp" value="<?php echo $cp; ?>" size="20">H</td><tr>
    <td>Protokol:</td><td><input type="text" name="prot" value="<?php echo $prot; ?>" size="20">H</td><tr>
	<td>Kilometrů:</td><td><input type="number" name="km" value="<?php echo $km; ?>" size="20">KM</td><tr><tr>
		<td>Cena za materiál:</td><td><input type="number" name="cm" value="<?php echo $cm; ?>" size="20">KČ</td><tr>
			<td>Likvidace:</td><td><input type="number" name="li" value="<?php echo $li; ?>" size="20">KČ</td><tr>
			    	<td>Absolutní zisk:</td><td><input type="number" name="az" value="<?php echo $az; ?>" size="20">Kč</td><tr>
			    	    	<td>Ziskovost:</td><td><input type="number" name="ziskovost" value="<?php echo $ziskovost; ?>" size="20">%</td>
	<tr>

	<CENTER><td><input type="submit" STYLE="color:red;" value="Uložit změny" size="91"></td></center>
                           <tr><tr>              <tr><tr>              
  </form>
  
    </section>     </table>    
              </div>    
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  
   


</body>

</html>              