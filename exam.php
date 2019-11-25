<!DOCTYPE html>
<?php require'Includes/connector.php';
if(!isset($_SESSION['testname']))
{
    header("location=index.php");
}
if(!isset($_SESSION['qno']))
{
    $_SESSION['qno']=1;
}


$qno=$_SESSION['qno'];
$query1='SELECT qref,response FROM '.$_SESSION['testname'].' WHERE id='.$qno;
$query1res=mysqli_query($qpcon,$query1) or die("sql query didnt work");
$a=mysqli_fetch_assoc($query1res);
$qref= $a['qref'];
$response=$a['response'];
$query2='SELECT content,options FROM qstn WHERE id='.$qref;
$query2result=mysqli_query($con,$query2) or die("sql query2 didnt work");
$arr=mysqli_fetch_assoc($query2result);
$qfile= $arr['content'];
$options=(int)$arr['options'];
//$question=readfile($qfile);
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
                <div class="col-lg-9">
                    <?php
                    echo 'Q.no.'.$qno."<br/>";
                    readfile($qfile);
                    //echo "question no:".$qno."\nqref".$qref."\ntestname=".$_SESSION['testname'];
                    ?>
                </div >
                <div class="col-lg-3">
                    interaction buttons should appear here
                    <form action="exam.php" method="get">
                        <?php
                        for($i=1;$i<=$options;$i++)
                        {
                            if($response==$i)
                                echo '<input type="radio" name="answer" value='.$i.' checked>Option '.$i.'<br/>';
                            else
                                echo '<input type="radio" name="answer" value='.$i.' >Option '.$i.'<br/>';
                        }
                        ?>
                        <input type="submit" value="Save and Next" formaction="saveQ.php">
                        <input type="submit" value="nextQ" formaction="nextQ.php">
                        <input type="submit" value="prevQ" formaction="prevQ.php">
                        <input type="submit" value="Submit" formaction="submit.php">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

