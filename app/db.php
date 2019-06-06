<?php

$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']

);
if ($connection == false) {
	echo "нет подключения <br>";
	echo mysqli_connect_error(); // вывод причины ошибки подключения к БД
	exit();  // выключить php
}
/* Получение всех товаров */
function get_goods(){
		global $connection;
		$goods = $connection->query("SELECT * FROM goods");
		return $goods;		
	}
/* Получение товара по его id */
function get_good_by_id($id){
		global $connection;
		$goods = $connection->query("SELECT * FROM goods
		 WHERE `id` 
		 = $id");
		foreach ($goods as $good) {
		return $good;		
		}
	}
?>