<?php
include 'app/require.php';

$user = new UserController;

Session::init();

if (Session::isLogged()) { Util::redirect('/'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $error = $user->registerUser($_POST); }

Util::head('Register');

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


		<div class="col-lg-3 col-md-12">
			<div class="rounded p-5 mb-3">
				<div class="h5 pb-2"><i class="fas f"></i> </div>
				<div class="row">

					<div class="col-12 clearfix p-1">
						<h4 class="card-title text-center"></h4>
					</div>

					<form method="POST" action="<?php Util::display($_SERVER['PHP_SELF']); ?>">

						<div class="col-12 clearfix p-1">
							<input type="text" class="form-control form-control-sm" placeholder="user" name="username" minlength="3" required>
						</div>
						
						<div class="col-12 clearfix p-1">
							<input type="password" class="form-control form-control-sm" placeholder="pass" name="password" minlength="4" required>
						</div>

						<div class="col-12 clearfix p-1">
							<input type="password" class="form-control form-control-sm" placeholder="confirm pass" name="confirmPassword" minlength="4" required>
						</div>

						<div class="col-12 clearfix p-1">
							<input type="text" class="form-control form-control-sm" placeholder="invite code" name="invCode" required>
						</div>

						<div class="col-12 clearfix p-1">
							<button class="btn btn-outline-primary btn-block" id="submit" type="submit" value="submit">register</button>
						</div>

						
							

						

					</form>

				</div>
			</div>
		</div>


	</div>

</main>

<script src="<?php SITE_ROOT ?>/assets/js/matchPass.js"></script>
<?php Util::footer(); ?>