<?php
function st32to64($steamid32)
{
	if(preg_match('/^STEAM_1\:*\:(.*)$/', $steamid32, $res))
	{
		list(, $m1, $m2) = explode(':', $steamid32, 3);
		list($steam_cid,) = explode('.', bcadd((((int)$m2 * 2) + $m1), '76561197960265728'), 2);
		return $steam_cid;
	}
	return false;
}

function DiscordMsg($webhook, $steamid, $summ)
{
	if(strlen($webhook) > 0)
	{
		$steam64 = st32to64($steamid);
		$xml = file_get_contents('https://steamcommunity.com/profiles/'.$steam64.'/?xml=1');
		$profile = simplexml_load_string($xml);
		
		$fields = array();
		$fields[] = array('name' => 'Действие', 'value' => 'Пополнение баланса через сайт');
		$fields[] = array('name' => 'SteamID', 'value' => (string)$steamid);
		$fields[] = array('name' => 'Сумма', 'value' => (int)$summ);
		
		if(strlen($profile->avatarMedium) > 0)
		{
			$load = array(
			'username' => (string)$profile->steamID,
			'avatar_url' => (string)$profile->avatarMedium,
			'embeds' => array(array(
					'color' => 0xAA0000,
					'fields' => $fields
				))
			);
			$curl = curl_init($webhook);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($load));
			curl_exec($curl);
		}
		else
		{
			$load = array(
			'username' => "NO STEAM",
			'avatar_url' => "images/none.jpg",
			'embeds' => array(array(
					'color' => 0xAA0000,
					'fields' => $fields
				))
			);
			$curl = curl_init($webhook);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($load));
			curl_exec($curl);
		}
	}
}
?>