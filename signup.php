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
        $query = "insert into users (user_id,user_name,password,email,images) values ('$user_id','$user_name','$password','$email','$images')";

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
    background: url('bosque oscuro login.jpg');
   
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 92%;
    height: 640px;
    background: url('images.jpg') no-repeat;
    backdrop-filter: blur(15px);
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    margin-top: 20px;
    animation: animateBg 5s linear infinite;
}

.content .logo{
    font-size: 70px;
}
.content h2{
    font-size: 40px;
}
.content h2 span{
    font-size: 25px;
}
.text-sci p{
    font-size: 16px;
    margin: 20px;
}
.social-icons a i{
    font-size: 22px;
    color: #e4e4e4;
    padding: 0 2px 0 20px;
    transition: .5s ease;
}
.social-icons a:hover i{
    transform: scale(1.2);
}
.container .logreg-box{
    
    
  
    
}
@keyframes animatedBg {
    100%{
        filter: hue-rotate(360deg);
    }
}
.login-box{
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
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
a{
    color:#fff;
}
    .input-box{
    position: relative;
    width: 310px;
    margin: 30px 0;
    border-bottom: 2px solid #fff;

}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}
.input-box input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    line-height: 57px;
}
.remember-forgot{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input {
    margin-right: 3px;
}
.remember-forgot a{
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
.button input{
    width: 100%;
    height: 40px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #000000;
    font-weight: 500;
}
.button a{
    color: #fff;
}
.register-link{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
@media (max-width: 360px){
    .login-box{
        width: 100%;
        height: 100vh;
        border: none;
        border-radius: 0;
    }
    .input-box{
        width: 290px;
    }
}


    </style>
 <div class="container">
    <div class="login-box">
        <form method="post">
            <h2>Sign up!</h2>
            <div class="input-box"> 
            <input type="text" required id="name" name="user_name">
            <label>username</label>
            </div>
            <div class="input-box"> 
            <input type="email" required id="email" name="email">
            <label>email</label>
            </div>
            <div class="input-box">
            <input type="password" required id="password" name="password">
            <label>password</label>
            </div>
            <div class="button">
            <div>
                <input type="file" class="box" accept="image/jpg, image/jpeg, image/png">
            </div>
            <input type="submit" value="Sign up!">
            </div>
            <div class="register-link">
            <a href="login.php">Login!</a>
            </div>
          </form>

       </div>
 </div>
   
</body>
</html>