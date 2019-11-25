<?php
session_start();
            $con=mysqli_connect('localhost','root','','qpapers');
            if(!$con)
                die("Connection not established.");
           
            $qname=$aname="";
            $qname=$_POST['qpname'];
            $aname=$_POST['auth_name'];
            
            $sql = "INSERT INTO reg_qpaper (id, name, auth)
                VALUES (NULL, '$qname', '$aname')";
            if(!mysqli_query($con,$sql))
                    echo mysqli_error($con);
            
            $sql2="CREATE TABLE ".$qname." (id INT AUTO_INCREMENT PRIMARY KEY, 
                qref INT, response INT)";
            if(mysqli_query($con,$sql2))
            {
                    $_SESSION['qpname']=$qname;
                    echo $_SESSION['qpname'];
                    header("Location: addqref.html");
            }
            else 
                echo mysqli_error($con);
            
           
            
?>
        
 




