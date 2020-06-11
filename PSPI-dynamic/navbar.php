<nav id="mainNav" class=" my-nav navbar  navbar-expand-md p-0 fixed-top ">
		<a href="../HomePage/home.php" class="navbar-brand ml-3 mb-1">
			<img  class="logo" src="logowhite.png" width="50px" height="50px">
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks">
			<span class="navbar-toggler-icon"></span><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="navLinks">
			<ul class="navbar-nav">
				<li class="nav-item pr-2">
					<a href="../HomePage/home.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item pr-2">
					<a href="../stakoulas/problems.php" class="nav-link">Problems</a>
				</li>
				<li class="nav-item pr-2 dropdown">
					<a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions
					</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="../actions/actions.php">Organizations</a>
			        	<div class="dropdown-divider"></div>
			        	<a class="dropdown-item" href="../actions2/individualactions.php">Individual Efforts</a>
					</div>
				</li>
				<li class="nav-item pr-2 dropdown">
					<div class="btn-group">
						<a href="../data/data.php" class="nav-link">Data</a>
						  <a type="button" class="nav-link dropdown-toggle dropdown-toggle-split drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="sr-only">Toggle Dropdown</span>
						  </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="../world/world.php">World</a>
						    <div class="dropdown-divider"></div>
						    <a class="dropdown-item" href="../info/info.php">Info</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!--PHP code!! If the user logs in then it should display a drop down -->
		<div class="collapse navbar-collapse justify-content-end" id="navLinks">
			<?php
				session_start();
				if(isset($_SESSION['UserName'])){
					$_SESSION['UserName'] = $_SESSION['UserName'];
                	$name = $_SESSION['UserName'];
				}
                

				if (empty($name)){
					echo  "<ul class='navbar-nav'>";
					echo  		"<li class='nav-item pr-2'>";
					echo			"<a href='../login/login2.php' class='nav-link'>Log in</a>";
					echo		"</li>";
					echo		"<li class='nav-item pr-2'>";
					echo			"<a href='../signup/signup.html' class='nav-link'>Sign up</a>";
					echo		"</li>";
					echo	"</ul>"	;
				}else{
					echo	"<ul class='navbar-nav'>";
					if($name == 'Master'){
						echo		"<li class='nav-item pr-2'>";
						echo			"<a href='../admin/users.php' class='nav-link'>Admin</a>";
						echo		"</li>";
					}
					echo		"<li class='nav-item pr-2 dropdown'>";
					echo			"<a class='nav-link dropdown-toggle nav-link' href='#'id='navbarDropdown' role='button' data-toggle='dropdown'aria-haspopup='true' aria-expanded='false'>$name</a>";
			        echo			"<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>";
			        echo				"<a class='dropdown-item' href='../login/logout.php'>Log out</a>";
					echo			"</div>";
					echo 		"</li>";
					echo    "</ul>";
				}
			
			?> 
		</div>
	</nav>