<nav id="mainNav" class=" my-nav navbar  navbar-expand-lg p-0 fixed-top ">
            <a href="../HomePage/home.php" class="navbar-brand ml-3 mb-1">
                <img  class="logo" src="../logowhite.png" width="50px" height="50px">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="../stakoulas/problemsadmin.html" class="nav-link">Problems</a>
                    </li>
                    <li class="nav-item pr-2 dropdown">
					<a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions
					</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="kossifydis/actions.html">Organizations</a>
			        	<div class="dropdown-divider"></div>
			        	<a class="dropdown-item" href="actions2/personalactions.html">Individual Efforts</a>
					</div>
				</li>
                    <li class="nav-item pr-2">
                        <a href="../info_world/worldadmin.html" class="nav-link">World</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="../info_world/infoadmin.html" class="nav-link">Info</a>
                    </li>
                </ul>
            </div>
            <!--PHP code!! If the user logs in then it should display a drop down -->
            <div class="collapse navbar-collapse justify-content-end" id="navLinks">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="users.php" class="nav-link">Admin</a>
                    </li>
                    <!--
                    <li class="nav-item pr-2 dropdown">
                        <a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Username
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                    -->
                </ul>       
            </div>
        </nav>