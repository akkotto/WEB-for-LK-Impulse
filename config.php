<?php
	/* Подключение к базе данных */
	$db = array(
		"host" => "", //Хост Mysql
		"user" => "", //Пользователь Mysql
		"pass" => "", //Пароль от пользователя mysql
		"name" => "" //Название Базы Данных Mysql
	);
	$mysqli = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
	if($mysqli->connect_errno){
		die("Ошибка подключения к базе!");
	}
	if(!$mysqli->query("SELECT * FROM `lk`")){
		die("Ошибка! Таблица `lk` не найдена!");
	}
	/* Настройка авторизации черещз steam */
	$apikey = ""; // Сгенерировать можно тут http://steamcommunity.com/dev/apikey
	$domain = ""; // Домен сайта
	$redirectpage = "/"; // Куда отправляем человека после авторизации
	/* Найтройка данных от платежной системы */
	$shopid = ""; // ID Вашего магазина на сервисе Free-kassa.ru
	$secret = ""; // Секретный ключ
	$secret2 = ""; // Секретный ключ 2
	
?>
