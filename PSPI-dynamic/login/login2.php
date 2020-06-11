<!DOCTYPE html>
<html>
<head>
	<title>Log in </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="new.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
</head>
<body>
	<div id="right-box">
		<form id="login" action="login.php" method="POST">
			<img src="../signup/logoblack.png">
			<h2>LogIn to continue</h2>
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<?php
                
                if(isset($_GET['fail'])){
                    $fail = $_GET['fail'];
                }else{
                    $fail = '';
                }
				if($fail == 'fail'){
					echo "<p id='fail'>Wrong Email or Password.</p>";
				}
			?>
			<input type="submit" name="submit" value ="LOGIN">
			<div id="signup">
				<p>or sign up <a href="../signup/signup.php">here</a></p>	
			</div>
		</form>
	</div>
	<div id="left-box">
		<div class="home ">
			<a href="logout.php" class="icon-center"><svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 00.5.5h9a.5.5 0 00.5-.5V7h1v6.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5zm11-11V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
				<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
			  </svg></a>
		</div>
	</div>
</body>
</html>