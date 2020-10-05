<!DOCTYPE html>
<html>
<head>
	<title>Интерактивный календарь</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="images/mapIcon.ico" type="image/x-icon">
</head>
<body>
	<p class="title">Интерактивный календарь победы</p>
	<nav id="mainMenu">
		<span id="mainDates">Гродненская область: основные события 1941-1945</span>
		<div id="blockDates">
			<p id="chooseDates">Выберите год:</p>
			<p class="year">1941</p>
			<p class="year">1942</p>
			<p class="year">1943</p>
			<p class="year">1944</p>
			<p class="year">1945</p>
		</div>
		<span id="version">v1.0</span>
	</nav>
	<header>
		<p id="show-monuments">Показать памятники</p>
		<input type="text" id="search" placeholder="Искать здесь...">
		<span id="searchButton">НАЙТИ</span>
	</header>
	<div id='map-container'>
		<img id="map" style="position:absolute;" src="images/map.png"/>
		<?php include_once 'php/show_monuments.php'; ?>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/get_year.js"></script>
	<script type="text/javascript" src="js/checkMonumentId.js"></script>
	<script type="text/javascript" src="js/hideCalendar.js"></script>
	<script type="text/javascript" src="js/getEvents.js"></script>
	<script type="text/javascript" src="js/getEventsId.js"></script>
	<script type="text/javascript" src="js/closePopUp.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
	<script type="text/javascript" src="js/titlePosition.js"></script>
	<script type="text/javascript" src="js/showMonuments.js"></script>
</body>
</html>