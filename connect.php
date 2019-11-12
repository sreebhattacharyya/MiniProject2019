<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost","root","","login");
        if ($link==false)
        {
            die("ERROR: Could not connect.".mysqli_connect_error());
        } 
        
        ?>
    </body>
</html>
