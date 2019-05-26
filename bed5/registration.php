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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
			</section>
			
			<section class="client">
				<form  class=" client__form" action="addTourist.php" method="post">
					<div class="addclient"> 
						<div class="name">
                            <input type="text" name="name[]" placeholder="Имя" class="client_info" />
                            <input type="text" name="lastname[]" placeholder="Фамилия" class="client_info" />
                            <input type="text" name="middlename[]" placeholder="Отчество" class="client_info" />
                            <label>Дата рождения</label>
                            <input type="date" name="bdate[]" placeholder="Дата рождения" class="client_info" />
                            <label>Телефон</label>
                            <input name="tel" type="tel" pattern="^\+7\d{3}\d{7}$" value="+7" maxlength="12">
                        </div>
                            	
                        <div class="passtel">
                            <input type="text" name="passport[]" placeholder="Документ, удостоверяющий личность" class="client_info" />
                            <input type="text" name="passport[]" placeholder="Серия" class="client_info" pattern="[0-9]{10}" />
                            <input type="text" name="passport[]" placeholder="Номер" class="client_info" pattern="[0-9]{10}" />
                            <input type="text" name="passport[]" placeholder="Кем выдан" class="client_info" />
                            <label>Дата выдачи</label>
                            <input type="date" name="bdate[]" placeholder="Дата выдачи" class="client_info" />
                             <label>Наличие заграничного паспорта</label>
                             <input type="checkbox" name="passport[]"  class="client_info" />

                        </div>  
                            

                        <div class="but">
                           	<button type="button" name="add" class=" btn_add client_info">Добавить туриста</button>
                            <button type="button" name="remove" id="remove" class="btn_remove client_info">Удалить туриста
                            </button>
                        </div>  
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
					<button type="button" name="ok" class="btn btn-success">Подтвердить заказ</button>
				</div>
			</section>
		</div>
	</div>

	
	<script src="script.js" type="text/javascript"></script>

</body>
</html>
