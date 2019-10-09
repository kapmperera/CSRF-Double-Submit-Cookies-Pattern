<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="1login.css">
	
    <title>log in</title>
	
</head>
<body>

    <h1>< ... Double Submit Cookies Pattern ... ></h1>
    <div class ="loginbox1">
		<img src="pic1.png" class = "pic1">
		
             <!--login form--> 	
			<form action="home.php" method="post" class="login">
            <h2>Log in</h2><br>
			
            <label class="lab">Username : </label><br>
            <input type="text" name="username" id="user" placeholder="Enter Username" required> <br>
			
            <label for="">Password :</label><br>
            <input type="password" name="password" id="pass" placeholder="Enter Password"pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and
1 number." required    placeholder ="Enter Password" id="password" ><br>

            <input type="submit" value="Login" class="logb"><br>
        </form>

    </div>
</body>
</html>