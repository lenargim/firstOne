<section id="contacts" class="contacts">
<div class="contacts__title title"><h2>Как нас найти</h2></div>
<div class="contacts__text row">
	<div class="col-md-6">
		<div class="contacts__text__phone">
		<span class="icon-mobile"></span>
		<span>Позвонить по номеру: </span>
		<a href="tel:<?php echo $config['phone'];?>"><?php echo $config['phone'];?></a>
		</div>
		<div class="contacts__text__address">
			<span class="icon-location-pin_copy"></span>
			<span>Прийти в гости: <?php echo $config['address'];?></span>
		</div>
	</div>
	<div class="col-md-6">
		<form action="mail.php" method="POST" target="_blank">
			<div class="contacts__text__mail">
				<span class="icon-mail"></span>
				<label for="text__mail">Написать на почту: </label>
				<input id="text__mail" placeholder="Ваше сообщение" type="text" class="contacts__text__mail gradient" name="text" required="required">
			</div>
			<div class="contacts__text__phone__mail">
				<span class="icon-mobile" style="width: 36px"></span>
				<label for="phone__mail">Введите ваш номер: </label>
				<input id="phone__mail" type="tel" maxlength="12" pattern="+7[0-9]{10}" class="contacts__text__mail gradient" name="phone" placeholder="+7(9XX)XXX-XX-XX" required="required">
			</div>
			<input class="button" type="submit" value="Отправить">
		</form>
	</div>
</div>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8a31d1e8a360ad2cec38b21ed8f817cc3d7650b55c2a44184ae9431b3e33cfde&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
</section>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</body>
</html>