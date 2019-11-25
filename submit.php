<!DOCTYPE html>
<?php require'Includes/connector.php';
if(!isset($_SESSION['testname']))
{
    header("location=index.php");
}
$correct=0;
for($qno=1;$qno<=$_SESSION['max_rows'];$qno++)
{
    $query1='SELECT qref,response FROM '.$_SESSION['testname'].' WHERE id='.$qno;
    $query1res=mysqli_query($qpcon,$query1) or die("sql query didnt work");
    $a=mysqli_fetch_assoc($query1res);
    $qref= $a['qref'];
    $response=$a['response'];
    $query2='SELECT correct_option FROM qstn WHERE id='.$qref;
    $query2result=mysqli_query($con,$query2) or die("sql query2 didnt work");
    $arr=mysqli_fetch_assoc($query2result); 
    if($arr['correct_option']==$response)
        $correct++;
    
}
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
                <div class="col-lg-4">
                    <ul>
                        <li>Total no of questions=<?php echo $_SESSION['max_rows'];?></li>
                        <li>Correct answers=<?php echo $correct?></li>
                    </ul> 
                </div>
                <div class="col-lg-4">
                    <button><a href="destroy_sess.php">Return To Index Page</a></button>
                </div>
            </div>
            
        </div>
    </body>
</html>

