   <?php
session_start();
unset($_SESSION["login_session"]);
session_unset();
session_destroy();
ob_start();
header("location:index_forpsi.php");
ob_end_flush(); 
$url = "index_forpsi.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header("Location:$url");
?>