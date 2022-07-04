<?php

require_once 'app/require.php';

$user = new UserController;

Session::init();

if (!Session::isLogged()) { Util::redirect('/login.php'); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (isset($_POST["updatePassword"])) {
		$error = $user->updateUserPass($_POST);
	}


	if (isset($_POST["activateSub"])) {
		$error = $user->activateSub($_POST);
	}
}

$uid = Session::get("uid");
$username = Session::get("username");
$admin = Session::get("admin");

$sub = $user->getSubStatus();

Util::banCheck();
Util::head($username);

?>
  <link rel="stylesheet" href="app.css">
<main class="container mt-2">

	<div class="row justify-content-center">

		<div class="col-12 mt-3 mb-2">

			<?php if (isset($error)) : ?>
				<div class="alert" role="alert">
					<?php Util::display($error); ?>
				</div>
			<?php endif; ?>

		</div>

		


		<div class="col-lg-3 col-md-12 panel-card">
			<div class="rounded p-5 mb-0">
				<div class="h5 border-bottom border-secondary pb-2"><i class=""></i>&nbsp; &nbsp;  update</div>
				<div class="row">
					<form method="POST" action="<?php Util::display($_SERVER['PHP_SELF']); ?>">
						<div class="col-12 clearfix pb-1">
							username: <a href="http://localhost/panel/profile.php" style="color:rgb(255, 84, 241);"><?php Util::display($username); ?></a><br>
						</div>
						<div class="col-12 clearfix pb-1">
							sub:
									<p class="float-right mb-0">
										<?php
										if ($sub > 0) {
											Util::display($sub . ' days');
										} else {
											Util::display('0 days');
										} ?>
									</p>
						</div>
						<div class="col-12 clearfix pb-1">
							<span>management</span><br>
						</div>
            

						 <div class="col-12 clearfix pb-1">
							<input type="password" class="form-control form-control-sm" placeholder="license code" name="subCode" required>
						</div>

						<div class="col-12 clearfix pb-1">
							<button class="btn btn-outline-primary btn-block" name="activateSub" type="submit" value="submit">submit code</button>
						</div>


						


					</form>
				</div>
			</div>
		</div>
		

	</div>
	<div class="controls">
        <a href="http://localhost/panel/index.php">back</a>
    </div>
</main>

<?php Util::footer(); ?>