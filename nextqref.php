<?php

session_start();
            $con=mysqli_connect('localhost','root','','qpapers');
            if(!$con)
                die("Connection not established.");
            $qrefval=$_POST['qref'];
            $qpname=$_SESSION['qpname'];
            echo $qpname;
            $sql = "INSERT INTO $qpname (id, qref, response)"
                    . "VALUES (NULL,'$qrefval',NULL)";
            if(mysqli_query($con,$sql))
            {
               header("Location: addqref.html");
            }
            else
                echo mysqli_error($con);
            ?>
