<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>eoo!后台管理系统</title>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/login.js"></script>

<link rel="stylesheet" type="text/css" href="css/login.css"/>

<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="css/ie.css"/>
<![endif]-->

</head>

<body>

<div id="header">
    <h1>eoo! Background log system</h1>
  
    <div id="login"> 
        <a href="#" id="link" class="signin">Sign In</a> 
        <form class="drop" id="loginform" name="loginform" method="post" action="logincheck.php">
            <label for="name">Username or email:</label>
            <input type="text" name="username" type="text" id="username" />
            <label for="password">Password:</label>
            <input type="password"  name="userpass" type="password" id="userpass" />
            <p class="remember"><input type="checkbox" class="checkbox"/>Remember Me</p>
            <input type="submit" class="submit"  name="submit" id='submit' onclick="" value="Sign In" />
            <p><span>如果您不是管理员,请退出此页面.thx</span></p>
        </form>
    </div> 
</div>

</body>
</html>
