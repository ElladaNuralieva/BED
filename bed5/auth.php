<?php
    require_once 'include/connection.php';
    require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>vyborgskaya</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="show_about.js"></script>
</head>
<body>
	<div class="main">
		<div class="main_wrapper">
			<section class="header">
				<section class="logo">
					<span> Туристическая фирма "Выборгская"</span>
					<!-- <h2>Оформить заказ</h2> -->
				</section>
			</section>
			<section class="login">
				<form action="index.php" method="POST">
					<div class="login_form">
						<div class="login__fields">
							<label for="username" class="uname" data-icon="u" > ВАШ ЛОГИН</label>
 							<input id="username" name="username" required="required" type="text">
						</div>
						<div class="login__fields">
							<label for="password" class="youpasswd" data-icon="p"> ВАШ ПАРОЛЬ </label>
 							<input id="password" name="password" required="required" type="password" />
						</div>
 						<div class="login__fields">
 							<input type="submit" value="ВОЙТИ" />
 						</div>
 						
					</div>
				
				
				</form>
			</section>
			
			
			
		</div>
		
	</div>
	

</body>
</html>
