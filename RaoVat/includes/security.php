<?php 
session_start();

include 'database/dbconfig.php';

if ($dbconfig) {
	# code...
	//echo "Database Connected";

} else {
	# code...
	header('Location: database/dbconfig.php');
}
 ?>

