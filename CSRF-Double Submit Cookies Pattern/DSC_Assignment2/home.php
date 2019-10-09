<?php

//checking the login and create session cookies
if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'Ws2019'){
		//echo '<h3>Successfully logged in</h3>';

		session_start();
        $_SESSION['token'] = md5(uniqid(rand(), TRUE));
		$session_id = session_id();
		
		//create cookies
		setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
		setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');
	}
	else{
		echo 'Invalid Credentials !!!!';
		exit();
	}
}
else{
	header('Location:./login.php');  //redirect to login page
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Home</title>
<link rel="stylesheet" type="text/css" href="2home.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	//ajax call	
	$(document).ready(function(){
	
	var cookie_value = "";
    var dCookie = decodeURIComponent(document.cookie); //get CSRF token from cookie
	var csrfC = dCookie.split(';')[2]
	if(csrfC.split('=')[0] = "csrfTokenCookie" ){
		cookie_value = csrfC.split('csrfTokenCookie=')[1];
		document.getElementById("token_value").setAttribute('value', cookie_value) ; //add CSRF token to hidden fields
	}
	});

</script>

</head>

<body>>
   
   <!--form to send a message and CSRF token-->
   
    <div class ="msg">Successfully Logged in !!!</div>
		<div class ="mbox1">
		
			<h2>Make your Responce</h2>
            <form class="form" action="result.php" method="post" name="update_form">
          
					<label>Your Messege:</label><br>
                    <input type="text" id="msg"  name="msg" placeholder="Please type your Message" ><br><br>
           		
					<input type="hidden" name="token" value="" id="token_value"/>
					        
                    <input type="submit" name="Submit"  value="Send"> 
					
			</form>
                   
                
		</div>

</body>

</html>