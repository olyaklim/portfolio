<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>my work</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1a1a1a">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1a1a1a">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1a1a1a">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>



	<style>
		body { opacity: 0; overflow-x: hidden; } html { background-color: #1a1a1a; }
	</style>

	
</head>

<body class="ishome">

	<div id="my-page">

		<div id="my-header">

			<header class="site-header2">

				<div class="home-overlay"></div>

				<div class="top-line">

					<a href="index.php" class="logo">
						<img src="img/logo_1.png" alt="logo">
					</a>

					<div class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						+38(063) 95-70-712
					</div>		

					<a href="#my-menu" class="hamburger hamburger--emphatic">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</a>

					<nav id="my-menu">
						<ul>
							<li><a href="index.php">Главная</a></li>
							<li><a href="about">Обо мне</a></li>
							<li><a href="portfolio">Портфолио</a></li>
							<li><a href="contacts.php">Контакты</a></li>
						</ul>
					</nav>

				</div>	



			</header>


			<!-- Portfolio -->
			<section id="portfolio" class="portfolio">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 text-center">
							<h2>My HomeWork</h2>
							<hr class="small">
							<div id="smartPortfolio" class="row">

								<div class="col-md-6 ourWork">
									<div class="portfolio-item">
										<a href="/parser_img">
											<span>Парсер картинок</span>

											<div class="block-img">
												<img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
												<div class="magnifier">
													<div class="buttons">
														<a class="st" rel="bookmark" href="https://github.com/olyaklim/parser_img">
															<i class="fa fa-github livicon shadowed" aria-hidden="true"></i>
														</a>

														<a class="st" rel="bookmark" href="/parser_img">
															<i class="fa fa-play livicon shadowed" aria-hidden="true"></i>
														</a>
													</div><!-- end buttons -->
													
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-md-6 ourWork">
									<div class="portfolio-item">
										<a href="/converter-valut">
											<span>Конвертер валют</span>
											<div class="block-img">
												<img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">

												<div class="magnifier">
													<div class="buttons">
														<a class="st" rel="bookmark" href="https://github.com/olyaklim/php-converter">
															<i class="fa fa-github livicon shadowed" aria-hidden="true"></i>
														</a>

														<a class="st" rel="bookmark" href="/converter-valut">
															<i class="fa fa-play livicon shadowed" aria-hidden="true"></i>
														</a>
													</div><!-- end buttons -->

												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-md-6 ourWork">
									<div class="portfolio-item">
										<a href="/calculate">
											<span>Калькулятор</span>
											<div class="block-img">
												<img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">

												<div class="magnifier">
													<div class="buttons">
														<a class="st" rel="bookmark" href="https://github.com/olyaklim/calculate">
															<i class="fa fa-github livicon shadowed" aria-hidden="true"></i>
														</a>

														<a class="st" rel="bookmark" href="/calculate">
															<i class="fa fa-play livicon shadowed" aria-hidden="true"></i>
														</a>
													</div><!-- end buttons -->
												</div>
											</div>											
										</a>
									</div>
								</div>

								<div class="col-md-6 ourWork">
									<div class="portfolio-item">
										<a href="/masiv">
											<span>Массивы</span>
											<div class="block-img">
												<img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">


												<div class="magnifier">
													<div class="buttons">
														<a class="st" rel="bookmark" href="https://github.com/olyaklim/masiv">
															<i class="fa fa-github livicon shadowed" aria-hidden="true"></i>
														</a>

														<a class="st" rel="bookmark" href="/masiv">
															<i class="fa fa-play livicon shadowed" aria-hidden="true"></i>
														</a>
													</div><!-- end buttons -->

												</div>	
											</div>										
										</a>
									</div>
								</div>

							</div>


							<div class="row">
									<div class="col-xs-12 text-center">
										<div id="moreButton" onclick="lazyload.load()">
											<span>Показать еще.....</span>
										</div>

										<div id="loadingDiv">
											<span>Загрузка данных</span>
										</div>
									</div>
								</div>

								
							<!-- /.row (nested) -->
							<!-- <a href="#" class="btn btn-dark">View More Items</a> -->
						</div>
						<!-- /.col-lg-10 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>


				

		</div>

		<div id="my-content">

		</div>

		<div id="my-footer">
			footer
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>
	<script type="text/javascript" src="js/lazyload.js"></script>

</body>
</html>
