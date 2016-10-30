<?php if (isset($_SESSION['nickname']) && $_SESSION['logged_in'] === true) : ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://gif.dev/assets/css/style.css">
	</head>
	<body>
		<main class="container card">
			<div class="card__right card__right--upload">
			<div class="logout">
				<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a>
			</div>
				<form class="form" id="form--upload" enctype="multipart/form-data">
					<div class="form-group" >
						<input type="file" id="source" name="source" class="form-control form__input form__input--file" value="">
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
						<div class="gallery " >
							<div class="col-md-6 col-xs-12 grid-item">
								<img src="http://i.giphy.com/l41lLjlkX7SDfWb6w.gif" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="http://i.giphy.com/UrPaOzGwUUv7i.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="http://i.giphy.com/26tP2G40l6t6xvgBO.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="http://i.giphy.com/xTiTnD4d66fshHzTxK.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="http://i.giphy.com/l3V0l3iimigD3zt1m.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="http://i.giphy.com/3oEjHYuGvoCWdf631m.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="https://media.giphy.com/media/l2YSshrX8TJejxJBK/source.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

							<div class="col-md-6 col-xs-12 grid-item">
								<img src="https://media.giphy.com/media/l0MYyhUkkGGKaGcIo/source.gif" class="img-responsive" alt="">
								<div class="gallery__image--activation">
									<span>Check it</span><input type="checkbox">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div><!--end div card__left-->
		</main>
		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.min.js"></script>
		<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
		<script src="https://use.fontawesome.com/be7e763425.js"></script>
		<script src="http://gif.dev/assets/js/main.js"></script>
				
	</body>
	</html>
<?php endif; ?>