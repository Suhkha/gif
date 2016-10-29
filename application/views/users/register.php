<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<link rel="stylesheet" href="http://gif.dev/assets/css/style.css">
</head>
<body>
	<main class="container card">
		<div class="card__right card__right--register"></div>
		<div class="card__left">
			<div class="card__info">
				<span>Just upload</span>
				<h1 class="card__title">Is your first time here?</h1>
				<p class="card__description">Add your gifs, share them, make them whatever you want, wherever you want.</p>
			</div>

			<div class="form">
				<?php echo form_open('/register/save'); ?>
					<div class="form-group">
						<?php echo form_input(array('name'=>'nickname', 'id'=> 'nickname', 'placeholder'=>'Nickname', 'autocomplete' => 'off', 'class'=>'form-control form__input', 'value' => set_value('nickname'))); ?>
						<?php echo form_error('nickname');?>
					</div>

					<div class="form-group">
						<?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'autocomplete' => 'off', 'class'=>'form-control form__input', 'value' => set_value('email'))); ?>
						<?php echo form_error('email');?>
					</div>

					<div class="form-group">
						<?php echo form_input(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'autocomplete' => 'off', 'type'=>'password', 'class'=>'form-control form__input', 'value' => set_value('password'))); ?>
						<?php echo form_error('password');?>
					</div>

					<?php echo form_submit(array('value'=>'Sign up', 'class'=>'form__button')); ?>

				<?php form_close(); ?>
				<div class="card__footer">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<p class="card__recommendation">Do you want to login to the site?</p>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<?php echo anchor('login', 'Click here <i class="fa fa-arrow-right" aria-hidden="true"></i>', array('title' => 'Login now!', 'class' => 'card__link_login_email')); ?>
						</div>
					</div>
				</div>
			</div> <!--end div form-->
		</div><!--end div card__left-->
	</main>

	<script src="https://use.fontawesome.com/be7e763425.js"></script>
</body>
</html>