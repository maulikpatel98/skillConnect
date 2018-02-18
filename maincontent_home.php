
<div class="main-content">
				<div class="main-content-inner">
					<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>
							<?php 
					if(!isset($_SESSION["user"])){
						echo "<li>
								<a href=\"login.php\">Login</a>
							</li></ul></div>";

					echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;welcome to skillConnect...! portal for every one to find skilled people..!!</h3><br><br>";
					echo "<a href=\"signup.php\"><button>sign up</button></a>";
					}
					else{
					//echo "hello" .$_SESSION["user"];
						echo "</ul></div>";
					echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;welcome to skillConnect ".$_SESSION["user"]."..! portal for every one to find skilled people..!!</h3><br><br>";
					echo "<a href=\"login.php\"><button>logout</button></a>";
					}
					?>
							
							<!-- <li>
								<a href="#">Tables</a>
							</li> -->

							<!-- <li class="active">Simple &amp; Dynamic</li> -->
						<!-- /.breadcrumb -->

						<!-- <div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div> --><!-- /.nav-search -->
					
					
					<!-- ?php 
					if(!isset($_SESSION["user"])){
					echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;welcome to skillConnect...! portal for every one to find skilled people..!!</h3><br><br>";
					echo "<a href=\"signup.php\"><button>sign up</button></a>";
					}
					else{
					//echo "hello" .$_SESSION["user"];
					echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;welcome to skillConnect ".$_SESSION["user"]."..! portal for every one to find skilled people..!!</h3><br><br>";
					echo "<a href=\"login.php\"><button>logout</button></a>";
					}
					? -->
					