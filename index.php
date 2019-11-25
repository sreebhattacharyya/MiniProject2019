<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'Includes/connector.php';
$available=mysqli_query($qpcon,"SELECT name FROM reg_qpaper") or die("reg command didnt work");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php require 'Includes/bsplugin.php';?>
              
        <title>Qbank2</title>
    </head>
    <body>
        <?php
        include 'Includes/header.php';
        ?>
        <form action="starttest.php" method="get">
            <input name="testname2" id="tname" type="text" value="Name of Test"/>
            <select name="testname">
                <?php for($i= mysqli_num_rows($available);$i>0;$i--)
                {
                    echo '<option>'.mysqli_fetch_assoc($available)['name'].'</option>';
                }?>
            </select>
            <input type="submit" value="Start Test"/><br>
            <br>
            <a href="qpapernew.html">Click here</a> to create new question paper!
        </form>
    </body>
</html>
