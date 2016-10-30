<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://gif.dev/assets/css/style.css">
</head>
<body>
	<main class="container card">
		<div class="card__right card__right--login"></div>
		<?php if (isset($alert)) : ?>
			<div class="custom-alert"><?php echo $alert; ?></div>
		<?php  endif; ?>
		<div class="card__left">
			<div class="card__info">
				<span>Collect many gifs</span>
				<h1 class="card__title">You're back!</h1>
				<p class="card__description">Post them on Facebook, upload your own gifs.</p>
			</div>

			<div class="form">
				<?php echo form_open('/login/login_user'); ?>
					<div class="form-group">
						<?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'autocomplete' => 'off', 'class'=>'form-control form__input', 'value' => set_value('email'))); ?>
						<?php echo form_error('email');?>
					</div>

					<div class="form-group">
						<?php echo form_input(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'autocomplete' => 'off', 'type'=>'password', 'class'=>'form-control form__input', 'value' => set_value('password'))); ?>
						<?php echo form_error('password');?>
					</div>

					<?php echo form_submit(array('value'=>'Sign in', 'class'=>'form__button')); ?>

				<?php form_close(); ?>
				<div class="card__footer">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<p class="card__recommendation">Are not you registered?</p>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<?php echo anchor('register', 'Click here <i class="fa fa-arrow-right" aria-hidden="true"></i>', array('title' => 'Register now', 'class' => 'card__link_login_email')); ?>
						</div>
					</div>
				</div>
			</div> <!--end div form-->
		</div><!--end div card__left-->
	</main>

	<script src="https://use.fontawesome.com/be7e763425.js"></script>
</body>
</html>