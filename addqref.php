<?php

$link = mysqli_connect('localhost','root','','qbank');

$availableq=mysqli_query($link,"SELECT id FROM qstn") or die("Selecting question id didn't work");

?>

<html>
    <head>
        <title>
            Add Question Reference
        </title>
    </head>
    <body>
        <?php
        include 'Includes/header.php';
        ?>
        <form action="submitqref.php" method="POST">
            Please enter question reference number:<br><br>
           
            <select name="qref">
                 <?php for($i= mysqli_num_rows($availableq);$i>0;$i--)
                {
                    echo '<option>'.mysqli_fetch_assoc($availableq)['id'].'</option>';
                }?>
            </select>
            <input type="submit" value="Next" formaction="nextqref.php">
            <input type="submit" value="Submit" formaction="submitqref.php">
        </form>
    </body>
</html>



