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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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
			<section class="description">
				<button id="show_about">ПОКАЗАТЬ ИНФОРМАЦИЮ О ТУРАХ</button>
				<div id="show_about_desc" ></div>
			</section>
			<section class="registration">
				<a href="registration.php"><button>ОФОРМИТЬ ТУР</button></a>
			</section>
			<section class="change">
				<a href="#"><button>РЕДАКТИРОВАТЬ ДАННЫЕ О ТУРИСТАХ</button></a>
			</section>
			
		</div>
		
	</div>
	

</body>
</html>
