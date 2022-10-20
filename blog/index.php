<?php
$con = mysqli_connect("localhost","root","","prince");
if(!$con){
    echo "Failed to log in";
} else{
echo "You have Successfully logged in";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="reg.php">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete-Blog-php</title>
</head>
<style>
    .head{
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 10px;
    text-decoration: wavy;
    font-size: 40px;
    }
    .head:hover{
        color: green;
        background-position: sapi_windows_cp_conv;
    }
.menu{
    overflow: hidden;
    padding: 23px 30px;
}
.menu a{
    color: black;
    background-color: maroon;
    text-decoration: none;
    float: left;
    padding: 25px 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: right;
    font-weight: bold;
font-size: 25px;
display: block;
}
.menu a:hover{
    color: rebeccapurple;
    background-color: whitesmoke;
}
.menu-right{
    float: right;
}
@media screen  and(max-width:500px){
    .menu a{
        float: none;
        display: block;
        text-align: left;

    }
    .menu-right{
        float: none;
    }
}
/* styling the admin form*/
.admin{
    overflow: hidden;
    padding: 10px 20px;
    background-color: pink;
    box-sizing: content-box;
    border-radius: 5px;
}
.admin.login{
float: left;
}
/*styling the public part*/
.user{
    height: 500px;
    width: 550px;
    background-color: #04AA6D;
    float: right;
    font-size: 20px;
    color: blue;
    font-style: oblique;
    font-weight: 100;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
/*styling the user links*/
.user a{
    color: black;
}
/*styling the admin section*/
.admin{
    height: 480px;
    width: 550px;
    background-color: grey;
    float: left;
}
body{
    background-position: 800px;
    width: 100%;
    background-position: 50%;
    background-size: cover;
}
/* styling the login form */
form{
    border: 3px solid #f1f1f1;
}
input[type=text], input[type=password]{
    width: 280px;
    padding: 10px 15px;
    margin: 5px o;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button{
    background-color: #04AA6D;
    color: wheat;
    padding: 14px 20px;
    margin: 6px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}
button:hover{
    opacity: 0.8;
}
.container{
    text-align: center;
    margin: 24px 0 12px 0;
}
label[for="uname"],label[for="pws"]{
    float: left;
    font-size: 25px;
    padding: 8px 7px;
    display: block;
}
/* styling the footer*/
.footer{
    position: fixed;
    bottom: 0;
    background-color: silver;
    overflow: hidden;
    width: 100%;
}
.footer p{
    float: left;
    padding: 8px 9px;
}
</style>
<body background="pic/1.jpg">
    <!--Menu bar-->
    <div class="menu">
        <h1 class="head">The Podium</h1>
  <a href="#default" class="home">Home</a>
  <div class="menu-right">
     <a href="#contact">Recent posts</a>
    <a href="#about">Articles</a>
  </div>
</div>
<div>
</div>
<!--the admin section-->
<div class="admin">
<h1>
    Admins
</h1>
<p>This area is restricted to only admins</p>
<form action="login.php" method="post">
<div class="container">
<label for="uname">Username</label><br>
<input type="text" placeholder="" name="uname"required><br>
<label for="pws">Password</label><br>
<input type="password" placeholder=""name="pws"required><br>
<button type="submit" name="save" value="submit">Login</button><br>
<a href="localhost/blog/reg.php" class="register">
Click here to Register
</a>
<label>
    <input type="checkbox" checked="checked"name="remember me">Remember me
</label>
</div>
</div>
</form>
<!--the public section-->
<div class="user">
<?php
echo "<p>Hello world! post & view other people's posts in the day</p>"
?>
<img src="pic/10.jpg" width="200px"; height="200px";/> Share interesting stories and catching moments in the day. How was the weather today?, is it news or an advertisement; the Podium gives you that chance of connecting world wide with other people.
<a href="reg.php"><p>To join our platform <a target="_blank" href="localhost/blog/reg.php">Register here</a></p></a>
<p>Incase you have an account <a href="#login">Login here</a></p>
</div>
<!--creating a footer-->
<div class="footer">
    <p><img src="pic/gmail.jpg" width="20px"; height="20px";/><em><b>aspentechnologies@gmail.com</b></em></p>
    <p><img src="pic/twitter.png" width="20px"; height="20px";/><em><b>@aspentechnologies</b></em></p>
    <p><img src="pic/watsap.png" width="20px"; height="20px";/><em><b>+256751109725</b></em></p>
</div>
</body>
</html>