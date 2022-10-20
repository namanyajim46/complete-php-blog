<!DOCTYPE html>
<html lang="en">
<head>
<link href="reg.php">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-position: 800px;
    width: 100%;
    background-position: 50%;
    background-size: cover;
}
        /*styling the admin section*/
        form{
            float: middle;
        }
.admin{
    height: 550px;
    width: 550px;
    float: center;
    padding-right: 100%;
    text-align: right;
    color: purple;
}
.text-box{
    padding: 10px 15px;
    position: fixed;
    padding-right: 100%;
}
input[type=text], input[type=password]{
    width: 280px;
    padding: 10px 15px;
    margin: o 5px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button{
    background-color: red;
    color: wheat;
    padding: 20px;
    margin: 6px 0;
    border: none;
    cursor: pointer;
    width: 100px;
    float:right;
}
button:hover{
    opacity: 0.8;
}
.container{
    text-align: center;
    margin: 24px 0 12px 0;
    float: inline-end;
    text-align: right;
}
label[for="uname"],label[for="pws"],label[for="cpws"],label[for="email"],label[for="fname"],label[for="lname"] {
    float: right;
    font-size: 25px;
    padding: 8px 7px;
    display: block;
    margin: 0;
    position:absolute;
}
/*styling the footer*/
.footer{
    position: fixed;
    background-color: silver;
    overflow: hidden;
    width: 100%;
    margin: 0%;
}
.footer p{
    float: left;
    padding: 8px 9px;
}
    </style>
</head>
<body background="pic/3.jpg">
<div class="admin">
<h1>
<em>Register here to start bloging</em>
</h1>
<form action="process.php" method="post">
<div class="container">
<label for="fname">Firstname</label><br>
 <input type="text" placeholder="" name="fname"required><br>
<label for="lname">Lastname</label><br>
<input type="text" placeholder="" name="lname"required><br>
<label for="email">Email</label><br>
<input type="text" placeholder="" name="email"required><br>
<label for="uname">Username</label><br>
<input type="text" placeholder="" name="uname"required><br>
<label for="pws">Password</label><br>
<input type="password" placeholder=""name="pws"required><br>
<label for="cpws">Comfirm password</label><br>
<input type="password" placeholder=""name="cpws"required><br>
<button type="submit" name="save" value="submit">Register</button><br>
</div>
</div>
</form> 
<div class="footer">
    <p><img src="pic/gmail.jpg" width="20px"; height="20px";/><em><b>aspentechnologies@gmail.com</b></em></p>
    <p><img src="pic/twitter.png" width="20px"; height="20px";/><em><b>@aspentechnologies</b></em></p>
    <p><img src="pic/watsap.png" width="20px"; height="20px";/><em><b>+256751109725</b></em></p>
</div> 
</body>
</html>