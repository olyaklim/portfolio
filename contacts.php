<?php

	include 'config.php';


	$post = $_POST;
	$html_message = '';

	if (!empty($post)) {

		$name = $post['name'];
		$email = $post['email'];
		$message = $post['message'];

		if ((is_string($name) && $name !== '') &&
			(filter_var($email, FILTER_VALIDATE_EMAIL)) &&
			($message != '' )) {

	  		// $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
			// $headers .= "From: Birthday Reminder <birthday@example.com>\r\n"; 
			// $headers .= "Bcc: birthday-archive@example.com\r\n"; 

			$result = mail($config['to'],$name, $message);
	}

	if ($result){
		$html_message = ' Сообщение отправлено!';
	}
	else {
		$html_message = ' Ошибка отправки!';
	}

	}

?>

<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>contact</title>
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

			<header class="site-header">

				<div class="home-overlay"></div>

				<div class="top-line">

					<a href="index.php" class="logo">
						<img src="img/logo_1.png" alt="logo">
					</a>

					<div class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						+38(063) 95-90-719
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

				<div class="header-flex">
					<div class="flex-center">

						<div class="header-composition">

							<div id="contact">

								<div class="container">
									<div class="row">

										<div class="col-xs-12 text-center">
											<h2 class="section-heading">Отправить заявку</h2>
											<h3 class="section-subheading text-muted">Введите данные для отправки</h3>
										</div>


										<div class="col-xs-12 text-center">





											<form name="sentMessage2" id="contactForm2" novalidate method="post" action="contacts.php">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input name="name" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
															<p class="help-block text-danger"></p>
														</div>
														<div class="form-group">
															<input name="email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
															<p class="help-block text-danger"></p>
														</div>
														<div class="form-group">
															<input name="phone" type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
															<p class="help-block text-danger"></p>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
															<p class="help-block text-danger"></p>
														</div>
													</div>
													<div class="clearfix"></div>
													<div class="col-lg-12 text-center">
														<div id="success"></div>
														<button type="submit" class="button btn btn-xl">Отправить заявку</button>

													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</header>
			</div>

			<div id="my-content">

			</div>

			<div id="my-footer">
				<p class="text-muted">Copyright &copy; 2016</p>
			</div>
		</div>
    <link rel="stylesheet" href="css/main.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<script src="js/scripts.min.js"></script>


	<script>
		$('#success').html('<?php echo $html_message; ?>');
		$('#success').show();
	</script>




	</body>
	</html>
