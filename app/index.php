<? require 'header.php';?>
<div class="tytoknoall"></div>
<section class="section-slider">
	<div class="slider">
			<?php
				$goods = get_goods();
				foreach ($goods as $good): ?>
				<div class="slider__item">
					<div class="wrapper">
						<div class="row d-flex align-items-center">
							<div class="col-lg-5 slider__left">
								<h1><? echo $good["title"]; ?></h1>
								<p><? echo $good["slider_text"]; ?></p>
								<a href="/good.php?id=<?php echo $good["id"]?>">
									<button class="button">Подробнее</button>
								</a>
							</div>
							<div class="col-lg-7 slider__right"><img src="<? echo $good["img1"] ?>" class="slider__img" alt="<? echo $good["alter_name"] ?>"></div>
						</div>		
					</div>
				</div>
			<?php endforeach; ?>
	</div>
</section>
<?php $goods = get_goods();
			foreach ($goods as $good) {?>
	<section class="goods" id="good<? echo $good["id"]; ?>">
		<div class="wrapper">
			<div class="row goods__row" id="goods<? echo $good["id"]; ?>__row">
				<div class="col-lg-6 goods__right" id="goods<? echo $good["id"]; ?>__right">
					<div class="goods__right__title"><h2><? echo $good["title"]; ?></h2></div>
					<div class="goods__content">
						<div class="goods__content__item">
							<p class="goods__right__text"><? echo $good["slider_text"]; ?></p>
							<ul class="goods__right__ul">
								<li class="goods__right__li"><span class="icon-01"><span class="path1"></span></span><? echo $good["option1"]; ?></li>
								<li class="goods__right__li"><span class="icon-01"><span class="path1"></span></span><? echo $good["option2"]; ?></li>
								<li class="goods__right__li"><span class="icon-01"><span class="path1"></span></span><? echo $good["option3"]; ?></li>
								<li class="goods__right__li"><span class="icon-01"><span class="path1"></span></span><? echo $good["option4"]; ?></li>
							</ul>
						</div>
						<div class="goods__content__item">
							<ul class="goods__right__ul2">
								<li class="goods__right__li2"><span class="icon-3"><span class="path1"></span></span>
									<div class="goods__right__li2__text">
										<p>Кабель - <span><? echo $good["cabel"]; ?></span></p>
									</div>
								</li>
								<li class="goods__right__li2"><span class="icon-lupa2"><span class="path1"></span></span>
									<div class="goods__right__li2__text">
										<p>Разрешение монитора - <span><? echo $good["monitor"]; ?></span></p>
									</div>
								</li>
								<li class="goods__right__li2"><span class="icon-h-power"></span>
									<div class="goods__right__li2__text">
										<p>Оперативная память - <span><? echo $good["RAM"]; ?></span></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="button-row">
						<a href="/good.php?id=<?php echo $good["id"]?>" class="goods__right__link">Подробнее.. 
							<div class="spin"><span class="icon-right"><span class="path1"></span><span class="path2"></span></span></div>
						</a>
							<button class="button move-light order order<? echo $good["id"]; ?>" name="order<? echo $good["id"]; ?>">Заказать</button>
						 <div class="card card<?php echo $good["id"];?>">
					    	<div class="front"><span>Узнать цену</span></div>
					    	<div class="back order" name='back<? echo $good["id"]; ?>'>
					    		<? echo $good["price"]; ?> <span class="icon-rouble"></span>
					    	</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 goods__left">
					<div class="goods__left__for" id="goods__left__for<? echo $good["id"]; ?>">
						<div class="goods__left__item"><img src="<? echo $good["img1"]; ?>" alt="<? echo $good["alter_name"]; ?>"></div>
						<div class="goods__left__item"><img src="<? echo $good["img2"]; ?>" alt="<? echo $good["alter_name"]; ?>"></div>
					</div>
					<div class="goods__left__container goods__left__nav" id="goods__left__nav<? echo $good["id"]; ?>">
						<div class="goods__left__nav__item"><img src="<? echo $good["img1"]; ?>" alt="<? echo $good["alter_name"]; ?>"></div>
						<div class="goods__left__nav__item"><img src="<? echo $good["img2"]; ?>" alt="<? echo $good["alter_name"]; ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<section id="about" class="about">
	<div class="wrapper">
		<div class="about__title title"><h2>Чем мы занимаемся</h2></div>
	<div class="about__text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aspernatur totam qui unde optio minus ullam itaque eaque enim voluptate aliquam nisi neque distinctio provident dolore sequi deleniti aperiam molestiae placeat quo repudiandae laborum ab, sunt magnam. Sapiente quis maiores aliquid nihil nobis, esse ex dolorum commodi, sed, deserunt, voluptate.</p></div>
	<div class="about__img"><img src="img/sample.png" alt=""></div>
	</div>
</section>
<?php require 'contacts.php';
		require 'cart.php';
 ?>
