<?php
require 'Includes/connector.php';
//mysqli_query($qpcon,'UPDATE '.$_SESSION['testname'].' SET response='.$_GET['answer'].' WHERE id='.$_SESSION['qno']);
$_SESSION['qno']-=1;
if($_SESSION['qno']<=0)
    $_SESSION['qno']=$_SESSION['max_rows'];
header("location:exam.php");
?>