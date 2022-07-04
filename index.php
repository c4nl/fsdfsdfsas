<?php

require_once 'app/require.php';
require_once 'app/controllers/CheatController.php';

$user = new UserController;
$cheat = new CheatController;


Session::init();

if (!Session::isLogged()) { Util::redirect('/login.php'); }

$username = Session::get("username");
$uid = Session::get("uid");
$invitedBy = Session::get("invitedBy");
$sub = $user->getSubStatus();
Util::banCheck();
Util::head($username);
//Util::navbar();   #f700ff

?>

<link rel="stylesheet" href="n.css">
<link rel="stylesheet" href="app.css">

	
<header id="main5">
	<a href="/">
		<pre id="sig">
	  ██████  ██ ▄█▀▓██   ██▓ ██▀███   ▄▄▄     ▄▄▄█████▓
	▒██    ▒  ██▄█▒  ▒██  ██▒▓██ ▒ ██▒▒████▄   ▓  ██▒ ▓▒
	░ ▓██▄   ▓███▄░   ▒██ ██░▓██ ░▄█ ▒▒██  ▀█▄ ▒ ▓██░ ▒░
	  ▒   ██▒▓██ █▄   ░ ▐██▓░▒██▀▀█▄  ░██▄▄▄▄██░ ▓██▓ ░ 
	▒██████▒▒▒██▒ █▄  ░ ██▒▓░░██▓ ▒██▒ ▓█   ▓██▒ ▒██▒ ░ 
	▒ ▒▓▒ ▒ ░▒ ▒▒ ▓▒   ██▒▒▒ ░ ▒▓ ░▒▓░ ▒▒   ▓▒█░ ▒ ░░   
	░ ░▒  ░ ░░ ░▒ ▒░ ▓██ ░▒░   ░▒ ░ ▒░  ▒   ▒▒ ░   ░    
	░  ░  ░  ░ ░░ ░  ▒ ▒ ░░    ░░   ░   ░   ▒    ░      
	      ░  ░  ░    ░ ░        ░           ░  ░        
	                 ░ ░                                
   
	&#8205;
	&#8205;
					 
		</pre>
	</a>
</header>

<main class="container mt-2 front"> 

	<div class="col-12 mt-3 mb-2">

		<?php if (isset($error)) : ?>
			<div class="alert" role="alert">
				<?php Util::display($error); ?>
			</div>
		<?php endif; ?>
	</div>



	<div class="col-lg-4 col-md-12">
		<div class="col-12 clearfix">
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		  &#8205;
		</div>
	</div>




	<div class="row">

		<!--Statistics-->
		<div class="col-lg-8 col-md-12 panel-card">
			<div class="rounded p-5 mb-3">
				<div class="h5 border-bottom border-secondary pb-2"><i class="fas fa-chart-area"></i> Statistics</div>
				<div class="row">

					<!--Total Users-->
					<div class="col-12 clearfix">
						Users: <p class="float-right mb-0"><?php Util::display($user->getUserCount()); ?></p>
					</div>

					<!--Latest User-->
					<div class="col-12 clearfix">
						Latest User: <p class="float-right mb-0"><?php Util::display($user->getNewUser()); ?></p>
					</div>

					
				</div>
			</div>


			<div class="rounded p-5 mb-3">
				<div class="h5 border-bottom border-secondary pb-2"><i class=""></i> Account</div>
				<div class="row">

					<div class="col-12 clearfix">
						Welcome, <a href="http://localhost/panel/profile.php" style="color:rgb(255, 84, 241);"><?php Util::display($username) ?></a> (uid: <?php Util::display($uid); ?>)<br>
					</div>

					<div class="col-12 clearfix pb-1">
									<p class="float-left mb-0">
										<?php
										if ($sub > 0) {
											Util::display($sub . ' days');
										} else {
											Util::display('0 days');
										} ?>
									</p>
						</div>
				</div>

			</div>
		</div>


		<!--Status-->
		<div class="col-lg-4 col-md-12">
			<div class="rounded p-5 mb-3">
				<div class="h5 border-bottom border-secondary pb-2"><i class="fas fa-exclamation-circle"></i> Status</div>
				<div class="row">

					<!--Detected // Undetected-->
					<div class="col-12 clearfix">
						Status: <p class="float-right mb-0"><?php Util::display($cheat->getCheatData()->status); ?></p>
					</div>

					<!--Cheat version-->
					<div class="col-12 clearfix">
						Version: <p class="float-right mb-0"><?php Util::display($cheat->getCheatData()->version); ?></p>
					</div>
	
					<!-- Check if has sub --> 
					<?php if ($user->getSubStatus() > 0) : ?>
						<div class="col-12 text-center pt-1">
							<div class="border-top border-secondary pt-1">

							<a href="/download.php">Download Software</a>
							</div>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</main>

<div class="controls">
        <a href="http://localhost/panel/logout.php">logout</a>
		/
		<a href="http://localhost/panel/profile.php">profile</a>
</div>
