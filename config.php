<?php
	include("classes/safemysql.class.php");
	/* Подключение к базе данных */
	$db = array(
		"host" => "", //Хост Mysql
		"user" => "", //Пользователь Mysql
		"pass" => "", //Пароль от пользователя mysql
		"name" => "" //Название Базы Данных Mysql
	);
	$mysqli = new SafeMysql(array('host' => $db['host'],'user' => $db['user'], 'pass' => $db['pass'],'db' => $db['name']));
	
	/* Настройка авторизации через steam */
	$apikey = ""; // Сгенерировать можно тут http://steamcommunity.com/dev/apikey
	$domain = ""; // Домен сайта
	$redirectpage = ""; // Куда отправляем человека после авторизации
	
	/* Найтройка данных от платежной системы */
	$shopid = ""; // ID Вашего магазина на сервисе Free-kassa.ru
	$secret = ""; // Секретный ключ
	$secret2 = ""; // Секретный ключ 2
	
	/* Найтройка уведомлений в Discord */
	$web_hook = "";
?>
