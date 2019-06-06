<?php
$config = array(
	'title' => "Avtoscanerpro - Автодиагностика автомобилей в Казани",
	'vk_url' => "https://vk.com/id19863725",
	'address' => "ул. Фатыха Амирхана д.43 офис 12",
	'phone' => "+7(917)278-00-00",
	'db' => array(
				'server' => 'localhost',
				'username' => 'root',
				'password' => '',
				'name' => 'admin_scaner',
			)
);
/*mysqli_set_charset($config, 'utf8');*/
require "db.php";
?>