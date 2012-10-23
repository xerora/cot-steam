<?php

defined('COT_CODE') or die('Wrong URL');

global $db_users;

if ($db->query("SHOW COLUMNS FROM `$db_users` WHERE `Field` = 'user_steamid'")->rowCount() == 0)
{
	cot_extrafield_add($db_users, 'steamid', 'input', '<input class="text" type="text" maxlength="32" size="16" />', '', '',
		false, 'Text', 'SteamID or vanityURL');
}