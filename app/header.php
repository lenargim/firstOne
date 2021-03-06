<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<? require 'config.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/iconmoon.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title><?php echo $config['title'];?></title>
</head>
<body>
<header class="header">
	<div class="wrapper">
		<div class="row header__row">
			<div class="header__logo col-lg-2 text-center text-lg-auto"><a href="/"><img src="img/header-logo.png" alt="logo"></a></div>
			<div class="mobile-menu d-flex col-1 d-md-none">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="col-lg-9 col-xl-8  menu animated">
				<?php
				$goods = get_goods();
				foreach ($goods as $good): ?>
					<li class="menu__item"><a class="menu__item__link" href="#good<? echo $good["id"]; ?>"><? echo $good["menu_title"]; ?></a></li>
				<?php endforeach; ?>
					<li class="menu__item"><a class="menu__item__link" href="#about">О нас</a></li>
					<li class="menu__item"><a class="menu__item__link" href="#contacts">Контакты</a></li>
			</nav>
		</div>
	</div>
</header>
<div class="toTop" id="toTop">
	<div class="arrow">
		<span class="icon-right"><span class="path1"></span><span class="path2"></span></span>
	</div>
	<span>Вверх</span>
</div>