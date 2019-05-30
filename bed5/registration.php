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
<<<<<<<<< Temporary merge branch 1
=========
	<link rel="stylesheet" type="text/css" href="registration.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
>>>>>>>>> Temporary merge branch 2
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
	<script src="loading.js"></script>
</head>
<body>
	<div class="main">
		<div class="main_wrapper">
			<section class="header">
				<section class="logo">
					<span> Туристическая фирма "Выборгская"</span>
					<h2>Оформить заказ</h2>
				</section>
			</section>
			<section class="what">
<<<<<<<<< Temporary merge branch 1
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
                            <option disabled>Выберите дату:</option>
   						</select>
					</div>
					<div id="when__end">

					</div>
					<div class="about">
						<h3>Описание</h3>
						<div id="comment" class="about__where">
   						</div>

					</div>
					<div id="price" class="about__howmuch">
						<h3>Цена</h3>

					</div>
				    <div id="worker" class="about__howmuch">
                    <h3>Представитель на маршруте</h3>

                    </div>
=========
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

>>>>>>>>> Temporary merge branch 2
			</section>

			<section class="client">
				<form  id="myForm" class=" client__form" action="addTourist.php" method="post">
					<div class="addclient">
						<div class="name">
                            <input type="text" name="name" placeholder="Имя" class="client_info" />
                            <input type="text" name="lastname" placeholder="Фамилия" class="client_info" />
                            <input type="text" name="middlename" placeholder="Отчество" class="client_info" />
                            <label>Дата рождения</label>
                            <input type="date" name="bdate" placeholder="Дата рождения" class="client_info" />
                            <label>Телефон</label>
                            <input name="tel" type="tel" pattern="^\+7\d{3}\d{7}$" value="+7" maxlength="12">
                        </div>

                        <div class="passtel">
                            <input type="text" name="docType" placeholder="Документ, удостоверяющий личность" class="client_info" />
                            <input type="text" name="seria" placeholder="Серия" class="client_info" pattern="[0-9]{4}" />
                            <input type="text" name="number" placeholder="Номер" class="client_info" pattern="[0-9]{6}" />
                            <input type="text" name="given" placeholder="Кем выдан" class="client_info" />
                            <label>Дата выдачи</label>
                            <input type="date" name="giveDate" placeholder="Дата выдачи" class="client_info" />
                             <label>Наличие заграничного паспорта</label>
                            <input type="checkbox" name="hasPass"  class="client_info" />
                        </div>
<<<<<<<<< Temporary merge branch 1


                        <div class="but">
                            <input type="submit" value="Подтвердить данного туриста">
                           	<button type="button" name="add" class=" btn_add client_info">Добавить туриста</button>
                            <button type="button" name="remove" id="remove" class="btn_remove client_info">Удалить туриста
                            </button>
                        </div>

=========


                        <div class="but">
                           	<input id="submitbut" type="submit" value="Подтвердить данного туриста">
                           	<button type="button" name="add" class=" btn_add client_info">Добавить туриста</button>
                            <button type="button" name="remove" id="remove" class="btn_remove client_info">Удалить туриста
                            </button>
                        </div>
>>>>>>>>> Temporary merge branch 2
                    </div>
				</form>
			</section>
			<section class="total">
				<h3> Итого</h3>
				<div class="price">

					<p>Дофига рублей</p>
					<p>Скидка</p>
				</div>
				<div class="ok">
<<<<<<<<< Temporary merge branch 1
					<button type="button" name="ok" class="btn btn-success">Подтвердить заказ</button>
=========
					<button name="ok" class="btn btn-success">Подтвердить заказ</button>
>>>>>>>>> Temporary merge branch 2
				</div>
			</section>
		</div>
	</div>


	<script src="script.js" type="text/javascript"></script>
<<<<<<<<< Temporary merge branch 1

</body>
</html>
<script>
=========
	<script>
>>>>>>>>> Temporary merge branch 2
        // wait for the DOM to be loaded
        $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function
            $('#myForm').ajaxForm(function() {
                alert("Подтверждено!");
            });
        });
    </script>
<<<<<<<<< Temporary merge branch 1
=========
</body>
</html>
>>>>>>>>> Temporary merge branch 2
