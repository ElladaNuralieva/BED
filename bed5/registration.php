<?php
    require_once 'include/connection.php';
    require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="registration.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js
    "></script>

	<script src="loading.js"></script>
	<script src="pdf.js"></script>
</head>
<body id="target">
	<div id = "main" class="main">
		<div class="main_wrapper">
			<section class="header">
				<section class="logo">
					<span> Туристическая фирма "Выборгская"</span>
					<h2>Оформить заказ</h2>
				</section>
			</section>
			<section class="what">
				<div class='select'>
					<div class="where">
						<div class="where_select">
							<select name="selectRoute" id="selectRoute">
							    <option value=''>Выберите маршрут:</option>
							    <?php echo getRoutes($link); ?>
							</select>

						</div>
					</div>

					<div id="when__start">
						<select  id="dataSelect" name="dataSelect">
                            <option value=''>Выберите дату:</option>
   						</select>
					</div>
				</div>

					<div class="recieve">
						<div style="display: grid;">
							<div  id='period' class="about__howlong rec_el">
								<h3>Длительность</h3>
							</div>
							<div id="price" class="about__howmuch rec_el" style="padding-top: 5px;">
								<h3>Цена</h3>
							</div>
						</div>

						<div class="about rec_el">
							<h3>Описание</h3>
							<div id="comment" class="abo	ut__where"></div>
						</div>

						<div id="worker" class="about__worker">
                    		<h3>Представитель на маршруте</h3>
                    	</div>
					</div>

			</section>

			<section class="client" id="sec">
				<form  id="myForm" class=" client__form" action="addTourist.php" method="post">
					<div class="addclient">
						<div class="name">
                            <input type="text" name="name[]" placeholder="Имя" class="client_info" />
                            <input type="text" name="lastname[]" placeholder="Фамилия" class="client_info" />
                            <input type="text" name="middlename[]" placeholder="Отчество" class="client_info" />
                            <label>Дата рождения</label>
                            <input type="date" name="bdate[]" placeholder="Дата рождения" class="client_info" />
                            <label>Телефон</label>
                            <input name="tel" type="tel[]" pattern="^\+7\d{3}\d{7}$" value="+7" maxlength="12">
                        </div>

                        <div class="passtel">
                            <input type="text" name="docType[]" placeholder="Документ, удостоверяющий личность" class="client_info" />
                            <input type="text" name="seria[]" placeholder="Серия" class="client_info" pattern="[0-9]{4}" />
                            <input type="text" name="number[]" placeholder="Номер" class="client_info" pattern="[0-9]{6}" />
                            <input type="text" name="given[]" placeholder="Кем выдан" class="client_info" />
                            <label>Дата выдачи</label>
                            <input type="date" name="giveDate[]" placeholder="Дата выдачи" class="client_info" />
                             <label>Наличие заграничного паспорта</label>
                            <input type="checkbox" name="hasPass[]"  class="client_info" />
                        </div>


                        <div class="but">
                           	<button type="button" name="add" class=" btn_add client_info">Добавить туриста</button>
                            <button type="button" name="remove" id="remove" class="btn_remove client_info">Удалить туриста
                            </button>
                        </div>
                    </div>
                    <input id="submitbut" type="submit" value="Подтвердить  туристов">
				</form>
			</section>
			<section class="total">
				<h3> Итого</h3>
				<div class="price">

					<p id="total_price"></p>
					<p id="total_discount">	</p>
				</div>
				<div class="ok">
					<button name="ok" class="btn btn-success">Подтвердить заказ</button>
                	<!-- <button id="pdfBut" name="pdf" class="btn pdf">Просмотреть pdf </button> -->
                </div>
			</section>
		</div>
	</div>



</body>
<script src="script.js" type="text/javascript"></script>
	<script>
        // wait for the DOM to be loaded
        $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function
            $('#myForm').ajaxForm(function() {
                alert("Подтверждено!");
            });
        });
    </script>
</html>