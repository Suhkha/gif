	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>All the GIFs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/lib/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

	</head>
	<body>
		<main class="container card">
			<div class="card__left card__left--full">
			<div class="main__link">
				<?php echo anchor('login', 'Home', array('title' => 'Home now')); ?>
			</div>
				<div class="card__info">
					<span>Click on the gif! <i class="fa fa-hand-pointer-o"></i></span>
					<h3 class="card__title">All the GIFs!</h3>

					<div class="row grid">
			
						<script id="grid-template" type="text/x-handlebars-template">
						{{#api}}
							<div class="col-md-6 col-xs-12">
									<a href="<?php echo base_url(); ?>/assets/uploads/{{this.source}}" rel="gallery" class="gallery">
										<img src="<?php echo base_url(); ?>/assets/uploads/{{this.source}}" alt="">
									</a>
							</div>
						{{/api}}
						</script>

					</div>
				</div>
			</div><!--end div card__left-->
		</main>
		
		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/be7e763425.js"></script>
		<script src="<?php echo base_url(); ?>/assets/lib/fancybox/jquery.fancybox.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/api.js"></script>
		<script>
			if(jQuery().fancybox){
			  $(".gallery").fancybox({
			    openEffect  : 'none',
			    closeEffect : 'none',
			    padding: 0
			  });
			};
		</script>
	</body>
	</html>