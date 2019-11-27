<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        require_once 'connect.php';
        

 

        $uname = $pw = $confirm_pw = "";
        $uname_err = $pw_err = $confirm_pw_err = "";


        if($_SERVER["REQUEST_METHOD"] == "POST"){


            if(empty(trim($_POST["username"]))){
                $uname_err = "Please enter a username.";
            } else{

                $sql = "SELECT id FROM users WHERE username = ?";

                if($stmt = mysqli_prepare($link, $sql)){

                    mysqli_stmt_bind_param($stmt, "s", $param_username);


                    $param_username = trim($_POST["username"]);


                    if(mysqli_stmt_execute($stmt)){

                        mysqli_stmt_store_result($stmt);

                        if(mysqli_stmt_num_rows($stmt) == 1){
                            $uname_err = "This username is already taken.";
                        } else{
                            $uname = trim($_POST["username"]);
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                }


                mysqli_stmt_close($stmt);
            }


            if(empty(trim($_POST["password"]))){
                $pw_err = "Please enter a password.";     
            } elseif(strlen(trim($_POST["password"])) < 6){
                $pw_err = "Password must have atleast 6 characters.";
            } else{
                $pw = trim($_POST["password"]);
            }

               if(empty(trim($_POST["confirm_password"]))){
                $confirm_pw_err = "Please confirm password.";     
                }
                else{
                $confirm_pw = trim($_POST["confirm_password"]);
                if(empty($pw_err) && ($pw != $confirm_pw)){
                    $confirm_pw_err = "Password did not match.";
                }
            }


            if(empty($uname_err) && empty($pw_err) && empty($confirm_pw_err)){


                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

                if($stmt = mysqli_prepare($link, $sql)){
                    
                    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                    $param_username = $uname;
                    $param_password = password_hash($pw, PASSWORD_DEFAULT); 

                    if(mysqli_stmt_execute($stmt)){

                        header("location: login.php");
                    } else{
                        echo "Something went wrong. Please try again later.";
                    }
                }
                mysqli_stmt_close($stmt);
            }

            mysqli_close($link);
        }
    ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        
        body{ font: 14px sans-serif; }
        h2 {background-color:powderblue; color: grey;}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up to <b>SHIKSHA</b></h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($uname_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $uname; ?>">
                <span class="help-block"><?php echo $uname_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($pw_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $pw; ?>">
                <span class="help-block"><?php echo $pw_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_pw_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_pw; ?>">
                <span class="help-block"><?php echo $confirm_pw_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>


        
       
 