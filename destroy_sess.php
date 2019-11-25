<?php
require'Includes/connector.php';
mysqli_query($qpcon,"UPDATE ".$_SESSION['testname'].' SET response=NULL')or die("delete respone didnt work");
session_destroy();
header("location:index.php");
?>
