<?php
session_start();

require_once "connect.php";

$username=$password="";
$username_error=$password_error="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty(trim($_POST["username"])))
    {
        $username_error="Please enter a username";
    }
    else
    {
        $username=trim($_POST["username"]);
    }
     if(empty(trim($_POST["password"])))
    {
        $password_error="Please enter a password";
    }
    else
    {
        $password=trim($_POST["password"]);
    }
    if(empty($username_error) && empty($password_error))
    {
        $sql="SELECT id , username , password FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql))
        {
             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = $username;
            
            
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
            
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            header ("location: homepage.php");
                        }
                        else
                        {
                            //displaying error message
                            $password_error= "Password entered is not valid.";
                        }
                    }
                    else
                    {
                        $username_error="Username entered does not have an account.";
                    }
                }
                else
                {
                    echo "Something went wrong. Try again later.";
                }
        }   
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>New Site</title>
<style>
    body
{
	background-color:lightgray;
	margin: 0;
	margin-top: 50px;
}
header
{
	font-family:"Sans Serif","Times New Roman";
	font-size:40px;
	color:RGB(60,60,60);	
	display:flex;
	position:fixed;
	align-items:center;
	text-align:center;
	top:0;
	left:0;
	right:0;
	height:100px;
	line-height:100px;
	background-color:powderblue;
	border-style:outset;
	border-color:teal;
}
h1
{
	margin: 5px 480px 5px;
}
input[type=text], input[type=password] 
{
	 
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  box-sizing: border-box;
}
button 
{
  	background-color: #4CAF50;
  	color: white;
  	padding: 14px 20px;
  	margin: 8px 0;
  	border: none;
  	cursor: pointer;
}
button:hover 
{
 	 opacity: 0.8;
}
label
{
	font-size:15px;
}
form
{
	font-family:"Sans Serif","Times New Roman";
	font-size:25px;
	line-height:1.8;
	margin-top:200px;
	justify-content: center;
	align-items:center;
	text-align:center;
}

	
</style>
</head>
<body>

<header>
<h1><b>SHIKSHA</b></h1>           
</header>

<main>
<section id="login">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Login:<br>
Username:<br>
<input type="text" name="username"  placeholder="Enter Username" class="form-control" required><br>
<span class="error"><?php echo $username_error; ?></span><br>
Password:<br>
<input type="password" name="password"  placeholder="Enter Password" required><br>
<span class="error"><?php echo $password_error; ?></span><br>
<button type="submit">Login</button><br>
<label>
<input type="checkbox" checked="checked" name="remember"> Remember me
</label>
<p>Don't have an account? <a href='Register.php'>Sign up now!</a></p>
</form>                
</section> 
</body>
</html>





