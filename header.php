<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/site.js"></script>
<link href="css/style.css" rel="stylesheet">
<meta charset="utf-8">
</head>
<body>
<div class="menu-top">
	<div class="menu">
		<a href=""><div class="logo">Название проекта</div></a>
		<a href=""><div class="menu-block">Главная</div></a>
		<a href=""><div class="menu-block">Как купить?</div></a>
		<a href=""><div class="menu-block">Информация</div></a>
		<a href=""><div class="menu-block">Группа ВК</div></a>
		<a href=""><div class="menu-block">Банлист</div></a>
		<?php if(!isset($_SESSION['steamid'])){ ?>
			<a href="steamauth/steamauth.php?login"><div class="menu-block">Войти через стим</div></a>
		<?php }else{ ?>
			<a href="steamauth/steamauth.php?logout"><div class="menu-block">Выйти</div></a>
		<?php } ?>
	</div>
</div>