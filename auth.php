<?php
require_once("connect.php");

$username = $_POST["username"];
$password = $_POST["password"];

$path = explode('/' , $_SERVER['REQUEST_URI'])[2];

if($path == "login.php"){
    if(isset($_POST["submit"])){
        $sql = "select id,password from users where username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if(md5($password) == $row["password"]){
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["id"] = $row["id"];
                header("location: index.php");
            }else{
                echo"invalid  password";
            }
        }else{
            echo"invalid username";
        }
    }
}else{
    $email = $_POST["email"];
    $sql = "select email from users where email = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo"this email is already exist";
    }else{
        $sql = "select username from users where username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0){
            $en_password = md5($password);
            $sql = "insert into users(username,email,password)values('$username','$email','$en_password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("location: login.php");
            }else{
                echo "error";
            }
        }else{
            echo"this username is already exist";
        }
    }
}
mysqli_close($conn);