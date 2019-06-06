<? require 'header.php';?>
<div class="tytoknoall"></div>
<? $good = get_good_by_id($_GET["id"]); ?>
	<section class="goods">
		<div class="wrapper">
			<div class="row goods__row">
				<div class="col-lg-6 goods__right" id="goods__right">
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
					</div>
					<div class="button-row">
						<button class="button order" name="order<? echo $good["id"]; ?>">Купить</button>
					</div>
				</div>
				<div class="col-lg-6 goods__left">
					<a href="#">
						<div class="price order" name='price<? echo $good["id"]; ?>'>
							<? echo $good["price"]; ?> <span class="icon-rouble" id="rouble"></span>
					</div>
					</a>
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
			<div class="row__2">
				<p><? echo $good["description"]; ?></p>
			</div>
		</div>
	</section>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</body>
</html>

<?php 	require 'contacts.php';
		require 'cart.php'; ?>