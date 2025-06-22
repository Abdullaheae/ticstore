<!DOCTYPE html>
<html lang="en">
<head>
<title>TicStore</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon"href="pjimg/logo.icon">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/main.css">
</head>



 <body style=" margin:0;padding:0;font-family: sans-serif;background: linear-gradient(#141e30, #243b55);background-color: #141e30;">



  <div class="login-box">
    <h2>LOGIN</h2>
    <form action="auth.php" method="post">
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <button type="submit" name="submit" style="margin-left: 30%;">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        LOGIN
      </button>
      <a id="sina"style="color: aliceblue;" href="signup.php">Don't have an account? Create one</a>

    </form>
  </div>








  <!--background-image: url(pjimg/1.jpeg); background-attachment: fixed;background-size: cover;-->

<!--
<div class="wrapper">
  <form class="form-signin"method="post" >   
    <div>    
    <h1 style="color: aliceblue;"> Login here</h1>
    <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
    <br>
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
  </div>
  <br>
    <button   class="button" type="submit" onclick="document.location='main.html'" ><b>Login</b></button> 
    <br><br>
    <a style="color: aliceblue;" href="signup.html">Don't have an account? Create one</a>
  </form>
</div>-->




</body>
</html>
