<?

session_unset();
session_destroy();
ob_start();
header("location:index_forpsi.php");
ob_end_flush(); 


exit();
?>