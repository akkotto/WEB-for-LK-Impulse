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
		$steamid = str_replace("STEAM_0", "STEAM_1", $_POST['steamid']);
		$mysqli->query("INSERT INTO `buy`(`steamid`, `summ`) VALUES (?s, ?i)", $steamid, $summ);
		//$sql = mysql_query("INSERT INTO `buy`(`id`, `steamid`, `summ`) VALUES ('','".mysql_real_escape_string($steamid)."','".$summ."')");
		echo "<script language='JavaScript'> window.location.href = 'http://www.free-kassa.ru/merchant/cash.php?m=".$shopid."&oa=".$summ."&o=".$mysqli->insertId()."&s=".md5($shopid.':'.$summ.':'.$secret.':'.$mysqli->insertId())."'; </script>";
	}else{
		die('lol');
	}
?>
