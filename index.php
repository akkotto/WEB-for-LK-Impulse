<?php
	ini_set ( 'display_errors' , true );
	ini_set ( 'html_errors' , true );
	ini_set ( 'error_reporting' , E_ALL );
	session_start();
	include("config.php");
	function toSteamID($id) {
    if (is_numeric($id) && strlen($id) >= 16) {
        $z = bcdiv(bcsub($id, '76561197960265728'), '2');
    } elseif (is_numeric($id)) {
        $z = bcdiv($id, '2'); // Actually new User ID format
    } else {
        return $id; // We have no idea what this is, so just return it.
    }
    $y = bcmod($id, '2');
    return 'STEAM_1:' . $y . ':' . floor($z);
    }
?>
<html>
<?php include("header.php"); ?>
<div class="wrapper">
	<div class="title">Пополнить баланс</div>
	<div class="result" style="color: #cc0000; text-align: center; position:relative; top:30px;"></div>
	<form action="javascript:void(null);" method="POST" id="formbuy" onsubmit="formbuy();">
		<input type="text" name="steamid" required pattern="STEAM_[0-1]:[0-1]:[0-9]{5,15}" title="Введите steamid в формате: Пример: STEAM:0:1:53615624" class="inputtext" placeholder="Ваш steamid (Пример: STEAM:0:1:53615624)" <?php if(isset($_SESSION['steamid'])) echo 'value="'.toSteamID($_SESSION['steamid']).'"'; ?>>
		<input type="text" name="summ" class="inputtext" placeholder="Сумма"><br>
		<input type="submit" name="button" class="button" value="Оплатить">
	</form>
<div class="text">Нажимая кнопку оплатить, Вы соглашаетесь с <u>правилами</u> покупки</div>
</div>
<?php include('footer.php'); ?>
</html>