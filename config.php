<?php
	/* Подключение к базе данных */
	$db = array(
		"host" => "localhost", //Хост Mysql
		"user" => "root", //Пользователь Mysql
		"pass" => "MSADKlfmsjafjasfmakslfjkla", //Пароль от пользователя mysql
		"name" => "test" //Название Базы Данных Mysql
	);
	$db2 = mysql_connect($db['host'], $db['user'], $db['pass']);
	mysql_select_db($db['name'], $db2);
	/* Настройка авторизации черещз steam */
	$apikey = "27E189F854DE61F418A4B320A83E9EC0"; // Сгенерировать можно тут http://steamcommunity.com/dev/apikey
	$domain = "http://moscowgaming.ru"; // Домен сайта
	$redirectpage = "/test/"; // Куда отправляем человека после авторизации
	/* Найтройка данных от платежной системы */
	$shopid = ""; // ID Вашего магазина на сервисе Free-kassa.ru
	$secret = ""; // Секретный ключ
	$secret2 = ""; // Секретный ключ 2
	
?>