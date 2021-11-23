<html>

<head>
<title><?php echo strip_tags( $config['title'] ); ?></title>
<!-- Mobile viewport optimized -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link media="all" type="text/css" href="assets/dashicons.css" rel="stylesheet">
<link media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet">
<link rel='stylesheet' id='base-css'  href='assets/base.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='assets/style.css' type='text/css' media='all' />
<script type='text/javascript' src='assets/jquery.js'></script>
<script type='text/javascript' src='assets/jquery-migrate.js'></script>
</head>

<body class="wordpress wp-is-not-mobile layout-content">
	<div id="container">

		<?php require_once( $config['path'] . 'parts/header.php' ); ?>

		<div class="wrap">
			<div id="main">
				<div class="wrap">

					<main id="content" class="content" role="main">
						<div class="wrap">

							<article class="post entry">
								<div class="wrap">
									<div class="entry-content">
										<?php require_once( $config['path'] . 'content.php' ); ?>
									</div><!-- .entry-content -->
									<footer class="entry-footer">
									</footer><!-- .entry-footer -->
								</div><!-- .entry > .wrap -->
							</article><!-- .entry -->
						</div><!-- #content > .wrap -->
					</main><!-- #content -->

				</div><!-- #main > .wrap -->
			</div><!-- #main -->
		</div><!-- #container > .wrap -->

		<?php require_once( $config['path'] . 'parts/footer.php' ); ?>

	</div><!-- #container -->

<script type='text/javascript' src='assets/jquery.fitvids.min.js'></script>
<script type='text/javascript' src='assets/base.js'></script>
<script type='text/javascript' src='assets/script.js'></script>
</body>

</html>