<?php
session_start();
   include("connection.php");
   include("functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;

    }else
    {
        echo "Please enter some valid information!";
    }
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sing up!</title>
</head>
<body>
    <style>
@import url("https:fonts.googleapis.com/css2?family=Poppins");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: url('C:/Users/tinch/Downloads/l/images.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}


#box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}




    </style>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin:10px">Sing up!</div>
            <input type="text" name="user_name">
            <input type="password" name="password">
            <input type="submit" value="Sing Up!">
            <a href="login.php">Login</a>
        </form>

    </div>
   
</body>
</html>