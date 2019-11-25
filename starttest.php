<!DOCTYPE html>

<?php
require 'Includes/connector.php';
$_SESSION['testname']=$_GET['testname'];
$_SESSION['max_rows']=mysqli_num_rows(mysqli_query($qpcon,"SELECT * FROM ".$_SESSION['testname']));
?>

<html>
    <head>
        <title>  
            <?php echo $_SESSION['testname'];?>
        </title>
        <?php        require 'Includes/bsplugin.php';?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                This is a dummy test named <?php echo $_SESSION['testname'];?>
                <form action="exam.php">
                
                    <input type="submit" value="Start Test"/>
                </form>
            </div>
            
        </div>
    </body>
</html>

