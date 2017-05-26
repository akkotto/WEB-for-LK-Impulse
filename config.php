<?php
	/* Подключение к базе данных */
	$db = array(
		"host" => "", //Хост Mysql
		"user" => "", //Пользователь Mysql
		"pass" => "", //Пароль от пользователя mysql
		"name" => "" //Название Базы Данных Mysql
	);
	$db2 = mysql_connect($db['host'], $db['user'], $db['pass']);
	mysql_select_db($db['name'], $db2);
	/* Настройка авторизации черещз steam */
	$apikey = "2"; // Сгенерировать можно тут http://steamcommunity.com/dev/apikey
	$domain = "2"; // Домен сайта
	$redirectpage = "/"; // Куда отправляем человека после авторизации
	/* Найтройка данных от платежной системы */
	$shopid = ""; // ID Вашего магазина на сервисе Free-kassa.ru
	$secret = ""; // Секретный ключ
	$secret2 = ""; // Секретный ключ 2
	
?>
