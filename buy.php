<?php
	include('config.php');
	if(isset($_POST['email']) && isset($_POST['steamid']) && isset($_POST['summ'])){
		if(empty($_POST['email'])){
			die("Вы не ввели свой email");
		}else if(empty($_POST['steamid'])){
			die("Вы не ввели свой steamid");
		}else if(empty($_POST['summ']) || (int)$_POST['summ'] == 0){
			die("Вы ввели некорректную сумму пополнения");
		}
		$summ = (int)$_POST['summ'];
		$sql = mysql_query("INSERT INTO `buy`(`id`, `status`, `steamid`, `summ`) VALUES ('','0','".mysql_real_escape_string($_POST['steamid'])."','".$summ."')");
		echo "<script language='JavaScript'> window.location.href = 'http://www.free-kassa.ru/merchant/cash.php?m=".$shopid."&oa=".$summ."&o=".mysql_insert_id()."&s=".md5($shopid.':'.$summ.':'.$secret.':'.mysql_insert_id())."'; </script>";
	}else{
		die('lol');
	}
?>