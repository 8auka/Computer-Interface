<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AC Catering | Sign in</title>
    <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />
</head>
<body>
    <div class="menu">
        <ul id = "left">
            <li><a href="main.html">Home</a></li>
            <li><a>About us</a></li>
            <li><a class ="menu-events">Menu</a></li>
            <li><a class ="menu-chef">Our Team</a></li>
            <li><a class ="menu-contact">Contact us</a></li>
        </ul>
    </div>
    <div id="login-form">
      <h1>Sign in</h1>
        <fieldset>
            <form action="javascript:void(0);" method="get">
                <input type="tel" required value="Login" onBlur="if(this.value=='')this.value='Login'" onFocus="if(this.value=='Login')this.value='' "> 
                <input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> 
                <input type="submit" value="Submit">
            </form>
        </fieldset>
    </div> 
</body>
</html>