<?php if (isset($_SESSION['nickname']) && $_SESSION['logged_in'] === true) { ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
	</head>
	<body>
		<main class="container card">
			<div class="card__right card__right--upload">
			<?php if (isset($alert)) : ?>
			<div class="custom-alert"><?php echo $alert; ?></div>
			<?php  endif; ?>
			<div class="logout">
				<?php echo anchor('login/logout', 'Log out', array('title' => 'Log out now!')); ?>
			</div>
				<form class="form" id="form--upload" enctype="multipart/form-data">
					<div class="form-group" >
						<input type="file" id="source" name="source" class="form-control form__input form__input--file">
						<label for="source"><span id="fakepath"><i class="fa fa-upload" aria-hidden="true"></i> Choose a gif</span></label>
					</div>
					<button class="form__button form__button--upload">Upload</button>
					<div id="upload--success"></div>
				</form>
			</div>
			
			<div class="card__left">
				<div class="card__info">
					<h3 class="card__title">Your collection, <?php echo $_SESSION['nickname']; ?>!</h3>

					<div class="row grid" data-masonry='{"itemSelector": ".grid-item" }'>
						<div class="gallery">
							<?php 
							if(isset($gifs)):
								foreach ($gifs as $gif): 
									$path 	= $gif['source']; 
									$id   	= $gif['id'];
									$active = ($gif['active']) ? "checked='checked'" : "";
							?>
								<div class="col-md-6 col-xs-12 grid-item">
									<img src="<?php echo base_url('assets/uploads/'.$path); ?>">
									<div class="gallery__image--activation">
										<span>Check it</span><input type="checkbox" name="id__gif[]" id="<?php echo $id; ?>" value="<?php echo $id; ?>" onclick="checkingGifs()" <?php echo $active; ?>>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div><!--end div card__left-->
		</main>
		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.min.js"></script>
		<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
		<script src="https://use.fontawesome.com/be7e763425.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
				
	</body>
	</html>
<?php }else{ redirect('/login'); } ?>